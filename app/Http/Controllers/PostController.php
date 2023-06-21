<?php

namespace App\Http\Controllers;

use App\Models\BlogImages;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function __construct(){
        $this->middleware('auth')->except('index','show');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::paginate(5);
       // $post = Post::where('created_at', 'desc');
        $posts = Post::all()->sortDesc();
        $categories = Category::all();

       return view('blog.index',['title'=>'Illustration', 'posts'=>$posts,'po'=>$post,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add post";
        $category = Category::all();
        return view('blog.create', ['title' => $title,'categories'=>$category]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = str_replace(' ', '-', $request->title);

        $request->validate([
            'title' => ['required', 'unique:posts', 'max:200'],
            'category'=>['required'],
            'photos' => 'required',
            'info' => ['required']
        ]);


        // $image = $request->image;
        // $imageName = $image->getClientOriginalName();
        // $imageExt = $image->getClientOriginalExtension();
        // $newImageName = uniqid() . '-' . $imageName;

        $post = new Post([
            'title' => $request->title,
            'slug' => $slug,
            'body' => $request->info
            // 'photo' => $newImageName
        ]);
        $post->save();
        $post->categories()->attach($request->category);

        if($request->hasFile('photos')){
            $this->insertImages($request,$post);
        }else{
            $newFileName = uniqid() .'-'.'default.jpg';
            $blogImage = new BlogImages([
                'post_id' => $post->id,
                'filename' => $newFileName
            ]);

            $post->blogImages()->save($blogImage);
        }

        return redirect(route('blog.create'))->with('status', 'Post successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
        $post = Post::where('slug',$slug)->first();
        $title = $post->title;

        return view('blog.show', ['post' => $post,'title'=>$title]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $categories = Category::all();
        $post = Post::where('slug',$slug)->first();
        //print_r($post->categories);
        // var_dump($post);die;

        return view('blog.edit', ['post' => $post, 'title' => 'Edit post', 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slu)
    {
        //
       $update = Post::where('slug',$slu)->first();
       $slug = str_replace(' ', '-', $request->title);

       $validated = [
        'title' => $request->title,
        'slug' => $slug,
        'body' => $request->info
    ];
        //Delete the existing relationship in the pivot table
        $update->categories()->detach();
        $updated = $update->update($validated);
        if($updated){
            $update->categories()->attach($request->category);
          return  redirect(url('blog/'.$update->slug.'/edit'))->with('status', 'Update successful');
        }

       // $this->insertImages($request,$update);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        //
        $post = Post::where('slug',$slug)->first();
        $postID = $post->id;
        $postImages = BlogImages::where('post_id',$postID);
        $deletePost = $post->delete();
        if($deletePost){
            $post->categories()->detach();
            $postImages->delete();

          return  redirect(url('blog'))->with('status', 'Post deleted');
        }

    }

    private function insertImages($request,$post){

        foreach($request->photos as $photo){

            $allowedExtensions = ['png','jpg','jpeg','pdf','docx'];
            $name = $photo->getClientOriginalName();
            $ext = $photo->getClientOriginalExtension();

            $newFileName = uniqid() . '-' . $name;
            $check = in_array($ext,$allowedExtensions);

            if($check){
                $photo->move(public_path('img/photos'), $newFileName);
                $blogImage = new BlogImages([
                    'post_id' => $post->id,
                    'filename' => $newFileName
                ]);

                $post->blogImages()->save($blogImage);
            }else{
                echo "something went wrong";
            }

        }


    }

}

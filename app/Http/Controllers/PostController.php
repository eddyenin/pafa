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
        $posts = Post::all();
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
       // var_dump($request->info);die;

         $request->validate([
            'title' => ['required', 'unique:posts', 'max:200'],
            'category'=>['required'],
            'photos' => 'required',
            'info' => ['required']
        ]);

        //if ($request->hasFile('photos'))
       // {
            //$image = $request->image;
           // $imageName = $image->getClientOriginalName();
            //$imageExt = $image->getClientOriginalExtension();
            //$newImageName = uniqid() . '-' . $imageName;

            $post = new Post([
                'title' => $request->title,
                'slug' => $slug,
                'body' => $request->info
                // 'photo' => $newImageName
            ]);
            $post->save();
            $post->categories()->attach($request->category);

            $this->insertImages($request,$post);

        //}

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
        // var_dump($post);die;

        return view('blog.edit', ['post' => $post, 'title' => 'Edit post', 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slu)
    {
        //

        $slug = str_replace(' ', '-', $request->title);


       $update = Post::where('slug',$slu)->first();
       //$getUpdateId = $update->id;
       //var_dump($getUpdateId);die;

       $updated = [
        'title' => $request->title,
        'slug' => $slug,
        'body' => $request->info
    ];

        $update->categories->id = $request->category;
       // echo "<pre>"; print_r($update->categories);die;
        $update->categories()->attach($request->category);
        $update->update($updated);

      // $update->push();



       // $this->insertImages($request,$update);
       return redirect(url('blog/' .$update->slug.'/edit'))->with('status', 'updated successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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

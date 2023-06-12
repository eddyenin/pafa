<?php

namespace App\Http\Controllers;

use App\Models\BlogImages;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

       return view('blog.index',['title'=>'Illustration', 'posts'=>$posts]);
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

        if ($request->hasFile('photos'))
        {
            $image = $request->image;
            $imageName = $image->getClientOriginalName();
            //$imageExt = $image->getClientOriginalExtension();
            $newImageName = uniqid() . '-' . $imageName;

            $post = new Post([
                'title' => $request->title,
                'slug' => $slug,
                'body' => $request->info,
                'photo' => $newImageName
            ]);
            $post->save();
            $post->categories()->attach($request->category);


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

        return redirect(route('blog.create'))->with('status', 'Post successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::findOrfail($id);

        return view('blog.show', ['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::findOrfail($id);

        return view('blog.edit', ['post' => $post, 'title' => 'Edit post']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

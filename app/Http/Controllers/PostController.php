<?php

namespace App\Http\Controllers;

use App\Models\BlogImages;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add post";
        return view('blog.create',
            [
                'title' => $title
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = str_replace(' ', '-', $request->title);


        $validate = $request->validate([
            'title' => ['required', 'unique:posts', 'max:200'],
            'photos' => 'required',
            'info' => ['required']
        ]);

        if ($request->hasFile('photos'))
        {
            // dd($request->photos);exit;
                $post = new Post([
                    'title' => $request->title,
                    'slug' => $slug,
                    'body' => $request->info
                ]);

                $post->save();

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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

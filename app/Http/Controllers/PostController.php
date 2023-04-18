<?php

namespace App\Http\Controllers;

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
        $slug = str_replace(' ', ' - ', $request->title);


        $validate = $request->validate([
            'title' => ['required', 'unique:title', 'max:200'],
            'body' => ['required'],
            'image_path' => ['required','mimes:jpg,png,jpg,jpeg','max:102400'],
            'info' => ['required']
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'image_path' => $this->image_upload($request->file),
            'body' => $request->info
        ]);

        $post->save();

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

    private function image_upload($request)
    {
       $file = $request->file('photos');
       foreach($file as $fil)
       {
        $imageName = $fil->getClientOriginalName();
        $ext = $fil->getClientOriginalExtension();

        $newImageName = uniqid() . $imageName . ' . ' . $ext;
       }

        $file->move(public_path('img/photos'), $newImageName);

    }
}

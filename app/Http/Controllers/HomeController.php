<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()

    {
        $post = Post::all();

        $i=0;
        $maxiteration = 5;

        foreach($post as $p){
            if($i<$maxiteration){
               $arr[$i] = $p;
               $i++;
            }else{
                break;
            }
        }

        //var_dump($p->blogImages);die;

        return view('index',['post' => $post]);

    }
}

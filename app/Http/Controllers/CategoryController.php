<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function create(){
    return view('category.index',['title'=>'Add category','categories'=>Category::all()]);
   }

   public function store(Request $request){

    $validate =  $this->validate($request,['title' => 'required|unique:categories' ]);

    if($validate){
        $category = new Category(['title' => $request->title]);
        $category->save();

        return redirect(route('category.create'))->with('status', 'Category created successfuly');
    }else{
        return redirect(route('category.create'))->with('error', 'Something went wrong');
    }

   }
}

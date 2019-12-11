<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function Index(){

      $data['blogs'] = Blog::with(['category'])->orderBy('id','desc')->limit(12)->get();
     // return $data['blogs'];
        return view('blog.index')->with($data);

    }
    public function input(){
        return view('blog.input');
    }
    public function show_blog($id){
       
    

        $data=[

            'blog' =>  Blog::find($id)
        ];
        

       return view('blog.show_blog')->with($data);

    
    }

    public function admin_acess(){

        $data['blogs'] = Blog::with(['category'])->get();

        return view('blog.admin_acess')->with($data);
    }

    


}

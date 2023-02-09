<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\news;
use Illuminate\Http\Request;

class concontroller extends Controller
{
    //
    public function index(){
        $noas=category::orderBy('id','DESC')->get();
        $posts=news::inRandomOrder()->paginate(10);
        return view('welcome',compact('posts','noas'));

    }
    public function boot(){
        $noas=category::orderBy('id','DESC')->get();
        return view('bootstrap',compact('noas'));
    }
    public function admin(){
        $noas=category::orderBy('id','asc')->get();
        return view('admin',compact('noas'));

    }
    public function add(Request $request){
        $validate=$request->validate([
            'image'=>'required',
            'title'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);
        if($validate){
            $image=$request->file('image');
            $extension=$image->getClientOriginalExtension();
            $image_name=time().'.'.$extension;
            $image_name_path='/storage/pics/'.$image_name;
            $image->move('storage/pics',$image_name);
             news::create([
             'image'=>$image_name_path,
             'title'=>$request->title,
             'description'=>$request->description,
             'category'=>$request->category
             ]);
         }
         return redirect()->back();


    }

    public function ard(Request $request,$category){
        $noas=category::orderBy('id','DESC')->get();
         $cate=$category;
        $titles=news::orderBy('created_at','DESC')->where('category','=',$cate)->paginate(4);
        $count=$titles->count();

 //
//$ton=news::sum('id');

//
        return view('nnew',compact('category','noas','titles','count')) ;
        
    }

    public function go($id){
        $noas=category::orderBy('id','DESC')->get();

        $tions=news::where('id','=',$id)->first();

        return view('go',compact('noas','tions')) ;
        
    }

    public function search(Request $request){
        $noas=category::orderBy('id','DESC')->get();
        $search = $request->input('search');
        $posts = news::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->paginate(7);
    
        return view('search', compact('posts','noas'));
        }

}
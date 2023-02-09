<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class mnrController extends Controller
{
    //
    public function vie(){
        return view('vie');
    }
   
    public function store(Request $request){

        $image=$request->file('image');
           $extension=$image->getClientOriginalExtension();
           $image_name=time().'.'.$extension;
           $image->move('storage/pics',$image_name);
            $create=news::create([
            'image'=>$image_name,
            'title'=>$request->title,
            'content'=>$request->content
            ]); 
            if($create){
                return redirect()->back();
            }
    }
    public function ard(){
            $news=news::get();
            return view('ard',compact('news'));
        }
        public function nnew(Request $request,$id){
            $nnew=news::where('id','=',$id)->first();
            return view('nnew',compact('nnew'));
        }
        public function ven(){
            return news::all();
        }
}
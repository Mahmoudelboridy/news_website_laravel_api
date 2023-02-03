<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class newcontroller extends Controller
{
    //
    public function create(Request $request){
                  $image=$request->file('image');
            $extension=$image->getClientOriginalExtension();
            $image_name=time().'.'.$extension;
            $image_name_path='/storage/pics/'.$image_name;
            $image->move('storage/pics',$image_name);
            $data=news::create([
                'image'=>$image_name_path,
                'title'=>$request->title,
                'content'=>$request->content,
                'category'=>$request->content
                ]);  
                if($data){
                    return response()->json([
                        'message'=>'news added',
                        'status'=>'success',
                        'data'=>$data 
                    ]);}
        }

        public function createn(Request $request){
            $validate=$request->validate([
                'image'=>'required',
                'title'=>'required',
                'category'=>'required',
                'content'=>'required'

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
                 'content'=>$request->content,
                 'category'=>$request->category
 
                 ]);
             }
             return redirect()->back();
    
        }
        public function wget(){
            $news=news::all();
            return view('all',compact('news'));

        }
        public function wgett(){
            $category="Tech";
            $news=news::where('category','=',$category)->get();
            return view('Tech',compact('news'));
        }
        public function wgets(){
            $category="sport";
            $news=news::where('category','=',$category)->get();
            return view('sport',compact('news'));

        }
        public function wgetp(){
            $category="politics";
            $news=news::where('category','=',$category)->get();
            return view('politics',compact('news'));

        }
        public function get(){
            return response()->json([
                'news'=>news::all()
            ]);
        }
        public function gett(){
            $category="Tech";
            return response()->json([
                'news'=>news::where('category','=',$category)->get()
            ]);


        }
        public function gets(){
            $category="sport";
            return response()->json([
                'news'=>news::where('category','=',$category)->get()
            ]);
        }
        public function getp(){
             $category="politics";
            return response()->json([
                'news'=>news::where('category','=',$category)->get()
            ]);
     }
       
    }
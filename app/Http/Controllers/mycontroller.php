<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

class mycontroller extends Controller
{
     function insert(Request $request)
     {
        $name=$request->get('name');
        $price=$request->get('price');
        $pimage=$request->file('image')->getClientOriginalName();
        //move uploaded file
        $request->image->move(public_path('images'), $pimage);
        
        $prod = new product();
        $prod ->PName = $name;
        $prod ->PPrice = $price;
        $prod ->PImage = $pimage;
        $prod->save();
        return redirect('insertRead');
     }
     public function readdata(){
            $pdata = product::all();
            return view('insertRead',['data'=>$pdata]);
            
     }
     public function deletedata($id){
        $res=product::where('Id',$id)->delete();
        return redirect('insertRead');  
    }
    public function editpage($id)
    {
       $show=product::where('Id',$id)->get();
       return view('editpage',['data'=>$show]);
    }
    

 }
 
 

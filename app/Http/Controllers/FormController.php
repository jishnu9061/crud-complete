<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

class FormController extends Controller
{
   public function index(Request $request)
   {
      $validatedData = $request->validate([
         'name' => 'required|max:255',
         'price' => 'required|max:255',
         'image' => 'required'
     ]);
     
   
      $id=$request->get('id');
      $name=$request->get('name');
      $price=$request->get('price');
      $pimage=$request->file('image');
      $update=product::where('id',$id)->update(['PName'=>$name,'PPrice'=>$price,'PImage'=>$pimage]);
      $show = product::all();
   return view('insertRead', ['data'=>$show]);
   }
}

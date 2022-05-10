<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;
use Session;

class ProductController extends Controller
{
    public function index(){
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    public function detail($id){
        $data=Product::find($id);
        return view('detail',['product'=>$data]);
    }
    public function search(Request $r){
        $data=Product::where('name','like','%'.$r->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    public function addToCart(Request $r){
          if($r->session()->has('user')){
            $cart= new Cart;
            $cart->user_id=$r->session()->get('user')->id;
            $cart->product_id=$r->product_id;
            $cart->save();
            return redirect('/');
          }else{
            return redirect('/login');
          }
      }
      public static function cartItem(){
            $userId=Session::get('user')->id;
            return Cart::where('user_id',$userId)->count();
          }
}

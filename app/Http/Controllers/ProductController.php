<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\DB;

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
     static  function cartItem(){
        $userId=Session::get('user')->id;
        return Cart::where('user_id',$userId)->count();
      }
      public function cartList(){
        $userId=Session::get('user')->id;
        $data=DB::table('cart')->join('products','cart.product_id','products.id')->select('products.*','cart.id as cart_id')->where('cart.user_id',$userId)->get();
        return view('cartlist',['products'=>$data]);
      }
      public function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
      }
}

<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;

class ProductsController extends Controller
{
    public function index(){
        $productCategories = ProductCategory::all();
        $productsByCategories = array();
        foreach($productCategories as $category){
            $productByCategory = array(
                'category' => $category->name, 
                'products' =>  ProductCategory::with('products')->find($category->id)->products 
            );
            array_push($productsByCategories, $productByCategory);

            
        }
        return view('buyer.dashboard', compact('productsByCategories'));
    }

    public function cart(){
        return view('buyer.cart');
    }

    public function addToCart($id){
        $product = Product::find($id);

        if(!$product){
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart){
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "photo" => $product->photo,
                    "price" => $product->price
                ]
                ];
        }
        else {
            if(isset($cart[$id])){
                $cart[$id]['quantity']++;
            }
            else {
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => 1,
                    "photo" => $product->photo,
                    "price" => $product->price
                ];
            }
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product was addded to cart');
    }


    public function remove( $id){
        if($id){
            $cart = session()->get('cart');
            if(isset($id)){
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'Product was removed from the cart');
        }
    }

    public function removeAll(){
        $cart = session()->get('cart');
        if($cart){
            session()->forget('cart', $cart);
        }
        return redirect()->back()->with('success', 'All products removed');
    }

    public function showProduct($id){
        $product = Product::find($id);
        return view('buyer.product',compact('product'));
    }

}

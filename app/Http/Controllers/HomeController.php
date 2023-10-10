<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{



    public function home(){
        $products = Product::orderBy("created_at","desc")->paginate(14);
        return view("user.pages.home",compact("products"));
    }

    public function product(Product $product,Request $request){


        // Truyền số ngày vào view
        return view("user.pages.product", compact("product"));
    }

    public function category(Category $category){
        // dựa vào id tìm category
        // nếu ko tồn tại -> 404
//        $category = Category::find($id);
//        if($category == null){
//            return abort(404);
//        }

//        $category = Category::findOrFail($id);

        $products = Product::where("category_id",$category->id)
            ->orderBy("created_at","desc")->paginate(14);
        return view("user.pages.category",compact("products"));
    }

    public function addToCart(Product $product, Request $request){
        $buy_qty = $request->get("buy_qty");
        $cart = session()->has("cart")?session("cart"):[];
        foreach ($cart as $item){
            if($item->id == $product->id){
                $item->buy_qty = $item->buy_qty + $buy_qty;
                session(["cart"=>$cart]);
                return redirect()->back()->with("success","Your vehicle has just been added to the cart!");
            }
        }
        $product->buy_qty = $buy_qty;
        $cart[] = $product;
        session(["cart"=>$cart]);
        return redirect()->back()->with("success","Your vehicle has just been added to the cart!");
    }
    public function cart(Request $request){
        $cart = session()->has("cart")?session("cart"):[];
        $subtotal = 0;
        $can_checkout = true;
        foreach ($cart as $item){
            $subtotal += $item->price * $item->buy_qty;
            if($item->buy_qty > $item->qty)
                $can_checkout = false;
        }


        $total = $subtotal*1.1; // vat: 10%

        return view("user.pages.cart",compact("cart","subtotal","total","can_checkout"));
    }

    public function deleteFromCart(Product $product){
        $cart = session()->has("cart") ? session("cart") : [];
        $cart = array_filter($cart, function ($item) use ($product) {
            return $item->id != $product->id;
        });
        session()->put("cart", $cart);
        return redirect()->back()->with("success", "Product removed from cart!");


    }
    public function clearCart(){
        session()->forget("cart");
        return redirect()->back()->with("success", "All products have been removed from the cart!");
    }


}

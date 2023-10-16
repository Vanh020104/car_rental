<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{



    public function home(){
        $products = Product::orderBy("created_at","desc")->paginate(14);
        return view("user.pages.home",compact("products"));
    }

    public function product(Product $product){



        return view("user.pages.product", compact("product"));
    }

    public function category(Category $category){
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
    public function cart(){
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


    public function checkoutSlug($slug)
    {
        // Lấy thông tin sản phẩm từ slug
        $product = Product::where('slug', $slug)->first();

        // Kiểm tra xem sản phẩm có tồn tại hay không
        if (!$product) {
            abort(404);
        }

        // Chuyển hướng sang trang thanh toán và truyền thông tin sản phẩm
        return view('user.pages.checkout', ['product' => $product]);
    }


    public function checkoutForm()
    {
        return view('user.pages.cart');
    }

    public function processCheckout(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'location' => 'required',
            'tel' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $startDate = Carbon::parse($validatedData['start_date']);
        $endDate = Carbon::parse($validatedData['end_date']);

        if ($endDate->lessThan($startDate)) {
            // Ngày kết thúc sau ngày bắt đầu
            $errorMessage = 'Ngày kết thúc phải sau ngày bắt đầu. Vui lòng chọn lại.';
            return redirect()->back()->with("success",compact("errorMessage"));
        }

        $numOfDays = $startDate->diffInDays($endDate) +1;

        $order = new Order;
        $order->full_name = $validatedData['full_name'];
        $order->email = $validatedData['email'];
        $order->address = $validatedData['address'];
        $order->location = $validatedData['location'];
        $order->tel = $validatedData['tel'];
        $order->start_date = $startDate;
        $order->end_date = $endDate;
        $order->start_time = $validatedData['start_time'];
        $order->end_time = $validatedData['end_time'];
        $order->num_of_days = $numOfDays;
        $order->save();
        // Redirect or do something else
        $cart = session()->has("cart")?session("cart"):[];
        $subtotal = 0;
        foreach ($cart as $item){
            $subtotal += $item->price * $item->buy_qty;
        }
        $total = $subtotal*1.1; // vat: 10%



        return view("user.pages.bill",compact("subtotal","total","order"));
    }
    public function placeOrder(){

    }

}

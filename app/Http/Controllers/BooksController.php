<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showCart()
    {
        $user = Auth::user();
        $count = \App\Models\Cart::where('phone', $user->phone)->count();
        $cart = \App\Models\Cart::where('phone', $user->phone)->get();

        return view('main.cart', compact('cart', 'user', 'count'));
    }

    public function deleteItem($id)
    {
        $data = Cart::find($id);
        $data->delete();
        if (!$data->delete()) {
            Session::flash('success', 'Book removed from cart successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Book removal failed');
            return redirect()->back();

        }
    }

    public function order(Request $request)
    {
        $user = Auth::user();

        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach ($request->productname as $key => $productname) {
            $order = new Order();

            $order->product_name = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];

            $order->name = $name;
            $order->phone = $phone;
            $order->address = $address;

            $order->status = 'not delivered';

            $order->save();


        }
        DB::table('carts')->where('phone', $phone)->delete();
        if (DB::table('carts')->delete()) {
            Session::flash('error', 'We were unabel to process your order. Please try again');
            return redirect()->back();
        } else {
            Session::flash('success', 'Order has been Placed successfully. Thank you for choosing vitabooks');
            return redirect()->back();

        }

//        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $bookDetails = $request->all();

        if ($coverPicFile = $request->file('cover_pic')) {
            $backPicFile = $request->file('back_pic');
            $coverPicFileName = time() . $coverPicFile->getClientOriginalName();
            $backPicFileName = time() . $backPicFile->getClientOriginalName();
            $coverPicFile->move('book-pics', $coverPicFileName);
            $backPicFile->move('book-pics', $backPicFileName);
            $bookDetails["cover_pic"] = $coverPicFileName;
            $bookDetails["back_pic"] = $backPicFileName;
            Books::create($bookDetails);
            Session::flash('success', 'Book added successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Book addition failed');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function addCart(Request $request, $id)
    {
        if (Auth::id()) {

            $user = Auth::user();
            $cart = new Cart();
            $product = Books::find($id);

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->book_name;
            $cart->price = $product->book_price;
            $cart->quantity = $request->quantity;
            $cart->save();
            if ($cart->save()) {
                Session::flash('success', 'Book added to cart successfully');

            } else {
                Session::flash('error', 'Book addition failed');
                return redirect()->back();

            }

            return redirect()->back();
        } else {
            return redirect('login');
        }


//        return "id is" . $id;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests=Test::with('category')->get();
        return view('admin.pages.diagonistic.test-assign',compact('tests'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->put('key','100');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart(Test $test, Request $request)
    {
        //dd($product->id);
        $cart = session()->get('cart');
        // dd($cart);
        
        if(!$cart) 
            {
                $cart = [
                    $test->id=> [
                        'name' => $test->name,
                        'price' => $test->price,
                    ]
                ];
                session()->put('cart', $cart);
                // dd($cart);
                return redirect()->back();
            }

        // if(isset($cart[$test->id]))
        //     {
        //         $cart[$product->id]['quantity']++;
        //         session()->put('cart', $cart);
        //         //dd($cart);
        //         return redirect()->back();
        //     }
            
        $cart[$test->id] = [
                        'name' => $test->name,
                        'price' => $test->price,
            ];
            session()->put('cart', $cart);
            return redirect()->back();
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        //dd($paid);

        if (isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function clearCart(Request $request)
    {

        $request->session('cart');
        // dd(session()->all());
        session()->forget('cart');
        
        return redirect()->back();
    }

}

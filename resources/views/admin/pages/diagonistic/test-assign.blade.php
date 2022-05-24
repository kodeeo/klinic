@extends('admin.master')
@section('content')


<div style="display: flex;">

    <div class="container" style="text-align:center; width:55%">
        <h1>Add To Cart</h1>
        <hr>
        <form action="{{route('cart.index')}}" method="GET">
            <input name="search" class="search-input" type="text" aria-label="Search">
            <button style="background-color:rgb(39, 166, 168);" type="submit"><i class='fas fa-search'></i></button>
        </form>
        <br>    
        
                <div class="row">
                    @foreach($tests as $test)
                    <a href="{{route('addToCart', [$test->id])}}">
                        <div class="col" style="margin:5px; border-style: solid; border-color: #a5a5a5; border-radius: 10px; background: #27a6a8">
                                    <h5>{{$test->name}} ____ BDT: {{$test->price}}</h5>
                                    
                                </ul>
                        </div>
                    </a>
                    @endforeach
                </div>   
    </div>

    
        <div class="container"  style="width:45%; text-align:center;">
            <h1>Cart</h1>
            <hr>
               <table class="table table-bordered">
                   <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                   </thead>
    
                   <tbody>
                       @php
                            $total = 0;
                            $change = 0;
                       @endphp
    
                       @if(session('cart'))
                            @foreach (session('cart') as $id => $test)
                            {{-- @dd(session()->all()) --}}
    
                                @php
                                    $subtotal = $test['price'];
                                    $total += $subtotal;
                                @endphp
    
                                <tr>
                                   
                                    <td>{{$test['name']}}</td>
                                    <td>{{$test['price']}}</td>
                                    <td>{{$subtotal}}</td>
                                    <td>
                                        <a href="{{route('remove', [$id])}}" class="btn btn-sm btn-danger">X</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                       
                   </tbody>
    
                   
                   <tfoot>
                       <tr>
                            {{-- <td>
                                <a href="#" class="btn btn-success">Continue Shopping</a>
                            </td> --}}
                            <td colspan="2"><strong>Total Amount</strong></td> 
                            <td>{{$total}}</td>
                            <td>
                                <a href="{{route('clearCart')}}" class='btn btn-danger'>Remove</a>
                            </td>
    
                            {{-- @dd(session()->all()) --}}
                       </tr>
    
    
                        {{-- @dd(session()->all()) --}}
                   </tfoot>
               </table>
    
               <form action="{{route('cart.store')}}" method="POST">
                @csrf
                <button style="background-color:rgb(10, 187, 16); padding:8px; border-radius:6px;" type="submit">Proceed To Pay</button>
                </form>
    
    
               {{-- <a href="{{route('orders.store')}}" class="btn btn-primary">Button</a> --}}
    
        </div>
    



</div>




@endsection
@extends('admin.master')
@section('content')


<div class="container" style="display: flex;">

    @php
    $total = 0;
    $change = 0;
    @endphp


                @if(session()->has('key'))
                {{-- @dd(session('key')) --}}
                @foreach (session('cart') as $id => $test)
                            {{-- @dd(session('cart')) --}}
    
                                @php
                                    $subtotal = $test['price'];
                                    $total += $subtotal;
                                @endphp
                                @endforeach

            
    
        {{-- @dd(session('money')) --}}
        
        <div class="container" style="text-align:center; width:55%">
            <h1>Calculate</h1>
            <hr>
            <br> 
            
            <div class="container" style="display: flex; justify-content:center;">            
                <div class="card" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:2px; padding-left: 10%; padding-right: 10%; padding-top: 2%; padding-bottom: 5%; background:aqua;" >
                    <h3>Total Due</h3>
                    <br>
                    <h4 id="total">{{$total}} </h4>
                </div>

                <div class="card" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:2px; padding-left: 10%; padding-right: 10%; padding-top: 2%; padding-bottom: 5%; background:orange;" >
                    <h3>Change</h3>
                    <br>
                    <h4 id="change">BDT 00 /- </h4>

                </div>
            </div>


            <form action="#" method="POST" style="background: #27a6a8; margin-top:5%; border-radius:10px;">
                <div style="display: flex;">
                    <div class="col-md-6 mb-4" style="margin-top:5%;">
                        <label for="exampleInputAmount"><h3>Amount</h3></label>
                        <input type="text" id="amount" name="amount" onkeyup="calculate()">
                    </div>
                
                    <div class="col-md-6 mb-4" style="margin-top:5%;">
                            <label for="method"><h3>Payment Method</h3></label>
                            <select name="method" id="method" style="padding-right:50px; ">
                                <option value="volvo">Cash</option>
                                <option value="saab">Digital Banking</option>
                            </select>                    
                    </div>
                </div>
                
        
                <button type="submit" class="btn btn-success" style="margin-bottom: 2%;">Pay</button>
            </form>
        
        </div>
    
    
    
    
       
    
            
    
        @else

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

    @endif

    
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
                
                <br>
    
               <a href="{{route('key.clear')}}" class="btn btn-primary">Re-Assign Test</a>
    
        </div>
    



</div>

<script type="text/javascript">

function calculate() {
 var amount=document.getElementById("amount").value;
 var total=document.getElementById("total").innerHTML;
 
 document.getElementById("change").innerHTML=amount-total;
}

</script>



@endsection
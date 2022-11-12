@extends("layout.index")
@section("content")
    <h1>CART</h1>
    @if(session()->has('success'))
        <div class="alert alert-success">
            <p>{{session('success')}}</p>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">
            <p>{{session('error')}}</p>
        </div>
    @endif
    <div style="padding: 50px; text-align: center;">
        <table>
            <tr style="background-color: #e0a800">
                <td style="padding: 10px; font-size: 20px;">Product Name</td>
                <td style="padding: 10px; font-size: 20px;">Product Quantity</td>
                <td style="padding: 10px; font-size: 20px;">Product Price</td>
                <td style="padding: 10px; font-size: 20px;">Action</td>
            </tr>

            <form action="{{url('order')}}" method="POST">
                @csrf
                @if(isset($cart))
                    @foreach($cart as $carts)
                        <tr style="background-color: #000000">
                            <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                                <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden>
                                {{$carts->product_title}}</td>
                            <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                                <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden>
                                {{$carts->quantity}}</td>
                            <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                                <input type="text" name="price[]" value="{{$carts->price*$carts->quantity}}" hidden>
                                {{$carts->price*$carts->quantity}}</td>
                            <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold"><a
                                    href="{{url('deleteItem',$carts->id)}}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                @endif

                {{--                $carts->price*$carts->quantity*$carts->count()--}}

                {{--                <?php--}}
                {{--                $user = Auth::user();--}}
                {{--                $carts = \App\Models\Cart::where('phone', $user->phone)->get();--}}

                {{--                ?>--}}
                {{--                <p>Total Amount {{number_format($count*$carts->quantity*$carts->price)}} Kshs</p>--}}
                <button class="btn btn-success">Checkout</button>
            </form>

        </table>

    </div>

@endsection

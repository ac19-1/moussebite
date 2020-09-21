@extends('default.index')

@section('style')
    <style>
        .cart{
            width: 70%;
        }

        .item {
            width: 90%;
            height: 40vh;
        }

        .image {
            height: 50%;
            width: 100%;
            background-position: center;
            background-size: cover;
        }

        .form{
            height: 60vh;
            position: sticky;
            top: 25%;
            background-color: lightslategray;
            color: white;
        }
    </style>
@endsection()

@section('content')
    @if($cart->count())
        <div class="d-flex justify-content-evenly">
            <div class="cart py-5">
                <hr style="width: 90%;" class="mx-auto my-2">
                <div class="m-auto d-flex justify-content-center align-items-center text-center" style="width: 90%">
                    <div class="mx-2 font-weight-bold" style="width: 30%;">
                        Product
                    </div>
                    <div class="price mx-2 font-weight-bold" style="width: 30%">Price</div>
                    <div class="quantity mx-2 font-weight-bold" style="width: 30%">Quantity</div>
                    <div class="total mx-2 text-center font-weight-bold" style="width: 30%">Total</div>
                    <div class="remove mx-2 text-center font-weight-bold" style="width: 30%">

                    </div>
                </div>
                <hr style="width: 90%;" class="mx-auto my-2">
                @foreach($cart as $item)
                    <div class="m-auto item d-flex justify-content-center align-items-center">
                        <div class="mx-2 d-flex justify-content-center flex-column flex-wrap" style="width: 30%; height: 100%">
                            <div class="image mb-2" style="background-image: url('./storage/images/mousse/{{\App\Mousse::find($item->mousse_id)->image}}')"></div>
                            <div class="name w-100" style="width: 30vh">{{\App\Mousse::find($item->mousse_id)->name}}</div>
                            <div class="size w-100 text-capitalize">Size: {{\App\Size::find($item->size_id)->name}}</div>
                        </div>
                        <div class="price mx-2 text-center" style="width: 30%">Rp{{number_format(\App\Mousse::find($item->mousse_id)->price,0,',','.')}},-</div>
                        <div class="quantity mx-2 text-center" style="width: 30%">{{$item->quantity}}</div>
                        <div class="total mx-2 text-center" style="width: 30%">Rp{{number_format(\App\Mousse::find($item->mousse_id)->price * $item->quantity,0,',','.')}},-</div>
                        <div class="remove mx-2 text-center font-weight-bold" style="width: 30%">
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="mousse_id" value="{{$item->mousse_id}}">
                                <input type="hidden" name="size_id" value="{{$item->size_id}}">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="form w-25">
                <form action="" method="post">
                    @csrf
                    <div class="title my-3 text-center">
                        <h4>We are ready to deliver!</h4>
                    </div>
                    <div class="inputs mt-5 mx-5">
                        <div class="name">
                            <input required type="text" name="name" id="" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="Name" class="form-control w-100 my-3">
                        </div>
                        <div class="phone">
                            <input required type="text" name="phone" id="" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" placeholder="Phone Number" class="form-control w-100 my-3">
                        </div>
                        <div class="address">
                            <textarea required name="address" id="" class="form-control w-100 my-3" placeholder="Address">{{\Illuminate\Support\Facades\Auth::user()->address}}</textarea>
                        </div>
                        <div class="total mt-4">Total: Rp{{number_format($total,0,',','.')}},-</div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-light">Check out</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="d-flex justify-content-center align-items-center flex-wrap p-5">
            <img class="my-5" src="./storage/images/illustrations/empty_cart.svg" alt="" width="30%">
            <div class="w-100 text-center"><h5>Sweets for your every desire</h5></div>
            <div class="w-100 d-flex justify-content-center mt-5">
                <a href="/mousse" class="btn btn-pink">Browse MousseBite</a>
            </div>
        </div>
    @endif
@endsection()
@extends('default.index')

@section('style')
    <style>
        .item {
            width: 70%;
            height: 40vh;
        }

        .image {
            height: 50%;
            width: 90%;
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection()

@section('content')
    <div class="cart py-5">
        <hr style="width: 70%;" class="mx-auto my-2">
        <div class="m-auto d-flex justify-content-center align-items-center text-center" style="width: 70%">
            <div class="mx-2 font-weight-bold" style="width: 30%;">
                Product
            </div>
            <div class="price mx-2 font-weight-bold" style="width: 30%">Price</div>
            <div class="quantity mx-2 font-weight-bold" style="width: 30%">Quantity</div>
            <div class="total mx-2 text-center font-weight-bold" style="width: 30%">Total</div>
        </div>
        <hr style="width: 70%;" class="mx-auto my-2">
    @foreach($cart as $item)
            <div class="m-auto item d-flex justify-content-center align-items-center">
                <div class="mx-2 d-flex justify-content-center flex-column flex-wrap" style="width: 30%; height: 100%">
                    <div class="image mb-2" style="background-image: url('./storage/images/mousse/{{\App\Mousse::find($item->mousse_id)->image}}')"></div>
                    <div class="name w-100" style="width: 30vh">{{\App\Mousse::find($item->mousse_id)->name}}</div>
                    <div class="size w-100 text-capitalize">Size: {{\App\Size::find($item->size_id)->name}}</div>
                </div>
                <div class="price mx-2 text-center" style="width: 30%">Rp.{{\App\Mousse::find($item->mousse_id)->price}},-</div>
                <div class="quantity mx-2 text-center" style="width: 30%">{{$item->quantity}}</div>
                <div class="total mx-2 text-center" style="width: 30%">Rp.{{(\App\Mousse::find($item->mousse_id)->price * $item->quantity)}},-</div>
            </div>
        @endforeach
    </div>
@endsection()
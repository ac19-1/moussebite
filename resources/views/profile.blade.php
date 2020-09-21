@extends('default.index')

@section('style')
    <style>
        .profile {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: linear-gradient(to top, #ffecd2 0%, #fcb69f 100%);
        }

        .logo {
            width: 200px;
            height: 200px;
            background-color: white;
            border-radius: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .history {
            min-height: 70vh;
            background-color: #dddfe5;
        }

        .history .title {
            background-color: white;
            text-align: center;
            font-size: xx-large;
        }
    </style>
@endsection()

@section('content')
    <div class="profile">
        <div class="logo">
            <img src="./storage/images/logobanner/MousseBite[transp]-01.png" alt="" width="90%">
        </div>
        <div class="name my-4">
            <h2>{{$user->name}}</h2>
        </div>
        <div class="button">
            <a href="/profile/edit" class="btn btn-outline-secondary">Edit Profile</a>
        </div>
    </div>
    <div class="history">
        <div class="title d-flex justify-content-center w-100 px-5 py-2">
            History
        </div>
        <div class="transactions px-5 py-2">
        @if($headers->count() > 0)
            @foreach($headers as $h)
                <div class="header card my-5">
                    <div class="date card-title d-flex justify-content-end m-4 font-weight-bold">{{$h->date}}</div>
                    <div class="details card-body">
                        <hr class="mx-0 mb-2 mt-0">
                        <div class="detail d-flex justify-content-between align-items-center">
                            <div class="name mx-3 text-center font-weight-bold" style="width: 30%">Product</div>
                            <div class="size mx-3 text-center font-weight-bold" style="width: 20%">Size</div>
                            <div class="price mx-3 text-center font-weight-bold" style="width: 20%">Price</div>
                            <div class="quantity mx-3 text-center font-weight-bold" style="width: 10%">Quantity</div>
                            <div class="subtotal mx-3 text-center font-weight-bold" style="width: 20%">Total</div>
                        </div>
                        <hr class="mx-0 my-2">
                        @php
                            $total = 0;
                        @endphp
                        @foreach($details as $d)
                            @if($d->transaction_id == $h->id)
                                <div class="detail d-flex justify-content-between align-items-center">
                                    <div class="name mx-3 text-center" style="width: 30%">{{\App\Mousse::find($d->mousse_id)->name}}</div>
                                    <div class="size mx-3 text-center text-capitalize" style="width: 20%">{{\App\Size::find($d->size_id)->name}}</div>
                                    <div class="price mx-3 text-center" style="width: 20%">Rp{{number_format(\App\Mousse::find($d->mousse_id)->price,0,',','.')}},-</div>
                                    <div class="quantity mx-3 text-center" style="width: 10%">{{$d->quantity}}</div>
                                    <div class="subtotal mx-3 text-center" style="width: 20%">Rp{{number_format($d->quantity * \App\Mousse::find($d->mousse_id)->price,0,',','.')}},-</div>
                                    @php
                                        $total += ($d->quantity * \App\Mousse::find($d->mousse_id)->price);
                                    @endphp
                                </div>
                            @endif
                        @endforeach
                        <hr class="mx-0 my-2">
                        <div class="grandtotal text-center font-weight-bold float-right" style="width: 20%">Rp{{number_format($total,0,',','.')}},-</div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="empty_transaction d-flex justify-content-center align-items-center flex-column" style="height: 70vh">
                <img src="./storage/images/illustrations/empty_transaction.svg" alt="" height="60%">
                <div class="my-3" style="font-size: large">No Data Available</div>
                <div class="my-3"><a href="/mousse" class="btn btn-pink">Browse MousseBite</a></div>
            </div>
        @endif
        </div>
    </div>
@endsection()
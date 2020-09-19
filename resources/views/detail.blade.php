@extends('default.index')

@section('style')
    <style>
        .detail {
            width: 100%;
            height: 90vh;
        }

        .image {
            width: 30vw;
            height: 20vw;
            background-image: url("/storage/images/mousse/{{$mousse->image}}");
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
        }

        .description {
            width: 30vw;
            height: 15vw;
            background-color: #fff6d9;
        }

        .price {
            padding: 4%;
            background-color: rgba(255,255,255,0.8);
            font-size: large;
            font-weight: bold;
        }

        .inner {
            width: 30vw;
        }

        .selected {
            background-color: #f8b0ba;
        }

        .size-button {
            box-shadow: none !important;
        }

        .error-message {
            margin-top: 10px;
            color: #ff3939;
        }
    </style>
@endsection()

@section('content')
    <div class="detail d-flex">
        <div class="mousse w-50">
            <div class="image mx-auto mt-5">
                <label for="" class="price">Rp.{{$mousse->price}},-</label>
            </div>
            <div class="description mx-auto p-3">
                <div class="name text-center">
                    <h4>{{$mousse->name}}</h4>
                </div>
                <div class="desc text-justify mb-3">{{$mousse->description}}</div>
                <div class="stock">Stock Available : {{$mousse->stock}}</div>
                <div class="size">Size Available : {{
                    $mousse->size_id == 1 ?
                        'Regular only'
                    : $mousse->size_id == 2 ?
                        'Large only'
                    : 'Regular or Large'
                }}</div>
            </div>
        </div>
        <div class="form w-50 mt-5 my-auto">
            <div class="inner bg-transparent">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    <input type="hidden" name="mousse_id" value="{{$mousse->id}}">
                    <div class="sizes">
                        <div class="my-2" style="font-size: large">Pick size</div>
                        @if($mousse->size_id == 3)
                            <input type="hidden" name="size_id" id="size">
                            <button type="button" class="btn size-button" id="regular" onclick="selectSize('regular')">Regular</button>
                            <button type="button" class="btn size-button" id="large" onclick="selectSize('large')">Large</button>
                        @elseif($mousse->size_id == 1)
                            <input type="hidden" name="size_id" value="1">
                            <button type="button" class="btn size-button selected" id="regular">Regular</button>
                            <button type="button" class="btn size-button" disabled id="large">Large</button>
                        @else
                            <input type="hidden" name="size_id" value="2">
                            <button type="button" class="btn size-button" disabled id="regular">Regular</button>
                            <button type="button" class="btn size-button selected" id="large">Large</button>
                        @endif()
                        <div><label for="" class="error-message">{{$errors->first('size_id')}}</label></div>
                    </div>
                    <script>
                        function selectSize(size) {
                            let buttons = document.getElementsByClassName('size-button');
                            for (let i = 0; i < buttons.length; i++) {
                                let button = buttons.item(i);
                                button.className = "btn size-button"
                            }

                            let b = document.getElementById(size);
                            b.className = "btn size-button selected"

                            let s = document.getElementById('size');
                            s.value = size == 'regular' ? '1' : '2';
                        }
                    </script>
                    <div class="quantity">
                        <div class="mb-2 mt-4" style="font-size: large">Quantity</div>
                        <input type="number" name="quantity" class="form-control w-50">
                        <div><label for="" class="error-message">{{$errors->first('quantity')}}</label></div>
                    </div>
                    <div class="button mt-4">
                        <button type="submit" class="btn w-50">Add to cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
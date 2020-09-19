@extends('default.index')

@section('style')
    <style>
        .promoted {
            box-sizing: border-box;
            height: 70vh;
            background-color: floralwhite;
        }

        .promoted .image {
            width: 30vw;
            height: 20vw;
            top: 35%;
            left: 30%;
            transform: translate(-30%, -35%);
            background-image: url("./storage/images/mousse/Layered Fruit Mousse.jpg");
            background-size: cover;
            background-position: center;
            border: 1px solid floralwhite;
        }

        .promoted-desc {
            top: 60%;
            left: 65%;
            transform: translate(-65%, -60%);
        }

        .fade-horizontal, .fade-vertical {
            top: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

        .fade-vertical {
            background-image: linear-gradient(to bottom, floralwhite 0%, transparent 10%, transparent 90%, floralwhite 100%);
        }

        .fade-horizontal {
            background-image: linear-gradient(to right, floralwhite 0%, transparent 10%, transparent 90%, floralwhite 100%);
        }

        .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .mousse {
            flex: 0 1 250px;
            margin: 1rem;
            background-color: #fafafa;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .mousse:hover {
            background-color: #ffc7a9
        }

        .mousse .image {
            width: 100%;
            height: 150px;
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection()

@section('content')
    <div class="promoted w-100 position-relative">
        <div class="image position-absolute">
            <div class="fade-horizontal position-absolute"></div>
            <div class="fade-vertical position-absolute"></div>
        </div>
        <div class="promoted-desc position-absolute">
            <h1 class="d-flex">Layered Fruit Mousse</h1>
        </div>
    </div>
    <div class="products p-5">
        @foreach($mousses as $mousse)
            <div class="mousse p-1">
                <a href="/mousse/detail/{{$mousse->id}}" style="color: #636363; text-decoration: none">
                    <div class="image" style="background-image: url('./storage/images/mousse/{{$mousse->image}}')"></div>
                    <div class="name text-center my-2">{{$mousse->name}}</div>
                    <div class="price text-center mb-2">Rp.{{$mousse->price}},-</div>
                </a>
            </div>
        @endforeach
    </div>
@endsection()
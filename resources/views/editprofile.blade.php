@extends('default.index')

@section('style')
    <style>
        .card {
            background-color: #abdde5;
        }

        .card-body {
            font-size: large;
        }

        .text-small {
            font-size: small;
        }
    </style>
@endsection()

@section('content')
    <div class="card w-50 mx-auto p-4 my-5">
        <div class="card-title text-center">
            <h3>Your Profile</h3>
        </div>
        <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="text-small">Name</div>
                <div class="mb-3">
                    <input required type="text" name="name" class="form-control" value="{{$user->name}}" id="">
                </div>
                <div class="text-small">Email</div>
                <div class="mb-3">
                    <input required type="email" name="email" class="form-control" value="{{$user->email}}" id="">
                </div>
                <div class="text-small">Phone</div>
                <div class="mb-3">
                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}" id="">
                </div>
                <div class="text-small">Address</div>
                <div class="mb-3">
                    <textarea name="address" class="form-control" id="">{{$user->address}}</textarea>
                </div>
                <div class="mt-5 d-flex justify-content-end">
                    <a href="/profile" class="btn btn-light w-25 mx-3">Cancel</a>
                    <button type="submit" class="btn btn-secondary w-25">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection()
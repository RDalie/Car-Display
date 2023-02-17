@extends('layouts.app')

@section('content')

<div class="container min-vh-100 d-flex justify-content-center align-items-center">

    <form action="{{route('cars.store');}}" method="POST">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif   
    <div class="mb-3 ">
        <label for="carName" class="form-label">Car Name</label>
        <input name="carName" type="text" class="form-control" id="carName" >

    </div>
    <div class="mb-3 ">
        <label for="carPrice" class="form-label">Price</label>
        <input name="carPrice" type="number" class="form-control" id="carPrice" >
    </div>
    <div class="mb-3 ">
        <label for="carDescription" class="form-label">Description</label>
        <textarea name="carDescription" class="form-control" id="carDescription" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    </form>

</div>



@endsection
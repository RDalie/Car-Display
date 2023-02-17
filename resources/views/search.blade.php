@extends('layouts.app')

@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form action="{{route('searchbyname');}}" method="POST">
        @csrf
    <div class="mb-3 ">
        <label for="search" class="form-label">Car Name</label>
        <input name="search" type="text" class="form-control" id="carName" >

    </div>

    <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
@endsection
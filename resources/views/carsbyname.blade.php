@extends('layouts.app')

@section('content')

<div class="container">

<div class="row my-5">
    <div class="col-md-3">
        <b> ID </b>
    </div>
    <div class="col-md-3">
        <b> Name </b>
    </div>
    <div class="col-md-3">
    <b> Price </b>
    </div>
    <div class="col-md-3">
    <b> Descirption </b>
    </div>        
</div>

    @foreach ($cars as $car)
        <div class="row my-5">
            <div class="col-md-3">
                {{$car->id}}
            </div>
            <div class="col-md-3">
                {{$car->carName}}
            </div>
            <div class="col-md-3">
                ${{$car->price}}
            </div> 
            <div class="col-md-3">
                {{$car->description}}
            </div>                       
        </div>
    @endforeach

</div>
<div class="d-flex justify-content-center">
    <span>{{$cars->appends(request()->input())->links();}}</span>
</div>
@endsection
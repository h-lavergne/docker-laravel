@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">EDITADO THE WEEDO</li>
        </ol>
    </nav>
    <form class="justify-content-center card p-5" method="POST" action="{{ route('weed.update', $spaceWeed->id) }}">
    @csrf
    <div class="row">
        <div class="col-md">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control shadow" value="{{$spaceWeed->name}}">
        </div>   
        <div class="col-md">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control shadow" value="{{$spaceWeed->description}}">
        </div>    
    </div>

    <div class="row mt-4">
        <div class="col-md">
            <label for="price">Prix</label>
            <input type="number" name="price" class="form-control shadow" value="{{$spaceWeed->price}}">
        </div>  
        <div class="col-md">
            <label for="quantity">Quantité</label>
            <input type="number" name="quantity" class="form-control shadow" value="{{$spaceWeed->quantity}}">
        </div> 
    </div>

    <button type="submit" class="btn btn-success w-100 mt-5">ENVOYADO</button>
        
    </div>
</div>
@endsection

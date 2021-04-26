@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="{{ route('weed.create') }}" class="btn btn-primary mx-auto d-block w-50 mb-4">ADDITADO UNO WEEDO +</a>
    <div class="row justify-content-center">
        <div class="col-md">            
            <div class="row no-gutters d-flex align-items-center justify-content-center">
                @foreach ($spaceWeeds as $weed)
                <div class="card col-3 m-2 p-0">
                    <img class="card-img-top" src="https://picsum.photos/500/350?sig={{ $weed->id }}" alt="Card image cap">
                    <div class="card-body"> 
                        <h5 class="card-title">{{ $weed->name }} Weed</h5>
                        <p class="card-text" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $weed->description }}">{{ \Illuminate\Support\Str::limit($weed->description, 30, $end='...')  }}</p>
                        <span>{{ $weed->price }} $ pour ({{ $weed->quantity }} Giga Space Gramme)</span>
                        <div class="d-flex justify-content-around mt-5">
                            <a href="{{ route('weed.edit', $weed->id) }}" class="btn btn-success">EDITADO</a>
                            <form action="{{ route('weed.delete', $weed->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">SUPPRIMADO</button>
                            </form>
                        </div>
                    
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
@endsection

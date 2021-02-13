@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    

    <div class="card h-50 w-25" >
        <img class="card-img-top" src="{{ asset('default_user.png') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{Auth::user()->name}}</h5>
            <p class="card-text"><b> Email: </b> {{Auth::user()->email}}</p>
            <p class="card-text"><b> Creado: </b> {{Auth::user()->created_at}}</p>
            <p class="card-text"><b> Actualizado por ultima vez: </b> {{Auth::user()->updated_at}}</p>
        </div>
    </div>
</div>
@endsection
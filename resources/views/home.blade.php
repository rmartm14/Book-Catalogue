@extends('layouts.app')

@section('content')
<div class="container" style="background-color:#EFE2BA">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white" style="background-color:#4056a1">{{ __('Welcome to Book Catalogue') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is the home window of the page. You can now pick one of the options on these two buttons, or you can click on it in the Top Bar') }}

                    <a class=" nav-link btn btn-outline-success ml-2 mt-2" href="./catalogue" role="button">Catalogue</a>
                    <a class=" nav-link btn btn-outline-primary ml-2 mt-2" href="./users" role="button">User List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

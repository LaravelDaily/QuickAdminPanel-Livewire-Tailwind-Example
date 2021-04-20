@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="card bg-blueGray-100 w-full">
        <div class="card-header">
            <div class="card-row">
                <h6 class="card-title">
                    Dashboard
                </h6>
            </div>
        </div>

        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <p class="pt-3">You are logged in!</p>
        </div>
    </div>
</div>

@endsection
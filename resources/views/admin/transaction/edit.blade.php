@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.transaction.title_singular') }}:
                {{ trans('cruds.transaction.fields.id') }}
                {{ $transaction->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('transaction.edit', [$transaction])
    </div>
</div>
@endsection
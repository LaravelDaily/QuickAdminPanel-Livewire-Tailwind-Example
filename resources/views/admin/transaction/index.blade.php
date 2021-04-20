@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.transaction.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('transaction_create')
                <a class="btn btn-indigo" href="{{ route('admin.transactions.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.transaction.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('transaction.index')

</div>
@endsection
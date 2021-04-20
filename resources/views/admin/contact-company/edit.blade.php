@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.contactCompany.title_singular') }}:
                {{ trans('cruds.contactCompany.fields.id') }}
                {{ $contactCompany->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('contact-company.edit', [$contactCompany])
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.contactContact.title_singular') }}:
                {{ trans('cruds.contactContact.fields.id') }}
                {{ $contactContact->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('contact-contact.edit', [$contactContact])
    </div>
</div>
@endsection
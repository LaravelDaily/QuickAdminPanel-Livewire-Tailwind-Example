@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.contactContact.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('contact_contact_create')
                <a class="btn btn-indigo" href="{{ route('admin.contact-contacts.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.contactContact.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('contact-contact.index')

</div>
@endsection
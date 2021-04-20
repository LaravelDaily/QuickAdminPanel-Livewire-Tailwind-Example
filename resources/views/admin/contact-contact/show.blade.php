@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.contactContact.title_singular') }}:
                {{ trans('cruds.contactContact.fields.id') }}
                {{ $contactContact->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.id') }}
                        </th>
                        <td>
                            {{ $contactContact->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.company') }}
                        </th>
                        <td>
                            @if($contactContact->company)
                                <span class="badge badge-relationship">{{ $contactContact->company->company_name ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_first_name') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_last_name') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_phone_1') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_phone_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_phone_2') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_phone_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_email') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_skype') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_skype }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_address') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_address }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.contact-contacts.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection
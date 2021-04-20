@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.transaction.title_singular') }}:
                {{ trans('cruds.transaction.fields.id') }}
                {{ $transaction->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.id') }}
                        </th>
                        <td>
                            {{ $transaction->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.amount') }}
                        </th>
                        <td>
                            {{ $transaction->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.transaction_date') }}
                        </th>
                        <td>
                            {{ $transaction->transaction_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.transactions.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')

<div class="row sm:flex">
    <div class="card w-1/2 mr-4">
        <div class="card-header">
            <div class="card-row">
                <h6 class="card-title">
                    {{ trans('global.my_profile') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("profile.password.update-profile") }}">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.user.fields.email') }}</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="card w-1/2">
        <div class="card-header">
            <div class="card-row">
                <h6 class="card-title">
                    {{ trans('global.change_password') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("profile.password.update") }}">
                @csrf
                <div class="form-group">
                    <label class="required" for="title">New {{ trans('cruds.user.fields.password') }}</label>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="required" for="title">Repeat New {{ trans('cruds.user.fields.password') }}</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="card w-1/2 mr-4">
        <div class="card-header">
            <div class="card-row">
                <h6 class="card-title">
                    {{ trans('global.delete_account') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("profile.password.destroy-profile") }}" onsubmit="return prompt('{{ __('global.delete_account_warning') }}') == '{{ auth()->user()->email }}'">
                @csrf
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.delete') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
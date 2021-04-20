@extends('layouts.app')
@section('content')

<section class="relative w-full h-full py-40 min-h-screen">
    <div class="absolute top-0 w-full h-full bg-gray-900 bg-full bg-no-repeat" {{-- style="background-image: url('{{ asset('img/register_bg_2.png') }}');"--}}
        ></div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-6">
                            <div class="text-gray-500 text-center mb-3 font-bold">
                                {{ trans('global.login') }}
                            </div>

@if(session('message'))
                                <div class="shadow bg-green-100 my-4 rounded p-2" role="alert">
                                    {{ session('message') }}
                                </div>
@endif

                            <form method="POST" action="{{ route('login') }}">
@csrf

                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                           for="email">
                                        {{ trans('global.login_email') }}
                                    </label>
                                    <input id="email"
                                           name="email"
                                           type="text"
                                           class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150{{ $errors->has('email') ? ' border border-red-500' : '' }}"
                                           required
                                           autocomplete="email"
                                           autofocus
                                           placeholder="{{ trans('global.login_email') }}"
                                           value="{{ old('email', null) }}">

@if($errors->has('email'))
                                        <div class="text-red-500">
                                            {{ $errors->first('email') }}
                                        </div>
@endif
                                </div>

                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                           for="grid-password">
                                        {{ trans('global.login_password') }}
                                    </label>
                                    <input id="password"
                                           name="password"
                                           type="password"
                                           class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150{{ $errors->has('password') ? ' border border-red-500' : '' }}"
                                           required
                                           placeholder="{{ trans('global.login_password') }}">

@if($errors->has('password'))
                                        <div class="text-red-500">
                                            {{ $errors->first('password') }}
                                        </div>
@endif
                                </div>

                                <div>
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input
                                                name="remember"
                                                type="checkbox"
                                                id="remember"
                                                class="form-checkbox text-gray-800 ml-1 w-5 h-5 ease-linear transition-all duration-150"/>
                                        <span class="ml-2 text-sm font-semibold text-gray-700">{{ trans('global.remember_me') }}</span>
                                    </label>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                            type="submit">
                                        {{ trans('global.login') }}
                                    </button>
                                </div>
                                <div class="mt-6">
                                    <div class="flex flex-wrap mt-6">
@if(Route::has('password.request'))
                                            <div class="w-1/2">
                                                <a href="{{ route('password.request') }}" class="">
                                                    <small>Forgot password?</small>
                                                </a>
                                            </div>
@endif
@if(Route::has('register'))
                                            <div class="w-1/2 text-right">
                                                <a href="{{ route('register') }}" class="">
                                                    <small>
                                                        Create new account
                                                    </small>
                                                </a>
                                            </div>
@endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
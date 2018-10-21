@extends('layouts.app')
@section('title')@parent :: {{ __('Profile') }} @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('Your profile')</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @lang("You are logged in!")

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('title')@parent :: @lang('Add platform')@endsection
@section('content')
    <form action="{{ url('platform') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">@lang('Platform name')</label>
            <input id="name" type="text" class="form-control" name="name">
        </div>
        <button class="btn btn-primary">@lang('Save')</button>
    </form>
@endsection
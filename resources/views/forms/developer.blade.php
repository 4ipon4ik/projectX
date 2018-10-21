@extends('layouts.app')
@section('title')@parent :: @lang('Add developer')@endsection
@section('content')
    <form action="{{ url('developer') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">@lang('Developer')</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <button class="btn btn-primary">@lang('Save')</button>
    </form>
@endsection
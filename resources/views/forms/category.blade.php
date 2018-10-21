@extends('layouts.app')
@section('title')@parent :: @lang('Create category')@endsection
@section('content')
    <form action='{{ url('/addcategory') }}' method='post'>
        @csrf
        <div class="form-group">
            <label for="name">@lang('Category name')</label>
            <input id="name" class='form-control' type='text' name='name'>
        </div>
        <button class='btn btn-primary' type='submit'>@lang('Save')</button>
    </form>
@endsection
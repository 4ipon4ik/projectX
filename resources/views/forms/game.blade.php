@extends('layouts.app')
@section('title')@parent :: @lang('Add game')@endsection
@section('content')
    <form action='{{ url('/creategame') }}' method='post'>
        @csrf
        <div class="form-group">
            <label for="name">@lang('Game name')</label>
            <input id="name" class='form-control' type='text' name='name' required>
        </div>
        <div class="form-group">
            <div class="custom-file">
                <label for="cov" class="custom-file-label">@lang('Cover')</label>
                <input id="cov" class="custom-file-input" type="file" name="cover" required>
            </div>
        </div>
        <div class="form-group">
            <label for="desc">@lang('Description')</label>
            <textarea id="desc" class='form-control' name='description' required></textarea>
        </div>
        <div class="form-group">
            <label for="date">@lang('Release date')</label>
            <input id="date" class='form-control' type='date' name='releasedate' required>
        </div>
        <div class="form-group">
            <label for="steam">@lang('Steam link')</label>
            <input id="steam" class='form-control' type='url' name='steamlink'>
        </div>
        <div class="form-group">
            <label for="dev">@lang('Developer')</label>
            <select id="dev" class="custom-select" name="developer" required>
                <option selected>@lang('choose developer')</option>
                @foreach($developers as $developer)
                    <option value={{ $developer->id }}>{{ $developer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cat">@lang('Category')</label>
            <div id="cat" class="row">
                @foreach($categories as $category)
                    <div class="custom-control custom-checkbox mb-2 col-md-3">
                        <input id='{{ $loop->index.'c' }}' class='custom-control-input' type='checkbox' name='category[]' value='{{ $category->id }}'>
                        <label for='{{ $loop->index.'c' }}' class="custom-control-label">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="plat">@lang('Platform')</label>
            <div id="plat" class="row">
                @foreach($platforms as $platform)
                    <div class="custom-control custom-checkbox mb-2 col-md-3">
                        <input id='{{ $loop->index.'p' }}' class='custom-control-input' type='checkbox' name='platform[]' value='{{ $platform->id }}'>
                        <label for='{{ $loop->index.'p' }}' class="custom-control-label">{{ $platform->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <button class='btn btn-primary' type='submit'>@lang('Save')</button>
    </form>
@endsection
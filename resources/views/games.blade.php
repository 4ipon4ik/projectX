@extends('layouts.app')
@section('title')@parent :: @lang('Games')@endsection
@section('content')
    <div class="row">
        @role('admin')

        @endrole
        <div class="col-md-4">
            <a href="{{ url('creategame') }}" class="btn btn-primary">@lang('Add game')</a>
        </div>
        <div class="col-md-4">
            <a href="{{ url('addcategory') }}" class="btn btn-primary">@lang('Add category')</a>
            <a href="{{ url('adddeveloper') }}" class="btn btn-primary">@lang('Add developer')</a>
            <a href="{{ url('addplatform') }}" class="btn btn-primary">@lang('Add platform')</a>
        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div class="card-columns py-4">
        @foreach ($games as $game)
        <div class="card bg-success" style="background-color: {{ ['red','green','blue'][mt_rand(0,2)] }}!important;">
            <div class="card-body text-center">
                <img src="{{ asset('img/'.$game->cover) }}" alt="" width="100">
                    <p class="card-text"><span class="font-weight-bold">@lang('Name'):</span> {{ $game->name }}<p>
                    <p class="card-text"><span class="font-weight-bold">@lang('Release date'):</span> {{ $game->releasedate }}<p>
                    <p class="card-text"><span class="font-weight-bold">@lang('Platform'):</span>
                        @foreach($game->platform as $platform)
                            {{ $platform->name }}@if($loop->iteration != $loop->last), @else.@endif
                        @endforeach<p>
                    <p class="card-text"><span class="font-weight-bold">@lang('Category'):</span>
                        @foreach($game->category as $category)
                            {{ $category->name }}@if($loop->iteration != $loop->last), @else.@endif
                        @endforeach<p>
                    <p class="card-text"><a href="{{ $game->steamlink }}" target="_blank" class="font-weight-bold">Steam link</a></p>
                    <form action="{{ url('games') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" value="{{ $game->id }}" name="id">@lang('Delete')</button>
                    </form>
            </div>
        </div>
        @endforeach
    </div>

@endsection
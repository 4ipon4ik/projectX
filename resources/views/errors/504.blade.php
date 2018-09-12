@extends('layout')
@section('title','504')
@section('content')
    <h1>{{ $exception->getMessage().$exception->retryAfter }}</h1>
@endsection
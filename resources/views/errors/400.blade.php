@extends('layout')
@section('title','400')
@section('content')
    <h1>{{ $exception->getMessage().$exception->retryAfter }}</h1>
@endsection
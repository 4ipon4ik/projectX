@extends('layout')
@section('title','502')
@section('content')
    <h1>{{ $exception->getMessage().$exception->retryAfter }}</h1>
@endsection
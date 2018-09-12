@extends('errors.layout')
@section('title','503')
@section('content')
    <h1>{{ $exception->getMessage() }}</h1>
    <h2>{{ $exception->retryAfter }}</h2>
@endsection
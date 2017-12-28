@extends('layouts.app')


@section('content')
<h1>Mensaje id: {{ $message->id }} </h1>
<p>{{ $message->content }}</p>
<img src="{{ $message->image }}" alt="">
@endsection
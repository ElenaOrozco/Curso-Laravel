@extends('layouts.app')

@section('content')
	<h1 class="mt-3">{{ $user->name }}</h1>
	<div class="row">
		@foreach($user->messages as $message)
			<div class="col-md-6">
				@include('messages.message')
			</div>
	 	
		@endforeach
	</div>
	
@endsection
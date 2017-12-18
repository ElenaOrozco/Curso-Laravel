@extends('layouts.app')

@section('content')
<!--
<div class="title m-b-md">
                    Laravel
</div>
@if(isset($teacher))
<p>Profesor: {{ $teacher }}</p>
@else
<p>Profesor a Definir</p>
@endif
<div class="links">
    
    @foreach ($links as $link =>$text)
    <a href="{{ $link  }}">{{ $text }}</a>
    @endforeach
</div>
-->
<div class="jumbotron text-center">
	<h1>Laratter</h1>
	<nav class="">
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link" href="/">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/acerca">Acerca</a>
			</li>
		</ul>
	</nav>
	
</div>
@stop
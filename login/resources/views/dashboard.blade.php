@extends('layouts.app')
@section('content')

<div class="col-md-4 col.md.offser-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Bienvenido: {{ auth()->user()->name }}</h1>			
		</div>
		<div class="panel-body">
			<form method="POST" action=" {{ route('logout')}} ">
				{{ csrf_field() }}
				<button class="btn btn-danger">Logout</button>
			</form>		
		</div>

				<div class="panel-body">
			<form method="POST" action=" {{ route('other')}} ">
				{{ csrf_field() }}
				<button class="btn btn-danger">Otra prueba</button>
			</form>		
		</div>
	</div>
</div>

@endsection
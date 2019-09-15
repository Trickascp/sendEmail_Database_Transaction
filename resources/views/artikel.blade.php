@extends('layouts.app')

@section('content')


<div class="jumbotron jumbotron-fluid p-0 m-0" style="background-color: red; min-height: 450px; background: url('{{ asset('img/compe1.jpg')  }}'); background-size: 100% 500px;">

</div>



<div class="container-fluid p-0">
	<div class="row">
		<div class="col-md-8">
			<div class="container">
				<h3 class="mt-4">News Article </h3>
				@foreach($uwu as $d)
				<div class="card">
					<div class="card-body">
						<h4>{{ $d->judul }}</h4>
						<p>{{ $d->desc }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-4">
			<div class="container">
				<h3 class="mt-4">Kategori</h3>	
				<div class="card">
					<div class="card-body">
						<ul>
						@foreach($kate as $e)
						<li><a href="{{ route('kate.tbh', $e->id) }}">{{ $e->nama }}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


@endsection
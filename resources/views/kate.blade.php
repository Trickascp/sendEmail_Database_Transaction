@extends('layouts.app')

@section('content')


<div class="jumbotron jumbotron-fluid p-0 m-0" style="background-color: red; min-height: 450px; background: url('{{ asset('img/compe1.jpg')  }}'); background-size: 100% 500px;">

</div>

<div class="container-fluid p-0">
	<div class="row">
		<div class="col-md-8">
			<div class="container">
				@foreach($tit as $q)
				<h3 class="mt-4">{{ $q->nama }}</h3>
				@endforeach
				@foreach($kate as $d)
				<div class="card">
					<div class="card-body">
						<h4>{{ $d->judul }}</h4>
						<p>{{ $d->desc }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>	
	</div>
</div>


@endsection
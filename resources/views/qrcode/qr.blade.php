@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			@foreach($kate as $d)
			<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate(url('post/'.$d->id))) !!}">
			@endforeach
			<p>QrCode Generated</p>
		</div>
	</div>
</div>

@endsection

{{-- Error messages --}}
@if (count($errors) > 0)
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach
@endif


{{-- Session success message --}}
@if (session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif


{{-- Session failed message --}}
@if (session('error'))
	<div class="alert alert-danger">
		{{session('error')}}
	</div>
@endif

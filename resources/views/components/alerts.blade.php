@if ($errors->any())
<div class="alert alert-danger">
	<div class="font-weight-bold mb-1">Please fix the following:</div>
	<ul class="mb-0 pl-3">
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif



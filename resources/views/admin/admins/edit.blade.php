@extends('layouts.admin')

@section('title', 'Edit Admin')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 text-white">Edit Admin</h1>
</div>

<div class="card shadow">
	<div class="card-body">
		<form action="{{ route('admin.admins.update', $user) }}" method="POST">
			@csrf
			@method('PUT')
			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Name</label>
					<input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
				</div>
				<div class="form-group col-md-4">
					<label>Email</label>
					<input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
				</div>
				<div class="form-group col-md-4">
					<label>New Password (optional)</label>
					<input type="password" name="password" class="form-control" placeholder="Leave blank to keep">
				</div>
			</div>
			<div class="text-right">
				<a href="{{ route('admin.admins.index') }}" class="btn btn-secondary mr-2">Cancel</a>
				<button class="btn btn-primary">Save Changes</button>
			</div>
		</form>
	</div>
</div>
@endsection



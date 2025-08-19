@extends('layouts.admin')

@section('title', 'Edit Testimonial')

@section('content')
<h1 class="h4 text-gray-800 mb-4">Edit Testimonial</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $testimonial->name) }}" required>
                    <x-input-error :messages="$errors->get('name')" />
                </div>
                <div class="form-group col-md-4">
                    <label>Company</label>
                    <input type="text" name="company" class="form-control" value="{{ old('company', $testimonial->company) }}" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control" value="{{ old('position', $testimonial->position) }}" required>
                </div>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description', $testimonial->description) }}</textarea>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
 </div>
@endsection


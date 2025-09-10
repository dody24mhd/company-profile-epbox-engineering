@extends('layouts.admin')

@section('title', 'Create Project')

@section('content')
<h1 class="h4 text-white mb-4">Create Project</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                <x-input-error :messages="$errors->get('title')" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                <x-input-error :messages="$errors->get('description')" />
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Categories</label>
                    <select name="categories" class="form-control">
                        @php($cats = config('categories.list'))
                        <option value="">-- Select Category --</option>
                        @foreach($cats as $c)
                            <option value="{{ $c }}" {{ old('categories') === $c ? 'selected' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Image</label>
                    <input type="file" name="img" class="form-control-file" accept="image/*">
                    <x-input-error :messages="$errors->get('img')" />
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
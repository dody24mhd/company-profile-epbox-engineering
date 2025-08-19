@extends('layouts.admin')

@section('title', 'Edit Project')

@section('content')
<h1 class="h4 text-gray-800 mb-4">Edit Project</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
                <x-input-error :messages="$errors->get('title')" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description', $project->description) }}</textarea>
                <x-input-error :messages="$errors->get('description')" />
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Categories</label>
                    <select name="categories" class="form-control">
                        @php($cats = config('categories.list'))
                        <option value="">-- Select Category --</option>
                        @foreach($cats as $c)
                            <option value="{{ $c }}" {{ old('categories', $project->categories) === $c ? 'selected' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Image</label>
                    <input type="file" name="img" class="form-control-file" accept="image/*">
                    @if($project->img)
                        <div class="mt-2"><img src="{{ asset(ltrim($project->img, '/')) }}" alt="preview" style="max-height:60px"></div>
                    @endif
                    <x-input-error :messages="$errors->get('img')" />
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
 </div>
@endsection


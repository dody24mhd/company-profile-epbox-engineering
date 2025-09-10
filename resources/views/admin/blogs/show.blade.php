@extends('layouts.admin')

@section('title', 'Preview Blog')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white">Preview: {{ $blog->title }}</h1>
    <div>
        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning"><i class="fas fa-edit mr-1"></i> Edit</a>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="mb-3 text-muted small">
            <span>Categories: {{ $blog->categories }}</span>
            @if($blog->date_publish)
            <span class="ml-3">Published: {{ $blog->date_publish->format('Y-m-d') }}</span>
            @endif
        </div>

        @if($blog->img)
        <div class="mb-3">
            <img src="{{ $blog->img }}" alt="{{ $blog->title }}" class="img-fluid rounded">
        </div>
        @endif

        <article class="ck-content">
            {!! $blog->description !!}
        </article>
    </div>
</div>
@endsection
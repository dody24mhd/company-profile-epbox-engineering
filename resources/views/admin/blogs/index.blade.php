@extends('layouts.admin')

@section('title', 'Blogs')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-gray-800">Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary" data-toggle="tooltip" title="Create new blog"><i class="fas fa-plus mr-1"></i> New Blog</a>
</div>

<div class="card shadow">
    <div class="card-body table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 90px;">Image</th>
                    <th>Title</th>
                    <th>Categories</th>
                    <th>Date Publish</th>
                    <th style="width: 210px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                <tr>
                    <td>
                        @if($blog->img)
                            @php
                                $path = ltrim(parse_url($blog->img, PHP_URL_PATH) ?? $blog->img, '/');
                                $thumb = str_replace('storage/blogs/', 'storage/blogs/thumbs/', $path);
                            @endphp
                            <img src="{{ asset($thumb) }}" alt="{{ $blog->title }}" style="height:60px" class="rounded border" onerror="this.onerror=null;this.src='{{ asset($path) }}';">
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->categories }}</td>
                    <td>{{ optional($blog->date_publish)->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.show', $blog) }}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Preview"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                        <form id="form-delete-blog-{{ $blog->id }}" action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm btn-danger btn-open-delete-modal" data-toggle="tooltip" title="Delete" data-form-id="form-delete-blog-{{ $blog->id }}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">No data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
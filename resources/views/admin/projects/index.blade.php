@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white">Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary" data-toggle="tooltip" title="Create new project"><i class="fas fa-plus mr-1"></i> New Project</a>
</div>

<div class="card shadow">
    <div class="card-body table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 90px;">Image</th>
                    <th>Title</th>
                    <th>Categories</th>
                    <th>Updated</th>
                    <th style="width: 160px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                <tr>
                    <td>
                        @if($project->img)
                        @php
                        $path = ltrim(parse_url($project->img, PHP_URL_PATH) ?? $project->img, '/');
                        $thumb = str_replace('storage/projects/', 'storage/projects/thumbs/', $path);
                        @endphp
                        <img src="{{ asset($thumb) }}" alt="{{ $project->title }}" style="height:60px" class="rounded border" onerror="this.onerror=null;this.src='{{ asset($path) }}';">
                        @else
                        <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->categories }}</td>
                    <td>{{ $project->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                        <form id="form-delete-project-{{ $project->id }}" action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm btn-danger btn-open-delete-modal" data-toggle="tooltip" title="Delete" data-form-id="form-delete-project-{{ $project->id }}">
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
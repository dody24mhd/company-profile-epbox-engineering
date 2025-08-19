@extends('layouts.admin')

@section('title', 'Testimonials')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-gray-800">Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary" data-toggle="tooltip" title="Create new testimonial"><i class="fas fa-plus mr-1"></i> New Testimonial</a>
    </div>

    <div class="card shadow">
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Position</th>
                        <th style="width: 160px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->company }}</td>
                            <td>{{ $testimonial->position }}</td>
                            <td>
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                <form id="form-delete-testimonial-{{ $testimonial->id }}" action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger btn-open-delete-modal" data-toggle="tooltip" title="Delete" data-form-id="form-delete-testimonial-{{ $testimonial->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection


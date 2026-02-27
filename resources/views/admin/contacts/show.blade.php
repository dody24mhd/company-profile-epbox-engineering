@extends('layouts.admin')

@section('title', 'Contact Detail')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white">Contact Detail</h1>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 text-muted">Name</div>
                <div class="col-md-9">{{ $contact->name }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 text-muted">Email</div>
                <div class="col-md-9"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
            </div>
            @if(!empty($contact->company))
            <div class="row mb-3">
                <div class="col-md-3 text-muted">Company</div>
                <div class="col-md-9">{{ $contact->company }}</div>
            </div>
            @endif
            @if(!empty($contact->phone))
            <div class="row mb-3">
                <div class="col-md-3 text-muted">Phone</div>
                <div class="col-md-9">{{ $contact->phone }}</div>
            </div>
            @endif
            <div class="row mb-3">
                <div class="col-md-3 text-muted">Received</div>
                <div class="col-md-9">{{ $contact->created_at->format('M d, Y H:i') }} ({{ $contact->created_at->diffForHumans() }})</div>
            </div>
            @if(!empty($contact->status))
            <div class="row mb-3">
                <div class="col-md-3 text-muted">Status</div>
                <div class="col-md-9">{{ ucfirst($contact->status) }}</div>
            </div>
            @endif
            @if(!empty($contact->responded_at))
            <div class="row mb-3">
                <div class="col-md-3 text-muted">Responded At</div>
                <div class="col-md-9">{{ optional($contact->responded_at)->format('M d, Y H:i') }}</div>
            </div>
            @endif
            <div class="row mb-2">
                <div class="col-md-3 text-muted">Message</div>
                <div class="col-md-9"><pre class="mb-0" style="white-space: pre-wrap">{{ $contact->message }}</pre></div>
            </div>
        </div>
    </div>
@endsection



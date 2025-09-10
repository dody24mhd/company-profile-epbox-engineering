@extends('layouts.admin')

@section('title', 'Audit Logs')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white">Audit Logs</h1>
</div>

<div class="card shadow">
    <div class="card-body">
        <form method="GET" class="form-inline mb-3">
            <input type="date" name="from" value="{{ request('from') }}" class="form-control form-control-sm mr-1">
            <input type="date" name="to" value="{{ request('to') }}" class="form-control form-control-sm mr-1">
            <input type="text" name="entity_type" value="{{ request('entity_type') }}" placeholder="Entity (Blog, Project, ...)" class="form-control form-control-sm mr-1">
            <select name="action" class="form-control form-control-sm mr-2">
                <option value="">Any action</option>
                <option value="created" {{ request('action')==='created'?'selected':'' }}>Created</option>
                <option value="updated" {{ request('action')==='updated'?'selected':'' }}>Updated</option>
                <option value="deleted" {{ request('action')==='deleted'?'selected':'' }}>Deleted</option>
            </select>
            <button class="btn btn-sm btn-primary mr-2">Filter</button>
            <a href="{{ route('admin.audits.export', request()->query()) }}" class="btn btn-sm btn-outline-primary">Export CSV</a>
        </form>
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>User</th>
                        <th>Action</th>
                        <th>Entity</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($audits as $a)
                    <tr>
                        <td>{{ $a->created_at->format('Y-m-d H:i') }}</td>
                        <td>{{ optional($a->user)->name ?? 'system' }}</td>
                        <td><span class="badge badge-{{ $a->action==='created'?'success':($a->action==='updated'?'info':'danger') }}">{{ $a->action }}</span></td>
                        <td>{{ $a->entity_type }} #{{ $a->entity_id }}</td>
                        <td class="text-truncate" style="max-width: 380px;">{{ $a->description }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No audit logs</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">{{ $audits->links() }}</div>
    </div>
    @endsection
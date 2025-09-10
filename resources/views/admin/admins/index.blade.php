@extends('layouts.admin')

@section('title', 'Manage Admins')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white">Admins</h1>
</div>
<!-- Edit Admin Modal -->
<div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editAdminForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="editAdminName" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="editAdminEmail" class="form-control" required>
          </div>
          <div class="form-group">
            <label>New Password (optional)</label>
            <input type="password" name="password" id="editAdminPassword" class="form-control" placeholder="Leave blank to keep">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

@push('scripts')
<script>
$(function(){
  $('#editAdminModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var modal = $(this);
    modal.find('#editAdminName').val(button.data('name'));
    modal.find('#editAdminEmail').val(button.data('email'));
    modal.find('#editAdminPassword').val('');
    modal.find('#editAdminForm').attr('action', button.data('action'));
  });
});
</script>
@endpush

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3"><strong>Add Admin</strong></div>
            <div class="card-body">
                <form action="{{ route('admin.admins.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                        <x-input-error :messages="$errors->get('name')" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <x-input-error :messages="$errors->get('email')" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <x-input-error :messages="$errors->get('password')" />
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary"><i class="fas fa-user-plus mr-1"></i> Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3"><strong>Existing Admins</strong></div>
            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th style="width:180px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <a href="{{ route('admin.admins.edit', $admin) }}" class="btn btn-sm btn-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="form-delete-admin-{{ $admin->id }}" action="{{ route('admin.admins.destroy', $admin) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger btn-open-delete-modal" data-toggle="tooltip" title="Delete" data-form-id="form-delete-admin-{{ $admin->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">No admins yet</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
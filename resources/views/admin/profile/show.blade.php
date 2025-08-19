@extends('layouts.admin')

@section('title', 'My Profile')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
    <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm">
        <i class="fas fa-user-edit mr-1"></i> Edit Profile
    </a>
</div>

<div class="row">
    <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile Photo</h6>
            </div>
            <div class="card-body text-center">
                @if (!empty($user->profile_photo))
                <img src="{{ asset('storage/'.$user->profile_photo) }}" alt="Profile Photo" class="img-fluid rounded-circle mb-3" style="width: 160px; height: 160px; object-fit: cover;">
                @else
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 160px; height: 160px;">
                    <i class="fas fa-user fa-4x text-muted"></i>
                </div>
                @endif
                <p class="text-muted mb-0">
                    @if (!empty($user->profile_photo))
                    Photo uploaded
                    @else
                    No photo uploaded
                    @endif
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Account</h6>
            </div>
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4">Name</dt>
                    <dd class="col-sm-8">{{ $user->name }}</dd>

                    <dt class="col-sm-4">Email</dt>
                    <dd class="col-sm-8">{{ $user->email }}</dd>

                    @isset($user->is_admin)
                    <dt class="col-sm-4">Role</dt>
                    <dd class="col-sm-8">{{ $user->is_admin ? 'Admin' : 'User' }}</dd>
                    @endisset
                </dl>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Security</h6>
            </div>
            <div class="card-body">
                <p class="mb-2 text-muted">Manage your account security.</p>
                <a href="{{ route('profile.edit') }}#password" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-key mr-1"></i> Update Password
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
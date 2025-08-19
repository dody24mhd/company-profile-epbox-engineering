@extends('layouts.admin')

@section('title', 'Edit Profile')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
    <a href="{{ route('profile.show') }}" class="btn btn-outline-secondary btn-sm">
        <i class="fas fa-user mr-1"></i> View Profile
    </a>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile Information</h6>
            </div>
            <div class="card-body">
                @include('admin.profile.partials.update-profile-information-form')
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Password</h6>
            </div>
            <div class="card-body">
                @include('admin.profile.partials.update-password-form')
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">Delete Account</h6>
            </div>
            <div class="card-body">
                @include('admin.profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
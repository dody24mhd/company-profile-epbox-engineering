<section>
    <p class="mb-3 text-muted">
        {{ __("Update your account's profile information and email address.") }}
    </p>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="profile_photo">{{ __('Profile Photo') }}</label>
            @if (!empty($user->profile_photo))
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$user->profile_photo) }}" alt="Profile Photo" class="img-thumbnail" style="max-width: 150px; height: auto;">
                </div>
            @endif
            <input id="profile_photo" name="profile_photo" type="file" class="form-control-file" accept="image/*">
            @if ($errors->has('profile_photo'))
                <small class="text-danger">{{ $errors->first('profile_photo') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @if ($errors->has('name'))
                <small class="text-danger">{{ $errors->first('name') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @if ($errors->has('email'))
                <small class="text-danger">{{ $errors->first('email') }}</small>
            @endif

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="alert alert-warning mt-2 mb-0" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="flex-fill">
                            <strong>{{ __('Your email address is unverified.') }}</strong>
                            <button form="send-verification" class="btn btn-link btn-sm p-0 align-baseline ml-1">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </div>
                    </div>
                    @if (session('status') === 'verification-link-sent')
                        <div class="mt-2 text-success small">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @if (session('status') === 'profile-updated')
                <span class="ml-3 text-success small">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>
</section>

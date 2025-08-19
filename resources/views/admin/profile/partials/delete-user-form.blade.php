<section>
    <p class="mb-3 text-muted">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
    </p>

    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmUserDeletionModal">
        {{ __('Delete Account') }}
    </button>

    <!-- Confirm Delete Modal (Bootstrap) -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Confirm Delete') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-3">{{ __('Are you sure you want to delete your account?') }}</p>
                        <div class="form-group">
                            <label for="delete_password">{{ __('Password') }}</label>
                            <input id="delete_password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                            @if ($errors->userDeletion->has('password'))
                                <small class="text-danger">{{ $errors->userDeletion->first('password') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@extends('user.layouts.master')

@section('user.layouts.index')
<style>
    .update-password-form {
        max-width: 500px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .update-password-form header {
        text-align: center;
        margin-bottom: 1.5rem;
    }
    .update-password-form h2 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: #333;
    }
    .update-password-form p {
        font-size: 0.875rem;
        color: #666;
    }
    .update-password-form .form-group {
        margin-bottom: 1rem;
    }
    .update-password-form label {
        display: block;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }
    .update-password-form input[type="password"] {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 0.25rem;
        font-size: 1rem;
        color: #333;
    }
    .update-password-form input[type="password"]:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .update-password-form .form-error {
        font-size: 0.875rem;
        color: #e3342f;
        margin-top: 0.25rem;
    }
    .update-password-form .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1.5rem;
    }
    .update-password-form button {
        background-color: #007bff;
        color: #fff;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 0.25rem;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .update-password-form button:hover {
        background-color: #0056b3;
    }
    .update-password-form .status-message {
        font-size: 0.875rem;
        color: #28a745;
        transition: opacity 0.3s ease;
    }
</style>

<section class="update-password-form">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update password anda secara berkala.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="password" :value="('New Password')">New Password</label>
            <input id="password" name="password" type="password" autocomplete="new-password" class="mt-1 block w-full">
            @if ($errors->updatePassword->get('password'))
                <div class="form-error">{{ $errors->updatePassword->get('password')[0] }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="password_confirmation" :value="('Confirm Password')">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" class="mt-1 block w-full">
            @if ($errors->updatePassword->get('password_confirmation'))
                <div class="form-error">{{ $errors->updatePassword->get('password_confirmation')[0] }}</div>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="status-message"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
    <!-- Content Row -->
    <div class="row">
        <!-- ISI KONTEN -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
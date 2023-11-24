<x-auth-layout title="{{ config('app.name') }} - password recovery">
    <x-auth-header>Password Recovery</x-auth-header>

    <x-auth-form route="site.password.email">
        @csrf

        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>

        <x-text-input type="email" name="email" label="Email address" />

        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="{{ route('site.login') }}">Return to login?</a>
            <x-button-primary type="submit">Reset password</x-button-primary>
        </div>
    </x-auth-form>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{ route('site.register') }}">Need an account? Sign up!</a></div>
    </div>
</x-auth-layout>

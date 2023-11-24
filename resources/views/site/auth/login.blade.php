<x-auth-layout title="{{ config('app.name') }} - login">
    <x-auth-header>Login</x-auth-header>

    <x-auth-form route="site.login">
        @csrf

        <x-text-input type="email" name="email" label="Your Email" />
        <x-text-input type="password" name="password" label="Your Password" />
        <x-checkbox name="remember">Remember me</x-checkbox>

        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="{{ route('site.password.request') }}">Forgot Password?</a>
            <x-button-primary type="submit">Login</x-button-primary>
        </div>
    </x-auth-form>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{ route('site.register') }}">Need an account? Sign up!</a></div>
    </div>
</x-auth-layout>

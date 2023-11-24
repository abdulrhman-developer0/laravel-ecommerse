<x-auth-layout title="{{ config('app.name') }} - Sign up">
    <x-auth-header>Create Account</x-auth-header>

    <x-auth-form route="site.register">
        @csrf

        {{-- name details --}}
        <x-text-input type="text" name="first_name" label="First name" />
        <x-text-input type="text" name="middle_name" label="Middle name" />
        <x-text-input type="text" name="last_name" label="Last name" />

        {{-- contact information --}}
        <x-text-input type="email" name="email" label="Your Email" />
        <x-text-input type="tel" name="mobile" label="Your Mobile" />

        {{-- password confirmation --}}
        <x-text-input type="password" name="password" label="Password" />
        <x-text-input type="password" name="password_confirmation" label="Confirm Password" />

        {{-- remember user after register login --}}
        <x-checkbox name="accept_terms">Accept Terms</x-checkbox>
        <x-checkbox name="remember">Remember me</x-checkbox>

        <div class="d-grid">
            <x-button-primary type="submit" class="btn-block">Create account</x-button-primary>
        </div>
    </x-auth-form>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{ route('site.login') }}">Have an an account Go to !</a></div>
    </div>
</x-auth-layout>

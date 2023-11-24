<x-auth-layout title="Admin - login">
    <x-auth-header>Admin - Login</x-auth-header>

    <x-auth-form route="admin.login">
        @csrf

        <x-text-input type="email" name="email" label="Your Email" />
        <x-text-input type="password" name="password" label="Your Password" />
        <x-checkbox name="remember">Remember me</x-checkbox>

        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="password.html">Forgot Password?</a>
            <x-button-primary type="submit">Login</x-button-primary>
        </div>
    </x-auth-form>
</x-auth-layout>

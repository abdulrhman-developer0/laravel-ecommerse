<div class="card-body">
    <form method="{{ $method ?? 'POST' }}" action="{{ isset($route)? route($route): null }}">
        {{ $slot }}
    </form>
</div>

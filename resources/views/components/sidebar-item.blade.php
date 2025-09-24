@props(['name', 'route'])
<li class="nav-item mb-2">
    <a href="{{ route($route) }}"
       class="nav-link text-white {{ request()->routeIs($route) ? 'active bg-secondary' : '' }}">
        {{ $name }}
    </a>
</li>

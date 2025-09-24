<div class="bg-dark text-white vh-100 p-3" style="width:220px;">
    <h4 class="text-center mb-4">Dashboard</h4>
    <ul class="nav flex-column">
        <x-sidebar-item name="Home" route="dashboard" />
        <x-sidebar-item name="Profile" route="dashboard" />
        <x-sidebar-item name="Settings" route="dashboard" />
        <li class="nav-item mt-3">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger w-100">Logout</button>
            </form>
        </li>
    </ul>
</div>

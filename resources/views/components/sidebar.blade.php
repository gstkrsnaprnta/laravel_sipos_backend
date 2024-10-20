<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <strong>SIPOS</strong> <!-- Menambahkan <strong> untuk bold -->
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <strong>St</strong> <!-- Menambahkan <strong> untuk bold -->
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item">
                <a href="{{ url('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            {{-- <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Users</span></a>
            </li> --}}

            <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link"><i class="fas fa-box"></i><span>Product</span></a>
            </li>
        </ul>
    </aside>
</div>

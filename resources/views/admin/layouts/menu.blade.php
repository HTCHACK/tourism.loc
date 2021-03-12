<div class="sidebar" data-color="purple" data-background-color="white"
    data-image="{{ asset('assets/vendor/img/sidebar-1.jpg') }}">
    <div class="logo"><a href="" class="simple-text logo-normal">
            Administration
            
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'admin') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'categories') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Gategories</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'tours') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('tours.index') }}">
                    <i class="fa fa-plane"></i>
                    <p>Tours List</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'galleries') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('galleries.index') }}">
                    <i class="fa fa-picture-o"></i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'contacts') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('contacts.index') }}">
                    <i class="fa fa-envelope"></i>
                    <p>Contacts</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'orders') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('orders.index') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <p>Orders</p>
                </a>
            </li>
            <li class="nav-item"><a href="{{ route('force_to_logout') }}" class="nav-link"><i
                        class="fa fa-sign-out"></i>Logout</a></li>

        </ul>
    </div>
</div>

<aside class="admin-sidebar">
    <nav>
        <ul>
            <li class="sidebar-title">Admin</li>
            <li><a href="{{ route('admin.dashboard') }}"><img src="{{ asset('img/home.png') }}" alt="Admin" class="icon"> Tableau de bord</a></li>
            <li><a href="{{ route('admin.users') }}"><img src="{{ asset('img/users.png') }}" alt="Admin" class="icon"> Utilisateurs</a></li>
            <li><a href="{{ route('admin.products') }}"><img src="{{ asset('img/products.png') }}" alt="Admin" class="icon"> Produits</a></li>
            <li><a href="{{ route('admin.contact-messages') }}"><img src="{{ asset('img/message.png') }}" alt="Admin" class="icon"> Messages contact</a></li>
            <li><a href="{{ route('admin.orders') }}"><img src="{{ asset('img/orders.png') }}" alt="Admin" class="icon"> Orders</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-logout"><img src="{{ asset('img/logout.png') }}" alt="Admin" class="icon"> Déconnexion</button>
                </form>
            </li>
        </ul>
    </nav>
</aside> 
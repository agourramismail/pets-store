<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <div class="navbar-logo">
            <a href="/" title="Happy Pet - Accueil">
                <img src="{{ asset('img/logo.png') }}" alt="Happy Pet Logo" class="logo-image">
            </a>
        </div>

        <!-- Hamburger Menu -->
        <button class="mobile-menu-btn" id="mobileMenuBtn">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Nav Links -->
        <div class="nav-wrapper" id="navWrapper">
            <ul class="navbar-links">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">NOS PRODUITS <span class="arrow">&#9662;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('products.chat') }}">CHAT</a></li>
                        <li><a href="{{ route('products.chien') }}">CHIEN</a></li>
                        <li><a href="{{ route('products.oiseau') }}">OISEAU</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">NOS SERVICES <span class="arrow">&#9662;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('services.toilettage') }}">TOILETTAGE</a></li>
                        <li><a href="{{ route('services.hotellerie') }}">HÔTELLERIE</a></li>
                        <li><a href="{{ route('services.dressage') }}">DRESSAGE</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">CONTACTEZ NOUS</a></li>
                @auth
                    @if(auth()->user()->is_admin)
                        <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    @endif
                @endauth
                <li>
                    <a href="{{ route('cart.show') }}" class="cart-link" title="Voir le panier" style="position:relative;">
                        <img src="{{ asset('img/cart.png') }}" alt="Panier" class="cart-icon" style="height:1.5em;width:auto;vertical-align:middle;">
                        @php $cart = session('cart', []); $count = array_sum(array_column($cart, 'quantity')); @endphp
                        @if($count > 0)
                            <span class="cart-count" style="position:absolute;top:-8px;right:-8px;background:#e53e3e;color:#fff;border-radius:50%;padding:2px 7px;font-size:0.9em;">{{ $count }}</span>
                        @endif
                    </a>
                </li>
            </ul>
            <!-- Mobile Actions -->
            <div class="mobile-actions">
                <a href="#" class="mobile-action-btn">CONNEXION</a>
                <a href="#" class="mobile-action-btn">INSCRIPTION</a>
            </div>
        </div>

        <!-- Right Side -->
        <div class="navbar-actions">
            <div class="profile-dropdown">
                <button class="profile-btn">
                    <img src="{{ asset('img/profile.png') }}" alt="Profile" class="profile-img">
                </button>
                <ul class="dropdown-menu">
                    @guest
                        <li><a href="{{ route('login') }}">CONNEXION</a></li>
                        <li><a href="{{ route('register') }}">INSCRIPTION</a></li>
                    @else
                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                DÉCONNEXION
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navWrapper = document.getElementById('navWrapper');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    const profileBtn = document.querySelector('.profile-btn');

    // Toggle mobile menu
    mobileMenuBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        navWrapper.classList.toggle('active');
    });

    // Handle dropdowns on mobile
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const dropdown = this.closest('.dropdown');
                dropdown.classList.toggle('active');
            }
        });
    });

    // Handle profile dropdown
    if (profileBtn) {
        profileBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = this.closest('.profile-dropdown');
            dropdown.classList.toggle('active');

            // Close dropdown when clicking outside
            document.addEventListener('click', function closeDropdown(e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('active');
                    document.removeEventListener('click', closeDropdown);
                }
            });
        });
    }
});
</script> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits pour Chats - Happy Pet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>
<body>
    @include('components.navbar')
    <div class="category-hero-bg">
        <div class="category-hero-card">
            <div class="hero-text">
                <div class="hero-title">NOURRITURE & ACCESSOIRES POUR CHATS</div>
                <div class="hero-desc">
                    Offrez à votre chat le meilleur : croquettes, pâtées, friandises et accessoires pour son confort et sa santé au quotidien.<br><br>
                    Nos produits sont sélectionnés pour répondre aux besoins de chaque chat, du plus joueur au plus câlin.
                    <br><br>
                    <span class="hero-bold">Des nouveautés chaque semaine !</span>
                </div>
            </div>
            <div class="hero-image-container">
                <img src="{{ asset('img/catp.webp') }}" alt="Chat" class="hero-image">
            </div>
        </div>
    </div>
    <section class="shop-section">
        <div class="shop-container">
            <h2>Produits pour Chats</h2>
            <p class="shop-desc">Découvrez notre sélection de produits de qualité pour le bien-être et le bonheur de votre chat.</p>
            <div class="shop-cards" style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
                @foreach($products as $product)
                <div class="product-card-modern">
                    <div class="product-title">{{ strtoupper($product->name) }}</div>
                    <div class="product-badge">ALIMENT CHAT</div>
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="product-image">
                    <div class="brand-details">
                        <div class="brand">BENPETTO</div>
                        <div class="sub">ANIMALERIE</div>
                        <div class="sub">SANTÉ & BIEN-ÊTRE</div>
                    </div>
                    <div class="bottom-bar">
                        <span class="shop-label">ACHETER EN LIGNE</span>
                        <div class="price-action">
                            <span class="price">€{{ number_format($product->price, 2) }}</span>
                            <form action="{{ route('cart.add', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="add-btn">+</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('components.footer')
</body>
</html> 
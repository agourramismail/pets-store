<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier - Happy Pet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>
<body>
    @include('components.navbar')
    <main style="min-height: 80vh; background: #f7fafc;">
        <section class="category-hero-bg" style="padding-top: 6rem;">
            <div class="category-hero-card" style="max-width: 700px; margin: 0 auto;">
                <div class="hero-text">
                    <div class="hero-title">VOTRE PANIER</div>
                    <div class="hero-desc">
                        Retrouvez ici tous les produits que vous souhaitez commander.<br>
                        Modifiez les quantités, supprimez des articles ou passez à la caisse en toute simplicité !
                    </div>
                </div>
                <div class="hero-image-container">
                    <img src="{{ asset('img/cart.png') }}" alt="Panier" class="hero-image">
                </div>
            </div>
        </section>
        <section class="shop-section" style="background: none; padding-top: 2rem;">
            <div class="shop-container" style="max-width: 800px; margin: 0 auto;">
                <h2 style="margin-bottom:1.5rem; font-size:2rem; font-weight:800; text-align:center;">Votre sélection</h2>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(count($cartItems) > 0)
                    <div class="cart-table-wrapper" style="overflow-x:auto;">
                        <table class="cart-table" style="background:#fff; border-radius:1rem; box-shadow:0 2px 16px rgba(99,102,241,0.07);">
                            <thead>
                                <tr style="background:#f3f4f6;">
                                    <th style="padding:1rem 0.5rem;">Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Sous-total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $item)
                                <tr style="text-align:center;vertical-align:middle;">
                                    <td style="padding:0.5rem;">
                                        <div style="display:flex;align-items:center;gap:1rem;">
                                            <img src="{{ $item['product']->image_url }}" alt="{{ $item['product']->name }}" style="width:60px;height:60px;object-fit:cover;border-radius:0.5rem;">
                                            <span style="font-weight:600;">{{ $item['product']->name }}</span>
                                        </div>
                                    </td>
                                    <td style="font-weight:500;">€{{ number_format($item['product']->price, 2) }}</td>
                                    <td>
                                        <form action="{{ route('cart.update', $item['product']->id) }}" method="POST" style="display:flex;align-items:center;gap:0.5rem;justify-content:center;">
                                            @csrf
                                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control" style="width:60px;">
                                            <button type="submit" class="btn"><img src="{{ asset('img/refresh.png') }}" alt="Actualiser" style="width:20px;height:20px;"></button>
                                        </form>
                                    </td>
                                    <td style="font-weight:500;">€{{ number_format($item['subtotal'], 2) }}</td>
                                    <td>
                                        <form action="{{ route('cart.remove', $item['product']->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-total-bar" style="display:flex;justify-content:flex-end;align-items:center;margin-top:2rem;gap:2rem;">
                        <h4 style="font-size:1.3rem;font-weight:700;">Total : <span style="color:#6366f1;">€{{ number_format($total, 2) }}</span></h4>
                        <a href="{{ route('checkout.show') }}" class="btn">Passer à la caisse</a>
                    </div>
                @else
                    <div style="text-align:center;padding:3rem 0;">
                        <img src="{{ asset('img/cart.png') }}" alt="Panier vide" style="width:80px;opacity:0.3;margin-bottom:1rem;">
                        <p style="font-size:1.2rem;color:#888;">Votre panier est vide.</p>
                    </div>
                @endif
            </div>
        </section>
    </main>
    @include('components.footer')
</body>
</html> 
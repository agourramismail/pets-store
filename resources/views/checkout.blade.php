<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passer à la caisse - Happy Pet</title>
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
                    <div class="hero-title">PASSER À LA CAISSE</div>
                    <div class="hero-desc">
                        Finalisez votre commande en renseignant vos informations de livraison.<br>
                        Vos données sont sécurisées et utilisées uniquement pour la livraison de votre commande.
                    </div>
                </div>
                <div class="hero-image-container">
                    <img src="{{ asset('img/cart.png') }}" alt="Caisse" class="hero-image">
                </div>
            </div>
        </section>
        <section class="shop-section" style="background: none; padding-top: 2rem;">
            <div class="shop-container" style="max-width: 500px; margin: 0 auto;">
                <h2 style="margin-bottom:1.5rem; font-size:2rem; font-weight:800; text-align:center;">Informations de livraison</h2>
                @if($errors->any())
                    <div class="alert alert-danger" style="margin-bottom:1rem;">
                        <ul style="margin:0;padding-left:1.2rem;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('checkout.process') }}" method="POST" style="background:#fff;padding:2rem 2.5rem;border-radius:1rem;box-shadow:0 2px 16px rgba(99,102,241,0.07);">
                    @csrf
                    <div class="form-group" style="margin-bottom:1.2rem;">
                        <label for="name" style="font-weight:600;">Nom complet</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', auth()->user()->name ?? '') }}">
                    </div>
                    <div class="form-group" style="margin-bottom:1.2rem;">
                        <label for="email" style="font-weight:600;">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', auth()->user()->email ?? '') }}">
                    </div>
                    <div class="form-group" style="margin-bottom:1.2rem;">
                        <label for="phone" style="font-weight:600;">Téléphone</label>
                        <input type="text" name="phone" id="phone" class="form-control" required value="{{ old('phone', auth()->user()->phone ?? '') }}">
                    </div>
                    <div class="form-group" style="margin-bottom:1.8rem;">
                        <label for="address" style="font-weight:600;">Adresse de livraison</label>
                        <input type="text" name="address" id="address" class="form-control" required value="{{ old('address') }}">
                    </div>
                    <button type="submit" class="btn">Confirmer la commande</button>
                </form>
            </div>
        </section>
    </main>
    @include('components.footer')
</body>
</html> 
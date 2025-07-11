<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de commande - Happy Pet</title>
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
        <section class="order-confirmation-hero-bg" style="padding-top: 6rem;">
            <div class="order-confirmation-card">
                <div class="order-confirmation-icon">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="30" fill="#7C3AED"/>
                        <path d="M18 32L27 41L43 25" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h2 class="order-confirmation-title">Merci pour votre commande !</h2>
                <p class="order-confirmation-desc">Votre commande n°{{ $order->id }} a bien été enregistrée.</p>
                <div class="order-details">
                    <h4>Détails de la commande :</h4>
                    <ul>
                        <li><strong>Nom :</strong> {{ $order->name }}</li>
                        <li><strong>Email :</strong> {{ $order->email }}</li>
                        <li><strong>Téléphone :</strong> {{ $order->phone }}</li>
                        <li><strong>Adresse :</strong> {{ $order->address }}</li>
                        <li><strong>Total :</strong> €{{ number_format($order->total, 2) }}</li>
                        <li><strong>Status :</strong> {{ $order->status }}</li>
                    </ul>
                </div>
                <div class="order-items">
                    <h4>Produits commandés :</h4>
                    <ul>
                        @foreach($order->items as $item)
                            <li>{{ $item->product->name }} x {{ $item->quantity }} ({{ number_format($item->price, 2) }} € chacun)</li>
                        @endforeach
                    </ul>
                </div>
                <a href="/" class="btn">Retour à l'accueil</a>
            </div>
        </section>
    </main>
    @include('components.footer')
</body>
</html> 
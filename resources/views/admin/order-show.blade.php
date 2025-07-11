<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de la commande #{{ $order->id }} - Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <div class="admin-flex-layout">
        @include('components.admin-sidebar')
        <div class="admin-flex-main">
            @include('components.navbar')
            <main class="admin-main-content">
                <section class="admin-users-header">
                    <h1>Détail de la commande #{{ $order->id }}</h1>
                    <a href="{{ route('admin.orders') }}" class="admin-action-btn">← Retour aux commandes</a>
                </section>
                <section class="admin-users-table-section" style="margin-bottom:2rem;">
                    <ul style="font-size:1.1rem;line-height:2;list-style:none;padding:0;">
                        <li><strong>Client :</strong> {{ $order->name }}</li>
                        <li><strong>Email :</strong> {{ $order->email }}</li>
                        <li><strong>Téléphone :</strong> {{ $order->phone }}</li>
                        <li><strong>Adresse :</strong> {{ $order->address }}</li>
                        <li><strong>Total :</strong> €{{ number_format($order->total, 2) }}</li>
                        <li><strong>Status :</strong> {{ $order->status }}</li>
                        <li><strong>Date :</strong> {{ $order->created_at->format('d/m/Y H:i') }}</li>
                    </ul>
                </section>
                <section class="admin-users-table-section">
                    <h2 style="font-size:1.2rem;font-weight:700;margin-bottom:1rem;">Produits commandés</h2>
                    <table class="admin-users-table">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Sous-total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $item)
                            <tr>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>€{{ number_format($item->price, 2) }}</td>
                                <td>€{{ number_format($item->price * $item->quantity, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </main>
            @include('components.footer')
        </div>
    </div>
</body>
</html> 
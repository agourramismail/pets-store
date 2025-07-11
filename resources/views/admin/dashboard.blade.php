<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin - Happy Pet</title>
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
                <section class="admin-hero">
                    <h1>Tableau de bord administrateur</h1>
                    <p>Bienvenue sur votre espace d'administration. Gérez facilement les utilisateurs, produits et orders de la boutique.</p>
                </section>
                <section class="admin-stats">
                    <div class="admin-stat-card">
                        <span class="stat-icon">👤</span>
                        <div class="stat-label">Utilisateurs</div>
                        <div class="stat-value">{{ $userCount }}</div>
                    </div>
                    <div class="admin-stat-card">
                        <span class="stat-icon">🛒</span>
                        <div class="stat-label">Produits</div>
                        <div class="stat-value">{{ $productCount }}</div>
                    </div>
                    <div class="admin-stat-card">
                        <span class="stat-icon">📦</span>
                        <div class="stat-label">Orders</div>
                        <div class="stat-value">{{ $orderCount }}</div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    @include('components.footer')
</body>
</html> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des produits - Admin</title>
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
                    <h1>Gestion des produits</h1>
                    <a href="{{ route('admin.products.create') }}" class="admin-action-btn">+ Ajouter un produit</a>
                </section>
                <section class="admin-users-table-section">
                    <table class="admin-users-table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category }}</td>
        <td>€{{ number_format($product->price, 2) }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="{{ route('admin.products.edit', $product) }}" class="table-action edit">Modifier</a>
            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="table-action delete" onclick="return confirm('Supprimer ce produit ?')">Supprimer</button>
            </form>
        </td>
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
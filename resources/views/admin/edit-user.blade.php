<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur - Admin</title>
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
                    <h1>Modifier un utilisateur</h1>
                    <a href="{{ route('admin.users') }}" class="admin-action-btn" style="background:#ececec;color:#232323;">&larr; Retour</a>
                </section>
                <section class="admin-users-table-section" style="max-width:500px;margin:auto;">
                    @if ($errors->any())
                        <div class="admin-error-message">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admin.users.update', $user) }}" class="admin-form">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name">Nom</label><br>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required class="admin-input">
                        </div>
                        <div>
                            <label for="email">Email</label><br>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="admin-input">
                        </div>
                        <div>
                            <label for="password">Nouveau mot de passe (laisser vide pour ne pas changer)</label><br>
                            <input type="password" name="password" id="password" class="admin-input">
                        </div>
                        <div>
                            <label for="password_confirmation">Confirmer le mot de passe</label><br>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="admin-input">
                        </div>
                        <div class="admin-form-group">
                            <input type="checkbox" name="is_admin" id="is_admin" value="1" {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}>
                            <label for="is_admin">Administrateur ?</label>
                        </div>
                        <button type="submit" class="admin-action-btn" style="width:100%;">Enregistrer</button>
                    </form>
                </section>
            </main>
            @include('components.footer')
        </div>
    </div>
</body>
</html> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit - Admin</title>
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
                    <h1>Ajouter un produit</h1>
                    <a href="{{ route('admin.products') }}" class="admin-action-btn" style="background:#ececec;color:#232323;">&larr; Retour</a>
                </section>
                <section class="admin-users-table-section" style="max-width:600px;margin:auto;">
                    @if ($errors->any())
                        <div class="admin-error-message">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admin.products.store') }}" class="admin-form" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name">Nom du produit</label><br>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="admin-input">
                        </div>
                        <div>
                            <label for="description">Description</label><br>
                            <textarea name="description" id="description" required class="admin-input" rows="4" style="resize:vertical;">{{ old('description') }}</textarea>
                        </div>
                        <div>
                            <label for="price">Prix (DH)</label><br>
                            <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" min="0" required class="admin-input">
                        </div>
                        <div>
                            <label for="category">Catégorie</label><br>
                            <select name="category" id="category" required class="admin-input">
                                <option value="">Sélectionner une catégorie</option>
                                <option value="chat" {{ old('category') == 'chat' ? 'selected' : '' }}>Chat</option>
                                <option value="chien" {{ old('category') == 'chien' ? 'selected' : '' }}>Chien</option>
                                <option value="oiseau" {{ old('category') == 'oiseau' ? 'selected' : '' }}>Oiseau</option>
                            </select>
                        </div>
                        <div>
                            <label for="image">Image du produit</label><br>
                            <div class="image-upload-container">
                                <input type="file" name="image" id="image" accept="image/*" class="admin-file-input" onchange="previewImage(this)">
                                <div class="image-preview" id="imagePreview">
                                    <div class="upload-placeholder">
                                        <span class="upload-icon">📷</span>
                                        <p>Cliquez pour sélectionner une image</p>
                                        <small>Formats acceptés: JPEG, PNG, JPG, GIF, WEBP (max 2MB)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="admin-action-btn" style="width:100%;">Ajouter</button>
                    </form>
                </section>
            </main>
            @include('components.footer')
        </div>
    </div>
    <script>
        // Make the image preview area clickable
        document.getElementById('imagePreview').addEventListener('click', function() {
            document.getElementById('image').click();
        });
        
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.innerHTML = `
                        <img src="${e.target.result}" alt="Aperçu de l'image" class="preview-image">
                        <button type="button" class="remove-image" onclick="removeImage()">×</button>
                    `;
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        function removeImage() {
            const input = document.getElementById('image');
            const preview = document.getElementById('imagePreview');
            
            input.value = '';
            preview.innerHTML = `
                <div class="upload-placeholder">
                    <span class="upload-icon">📷</span>
                    <p>Cliquez pour sélectionner une image</p>
                    <small>Formats acceptés: JPEG, PNG, JPG, GIF, WEBP (max 2MB)</small>
                </div>
            `;
        }
    </script>
</body>
</html> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toilettage - Happy Pet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
</head>
<body>
    @include('components.navbar')
    <!-- Hero Section -->
    <section class="hero-modern">
        <img src="{{ asset('img/Grooming.png') }}" alt="Toilettage" class="hero-modern-img">
        <div class="hero-modern-content">
            <h1>Toilettage Moderne & Bienveillant</h1>
            <p>Offrez à votre animal une expérience de toilettage haut de gamme dans un cadre apaisant. Nos experts prennent soin de l’hygiène, du pelage et du bien-être de votre compagnon avec douceur et professionnalisme.</p>
        </div>
    </section>
    <!-- Service Features Section -->
    <section class="service-features-modern">
        <div class="feature-card-modern">
            <img src="{{ asset('img/higiene.png') }}" alt="Hygiène">
            <h3>Hygiène Complète</h3>
            <p>Bain, shampoing adapté, séchage et soins des oreilles, yeux et griffes.</p>
        </div>
        <div class="feature-card-modern">
            <img src="{{ asset('img/beauty.png') }}" alt="Beauté du pelage">
            <h3>Beauté du pelage</h3>
            <p>Brossage, démêlage et coupe sur-mesure pour un poil doux et brillant.</p>
        </div>
        <div class="feature-card-modern">
            <img src="{{ asset('img/confort.png') }}" alt="Confort & Détente">
            <h3>Confort & Détente</h3>
            <p>Un moment agréable et relaxant, dans le respect du rythme de votre animal.</p>
        </div>
    </section>
    <!-- Call to Action Section -->
    <section class="cta-modern">
        <h2>Prêt à chouchouter votre compagnon ?</h2>
        <p>Réservez une séance de toilettage ou contactez-nous pour plus d’informations. Notre équipe est à votre écoute !</p>
        <div class="cta-btns">
            <a href="{{ url('/contact') }}">Contactez-nous</a>
            <a href="https://wa.me/212600000000" target="_blank" class="whatsapp-btn">
                <span class="wa-icon">
                    <img src="/img/whatsapp.png" alt="WhatsApp" style="width:22px;height:22px;display:inline-block;vertical-align:middle;" />
                </span>
                WhatsApp
            </a>
        </div>
    </section>
    @include('components.footer')
</body>
</html> 
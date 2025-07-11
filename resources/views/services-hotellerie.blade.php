<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtellerie - Happy Pet</title>
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
        <img src="{{ asset('img/Hospitality.png') }}" alt="Hôtellerie" class="hero-modern-img">
        <div class="hero-modern-content">
            <h1>Hôtellerie pour Animaux</h1>
            <p>Offrez à votre compagnon un séjour confortable et sécurisé pendant votre absence. Notre hôtel pour animaux propose des chambres spacieuses, une surveillance 24h/24 et des soins personnalisés pour chaque pensionnaire.</p>
        </div>
    </section>
    <!-- Service Features Section -->
    <section class="service-features-modern">
        <div class="feature-card-modern">
            <img src="{{ asset('img/room.png') }}" alt="Chambre Animaux">
            <h3>Chambres adaptées</h3>
            <p>Chambres individuelles ou collectives selon la taille et le caractère de l’animal.</p>
        </div>
        <div class="feature-card-modern">
            <img src="{{ asset('img/food.png') }}" alt="Alimentation">
            <h3>Alimentation suivie</h3>
            <p>Repas adaptés et suivis selon les besoins de chaque pensionnaire.</p>
        </div>
        <div class="feature-card-modern">
            <img src="{{ asset('img/monitor.png') }}" alt="Surveillance vétérinaire">
            <h3>Surveillance vétérinaire</h3>
            <p>Suivi santé et sécurité assurés par des professionnels.</p>
        </div>
    </section>
    <!-- Call to Action Section -->
    <section class="cta-modern">
        <h2>Besoin de réserver une chambre pour votre animal ?</h2>
        <p>Contactez-nous pour plus d’informations ou pour réserver une place dans notre hôtel pour animaux.</p>
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
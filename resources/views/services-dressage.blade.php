<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressage - Happy Pet</title>
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
        <img src="{{ asset('img/pet-care.png') }}" alt="Dressage" class="hero-modern-img">
        <div class="hero-modern-content">
            <h1>Dressage & Éducation</h1>
            <p>Offrez à votre animal une éducation positive et adaptée à ses besoins. Nos éducateurs professionnels utilisent des méthodes bienveillantes pour renforcer l’obéissance, la sociabilité et le bien-être de votre compagnon.</p>
        </div>
    </section>
    <!-- Service Features Section -->
    <section class="service-features-modern">
        <div class="feature-card-modern">
            <img src="{{ asset('img/education.png') }}" alt="Éducation de base">
            <h3>Éducation de base</h3>
            <p>Assis, couché, rappel… Méthodes positives et adaptées à chaque animal.</p>
        </div>
        <div class="feature-card-modern">
            <img src="{{ asset('img/social.png') }}" alt="Socialisation">
            <h3>Socialisation</h3>
            <p>Renforcement de la sociabilité avec d’autres animaux et humains.</p>
        </div>
        <div class="feature-card-modern">
            <img src="{{ asset('img/coach.png') }}" alt="Coaching maître">
            <h3>Coaching pour les maîtres</h3>
            <p>Accompagnement personnalisé pour une relation harmonieuse.</p>
        </div>
    </section>
    <!-- Call to Action Section -->
    <section class="cta-modern">
        <h2>Envie d’un animal bien éduqué et heureux ?</h2>
        <p>Contactez-nous pour en savoir plus sur nos programmes de dressage et réserver une séance d’évaluation.</p>
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
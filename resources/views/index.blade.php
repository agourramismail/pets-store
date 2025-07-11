<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Pet - Animalerie</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    @include('components.navbar')
    
    <!-- Hero Section with Video Background -->
    <section class="hero-section">
        <div class="video-background">
            <video autoplay muted loop id="myVideo">
                <source src="{{ asset('videos/pets.mp4') }}" type="video/mp4">
                Votre navigateur ne prend pas en charge la vidéo.
            </video>
        </div>
        <div class="hero-content">
            <div class="content-wrapper">
                <h1>PRENEZ SOIN DE VOTRE ANIMAL,<br>NOUS FAISONS<br>LERESTE</h1>
                <p>Offrez-lui une vie saine et équilibrée, entre soins, éducation<br>et nutrition naturelle.</p>
                <div class="hero-buttons">
                    <a href="#" class="hero-btn">ALIMENTATION</a>
                    <a href="#services-section" class="hero-btn outline">NOS SERVICES</a>
                </div>
                <div class="familly-pet-container">
                    <img src="{{ asset('img/familypet.png') }}" alt="" class="familly-pet">
                    <span>Parce qu'il fait partie de la famille.</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Shop Online Section -->
    <section class="shop-section">
        <div class="shop-container">
            <h2>Nos animaux de compagnie</h2>
            <p class="shop-desc">Découvrez notre sélection complète d’aliments, d’accessoires et de soins pour chiens, chats et oiseaux. Offrez à votre compagnon le meilleur à chaque étape de sa vie.</p>
            <div class="shop-cards">
                <!-- Dog Food Card -->
                <div class="shop-card">
                    <div class="card-image" style="background-color: #E0F5E9;">
                        <img src="{{ asset('img/dogp.webp') }}" alt="Chien avec des aliments" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-label">DISPONIBLE</span>
                        <h3>CHIENS</h3>
                        <a href="{{ route('products.chien') }}" class="about-btn">Voir les produits <span class="arrow-icon">→</span></a>
                    </div>
                </div>
                <!-- Cat Treats Card -->
                <div class="shop-card">
                    <div class="card-image" style="background-color: #FFE5E5;">
                        <img src="{{ asset('img/catp.webp') }}" alt="Chat avec des friandises" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-label">DISPONIBLE</span>
                        <h3>CHATS</h3>
                        <a href="{{ route('products.chat') }}" class="about-btn">Voir les produits <span class="arrow-icon">→</span></a>
                    </div>
                </div>
                <!-- Bird Food Card -->
                <div class="shop-card">
                    <div class="card-image" style="background-color: #E0F5E9;">
                        <img src="{{ asset('img/birdp.webp') }}" alt="Oiseau avec des aliments" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-label">DISPONIBLE</span>
                        <h3>OISEAUX</h3>
                        <a href="{{ route('products.oiseau') }}" class="about-btn">Voir les produits <span class="arrow-icon">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section" id="about-section">
        <div class="about-container">
            <h2 class="about-title">À propos de Happy Pet</h2>
            <div class="about-content">
                <div class="about-image-main">
                    <img src="{{ asset('img/home-animals.png') }}" alt="Animaux heureux" class="main-dog-img">
                </div>
                <div class="about-info">
                    <div class="about-image-secondary">
                        <img src="{{ asset('img/dogp.webp') }}" alt="Chien mignon" class="secondary-dog-img">
                    </div>
                    <div class="about-text">
                        <h3>Votre partenaire bien-être animal</h3>
                        <p>Chez Happy Pet, nous mettons la santé, le confort et la joie de vos animaux au cœur de nos priorités. Notre équipe passionnée vous accompagne avec des conseils personnalisés, des produits de qualité et des services adaptés à chaque besoin.</p>
                        <a href="#services-section" class="about-btn">En savoir plus <span class="arrow-icon">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services-section">
        <div class="services-container">
            <h2 class="services-title">Nos services pour vos animaux</h2>
            <div class="services-grid">
                <!-- Toilettage Card -->
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('img/Grooming.png') }}" alt="Service de toilettage" class="service-img">
                    </div>
                    <h3>Toilettage professionnel</h3>
                    <p>Confiez le soin du pelage de votre animal à nos experts pour un look soigné et une hygiène parfaite.</p>
                </div>
                <!-- Hôtellerie Card -->
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('img/Hospitality.png') }}" alt="Service d'hôtellerie" class="service-img">
                    </div>
                    <h3>Pension & Hôtellerie</h3>
                    <p>Partez l’esprit tranquille : nous accueillons votre compagnon dans un environnement sécurisé et chaleureux.</p>
                </div>
                <!-- Dressage Card -->
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('img/pet-care.png') }}" alt="Service de dressage" class="service-img">
                    </div>
                    <h3>Éducation & Dressage</h3>
                    <p>Des séances adaptées pour renforcer la complicité et l’obéissance de votre animal, dans la douceur et le respect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers Section -->
    <section class="bestsellers-section" id="bestsellers-section">
        <div class="bestsellers-container">
            <div class="bestsellers-header">
                <div class="header-content">
                    <h2>Nos meilleures ventes</h2>
                    <p>Découvrez les produits préférés de nos clients et de leurs compagnons, plébiscités pour leur qualité et leur efficacité.</p>
                </div>
                <div class="slider-controls">
                    <button class="slider-btn prev" id="prevBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                        </svg>
                    </button>
                    <button class="slider-btn next" id="nextBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="products-slider" id="productsSlider">
                <div class="products-track">
                    @foreach($bestsellers as $product)
                    <div class="product-card">
                        <h3>{{ strtoupper($product->name) }}</h3>
                        <div class="product-image">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€{{ number_format($product->price, 2) }}</span>
                                <form action="{{ route('cart.add', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="add-btn">+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.products-track');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const cards = document.querySelectorAll('.product-card');
            const cardWidth = cards[0].offsetWidth + 32; // Including gap
            const visibleCards = 4;
            let currentIndex = 0;

            // Initially hide prev button
            prevBtn.style.opacity = '0.5';
            prevBtn.style.cursor = 'not-allowed';

            function updateSliderPosition() {
                slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
                
                // Update button states
                prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
                prevBtn.style.cursor = currentIndex === 0 ? 'not-allowed' : 'pointer';
                
                nextBtn.style.opacity = currentIndex >= cards.length - visibleCards ? '0.5' : '1';
                nextBtn.style.cursor = currentIndex >= cards.length - visibleCards ? 'not-allowed' : 'pointer';
            }

            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSliderPosition();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentIndex < cards.length - visibleCards) {
                    currentIndex++;
                    updateSliderPosition();
                }
            });
        });
    </script>
</body>
</html>

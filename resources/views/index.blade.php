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
                    <a href="#" class="hero-btn outline">NOS SERVICES</a>
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
            <h2>Nos Type D'animaux de compagnie</h2>
            <p class="shop-desc">Tout ce dont vous avez besoin est ici. Des recettes d'alimentation et services pour<br>votre animal à chaque étape de sa vie.</p>
            
            <div class="shop-cards">
                <!-- Dog Food Card -->
                <div class="shop-card">
                    <div class="card-image" style="background-color: #E0F5E9;">
                        <img src="{{ asset('img/dogp.webp') }}" alt="Chien avec des aliments" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-label">DSIPONIBLE</span>
                        <h3>CHIENS</h3>
                        <a href="#" class="about-btn">DECOUVRIR <span class="arrow-icon">→</span></a>
                    </div>
                </div>

                <!-- Cat Treats Card -->
                <div class="shop-card">
                    <div class="card-image" style="background-color: #FFE5E5;">
                        <img src="{{ asset('img/catp.webp') }}" alt="Chat avec des friandises" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-label">DSIPONIBLE</span>
                        <h3>CHATS</h3>
                        <a href="#" class="about-btn">DECOUVRIR <span class="arrow-icon">→</span></a>
                    </div>
                </div>

                <!-- Bird Food Card -->
                <div class="shop-card">
                    <div class="card-image" style="background-color: #E0F5E9;">
                        <img src="{{ asset('img/birdp.webp') }}" alt="Oiseau avec des aliments" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-label">DSIPONIBLE</span>
                        <h3>OISEAUX</h3>
                        <a href="#" class="about-btn">DECOUVRIR <span class="arrow-icon">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="about-container">
            <h2 class="about-title">À PROPOS</h2>
            <div class="about-content">
                <div class="about-image-main">
                    <img src="{{ asset('img/home-animals.png') }}" alt="Animaux heureux" class="main-dog-img">
                </div>
                <div class="about-info">
                    <div class="about-image-secondary">
                        <img src="{{ asset('img/dogp.webp') }}" alt="Chien mignon" class="secondary-dog-img">
                    </div>
                    <div class="about-text">
                        <h3>LE MEILLEUR AMI DE VOTRE ANIMAL</h3>
                        <p>Nos soins vétérinaires vont au-delà du simple traitement des maladies ; nous nous concentrons sur les soins préventifs, les examens de bien-être et l'attention bienveillante pour vous et votre animal.</p>
                        <a href="#" class="about-btn">DÉCOUVRIR <span class="arrow-icon">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="services-container">
            <h2 class="services-title">Nos services</h2>
            <div class="services-grid">
                <!-- Toilettage Card -->
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('img/Grooming.png') }}" alt="Service de toilettage" class="service-img">
                    </div>
                    <h3>Toilettage</h3>
                    <p>Offrez à votre compagnon une séance de beauté animale sur mesure pour un style impeccable et une allure éclatante.</p>
                </div>

                <!-- Hôtellerie Card -->
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('img/Hospitality.png') }}" alt="Service d'hôtellerie" class="service-img">
                    </div>
                    <h3>Hôtellerie</h3>
                    <p>Confiez votre animal à nos soins dans un environnement chaleureux et confortable, conçu pour son bien-être.</p>
                </div>

                <!-- Dressage Card -->
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('img/pet-care.png') }}" alt="Service de dressage" class="service-img">
                    </div>
                    <h3>Dressage</h3>
                    <p>Aidez votre animal à développer de nouvelles compétences grâce à des séances d'entraînement adaptées et bienveillantes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers Section -->
    <section class="bestsellers-section">
        <div class="bestsellers-container">
            <div class="bestsellers-header">
                <div class="header-content">
                    <h2>BEST SELLERS</h2>
                    <p>Nos produits les plus populaires que les gens et leurs animaux adorent, encore et encore</p>
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
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <h3>PREMIUM MEATY FEAST</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Premium Meaty Feast">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€19.89</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <h3>STANDARD RANGE CHICKEN</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Standard Range Chicken">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€13.47</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <h3>COMPLETE ADULT TURKEY</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Complete Adult Turkey">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€21.62</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <h3>STANDARD RANGE TRIPE</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Standard Range Tripe">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€19.00</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="product-card">
                        <h3>RABBIT EARS WITH HAIR</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Rabbit Ears with Hair">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€2.88 - €170.32</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="product-card">
                        <h3>PREMIUM PUPPY FOOD</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Premium Puppy Food">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€24.99</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 7 -->
                    <div class="product-card">
                        <h3>SENIOR DOG FORMULA</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Senior Dog Formula">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€22.50</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 8 -->
                    <div class="product-card">
                        <h3>GRAIN FREE SPECIAL</h3>
                        <div class="product-image">
                            <img src="{{ asset('img/petfood.webp') }}" alt="Grain Free Special">
                        </div>
                        <div class="product-info">
                            <span class="shop-label">ACHETER EN LIGNE</span>
                            <div class="price-action">
                                <span class="price">€26.99</span>
                                <button class="add-btn">+</button>
                            </div>
                        </div>
                    </div>
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

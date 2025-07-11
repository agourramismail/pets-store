<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - Happy Pet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <style>
        body { background: #FAF7F4; }
        .contact-hero {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 3rem;
            padding: 4rem 0 2rem 0;
            background: #FAF7F4;
            position: relative;
        }
        .contact-hero-img {
            width: 340px;
            height: 340px;
            object-fit: contain;
            border-radius: 2rem;
            z-index: 1;
        }
        .contact-hero-content {
            max-width: 540px;
            z-index: 2;
        }
        .contact-hero-content h1 {
            font-size: 3.1rem;
            font-weight: 900;
            color: #232323;
            margin-bottom: 0.7rem;
            letter-spacing: -0.02em;
        }
        .contact-hero-content .badge {
            display: inline-block;
            background: #7C3AED;
            color: #fff;
            font-size: 1rem;
            font-weight: 700;
            border-radius: 999px;
            padding: 0.4rem 1.2rem;
            margin-bottom: 1.1rem;
            box-shadow: 0 2px 8px rgba(124,58,237,0.10);
        }
        .contact-hero-content p {
            font-size: 1.25rem;
            color: #232323;
            margin-bottom: 0.8rem;
        }
        .contact-main {
            display: flex;
            gap: 3.5rem;
            justify-content: center;
            align-items: flex-start;
            margin: 0 auto 3rem auto;
            max-width: 1400px;
            width: 95vw;
            flex-wrap: wrap;
        }
        .contact-form-block {
            padding: 3rem 0;
            min-width: 400px;
            flex: 1 1 420px;
        }
        .contact-form-block h2 {
            font-size: 1.7rem;
            font-weight: 800;
            color: #232323;
            margin-bottom: 1.2rem;
        }
        .contact-form label {
            display: block;
            font-weight: 600;
            color: #232323;
            margin-bottom: 0.3rem;
        }
        .contact-form .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .contact-form .input-group svg {
            position: absolute;
            left: 1.1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #7C3AED;
            width: 20px;
            height: 20px;
            opacity: 0.7;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 1.1rem 1.2rem 1.1rem 2.8rem;
            border-radius: 1.5rem;
            border: 1.5px solid #7C3AED;
            background: transparent;
            font-size: 1.08rem;
            color: #232323;
            transition: border 0.2s, box-shadow 0.2s;
            font-family: inherit;
            box-shadow: none;
        }
        .contact-form input:focus, .contact-form textarea:focus {
            border: 2px solid #7C3AED;
            outline: none;
            box-shadow: 0 0 0 2px #e9ddfa;
        }
        .contact-form textarea {
            min-height: 120px;
            resize: vertical;
        }
        .contact-form button {
            background: #7C3AED;
            color: #fff;
            font-weight: 700;
            font-size: 1.15rem;
            padding: 1.1rem 2.7rem;
            border-radius: 2rem;
            border: none;
            box-shadow: none;
            transition: background 0.2s, color 0.2s;
            cursor: pointer;
            margin-top: 0.5rem;
        }
        .contact-form button:hover {
            background: #5b23b4;
        }
        .contact-infos-block {
            padding: 3rem 0;
            min-width: 340px;
            flex: 1 1 340px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 1.2rem;
        }
        .contact-infos-block h3 {
            font-size: 1.2rem;
            font-weight: 800;
            color: #232323;
            margin-bottom: 0.7rem;
        }
        .contact-infos-block .info-item {
            display: flex;
            align-items: center;
            gap: 0.7rem;
            font-size: 1.08rem;
            color: #232323;
        }
        .contact-infos-block .info-item svg {
            color: #7C3AED;
            width: 22px;
            height: 22px;
        }
        .social-links {
            margin-top: 1.2rem;
        }
        @media (max-width: 1200px) {
            .contact-main { max-width: 98vw; gap: 2rem; }
            .contact-form-block, .contact-infos-block { min-width: 280px; padding: 2rem 0; }
        }
        @media (max-width: 900px) {
            .contact-hero { flex-direction: column; gap: 2rem; padding: 2.5rem 0 1.5rem 0; }
            .contact-hero-img { width: 220px; height: 220px; }
            .contact-main { flex-direction: column; gap: 2rem; }
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <!-- Hero Section -->
    <section class="contact-hero">
        <img src="{{ asset('img/contact-us.png') }}" alt="Contactez-nous" class="contact-hero-img">
        <div class="contact-hero-content">
            <h1>Contactez-nous</h1>
            <p>Une question, une demande&nbsp;? Notre équipe est à votre écoute pour vous accompagner et répondre à vos besoins.</p>
        </div>
    </section>
    <main class="contact-main">
        <div class="contact-form-block">
            <h2>Envoyez-nous un message</h2>
            @if(session('success'))
                <div class="contact-success-message">{{ session('success') }}</div>
            @endif
            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <label for="name">Nom</label>
                <div class="input-group">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a7.5 7.5 0 0 1 13 0"/></svg>
                    <input type="text" id="name" name="name" placeholder="Votre nom" required>
                </div>
                <label for="email">Email</label>
                <div class="input-group">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6 12 13 2 6"/></svg>
                    <input type="email" id="email" name="email" placeholder="Votre email" required>
                </div>
                <label for="subject">Sujet</label>
                <div class="input-group">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6 12 13 2 6"/></svg>
                    <input type="text" id="subject" name="subject" placeholder="Sujet (optionnel)">
                </div>
                <label for="message">Message</label>
                <div class="input-group">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <textarea id="message" name="message" placeholder="Votre message" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
        <div class="contact-infos-block">
            <h3>Nos coordonnées</h3>
            <div class="info-item">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="10" r="3"/></svg>
                123 Avenue des Animaux, Casablanca
            </div>
            <div class="info-item">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92V19a2 2 0 01-2 2H4a2 2 0 01-2-2v-2.08a2 2 0 01.89-1.66l7-4.13a2 2 0 012.22 0l7 4.13a2 2 0 01.89 1.66z"/><path d="M16 3.13a4 4 0 01.9 7.77"/></svg>
                contact@happypet.ma
            </div>
            <div class="info-item">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92V19a2 2 0 01-2 2H4a2 2 0 01-2-2v-2.08a2 2 0 01.89-1.66l7-4.13a2 2 0 012.22 0l7 4.13a2 2 0 01.89 1.66z"/><path d="M16 3.13a4 4 0 01.9 7.77"/></svg>
                +212 6 00 00 00 00
            </div>
            <div class="social-links">
                <a href="https://wa.me/212600000000" target="_blank" class="social-link" title="WhatsApp">
                    <img src="/img/whatsapp.png" alt="WhatsApp" style="width:22px;height:22px;display:inline-block;vertical-align:middle;" />
                </a>
                <a href="#" class="social-link" title="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" title="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </main>
    @include('components.footer')
</body>
</html> 
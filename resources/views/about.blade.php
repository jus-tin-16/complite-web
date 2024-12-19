
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
    <link rel="stylesheet"  href="{{ asset('js/index.js') }}" />
</head>
<body>
    <header class="header">
        <div class="header-bottom">
            <div class="container">
                <a href="#" class="logo-container">
                    <img src="{{ URL('/Images/Logo.png') }}" alt="COMPLITE Robot Mascot" class="logo-image">
                    <span class="logo-text">COMPLITE</span>
                </a>
                <nav class="navbar">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    <a href="{{ url('/about') }}" class="nav-link">About</a>
                    <a href="{{ url('/login') }}" class="nav-link">Login</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero about-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text-content">
                    <h2 class="welcome-text">About</h2> 
                    <h1 class="brand-name">COMPLITE</h1>
                    <p class="hero-description">
                        COMPLITE is an innovative educational platform designed to transform learning through interactive and engaging experiences. Our mission is to make education accessible, enjoyable, and personalized for every student.
                    </p>
                </div>
                <div class="hero-mascot">
                    <img src="{{ URL('/Images/Hiro2.png') }}" alt="COMPLITE Learning" class="robot-mascot">
                </div>
            </div>
        </div>
    </section>

    <section class="proponents container">
        <h2 class="section-title">Our Team</h2>
        <div class="card-grid team-grid">
            <div class="proponent-card">
                <img src="{{ URL('/Images/Aleta.png') }}" alt="Team Member 1" class="proponent-image">
                <h3 class="proponent-name">Justin Anthony Aleta</h3>
                <p class="proponent-details">Founder & CEO | ID: COMP-001</p>
            </div>
            <div class="proponent-card">
                <img src="{{ URL('/Images/anthon.jpg') }}" alt="Team Member 2" class="proponent-image">
                <h3 class="proponent-name">Anthon Jay Delgado</h3>
                <p class="proponent-details">Chief Technology Officer | ID: COMP-002</p>
            </div>
            <div class="proponent-card">
                <img src="{{ URL('/Images/Marvin.png') }}" alt="Team Member 3" class="proponent-image">
                <h3 class="proponent-name">John Marvin Oliva</h3>
                <p class="proponent-details">Head of Curriculum | ID: COMP-003</p>
            </div>
            <div class="proponent-card">
                <img src="{{ URL('/Images/Brent.png') }}" alt="Team Member 4" class="proponent-image">
                <h3 class="proponent-name">Brent Ponce</h3>
                <p class="proponent-details">User Experience Designer | ID: COMP-004</p>
            </div>
            <div class="proponent-card">
                <img src="{{ URL('/Images/Ocampo.jpg') }}" alt="Team Member 5" class="proponent-image">
                <h3 class="proponent-name">Mark Rayniel Ocampo</h3>
                <p class="proponent-details">Marketing Director | ID: COMP-005</p>
            </div>
            <div class="proponent-card">
                <img src="{{ URL('/Images/Kolai.jpg') }}" alt="Team Member 6" class="proponent-image">
                <h3 class="proponent-name">Gian Kolai Menia</h3>
                <p class="proponent-details">Lead Software Engineer | ID: COMP-006</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="h3">About COMPLITE</h3>
                    <p class="about-text">Educational platform dedicated to interactive learning</p>
                </div>
                
                <div class="footer-section">
                    <h3 class="h3">Navigation</h3>
                    <nav class="navbar">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                        <a href="{{ url('/about') }}" class="nav-link">About</a>
                        <a href="{{ url('/login') }}" class="nav-link">Login</a>
                    </nav>
                </div>
                
                <div class="footer-section">
                    <h3 class="h3">Contact</h3>
                    <nav class="footer-nav">
                    <p>Email: contact@complite.com</p>
                    <p>Phone: (123) 456-7890</p>
                    <a href="#" class="footer-link"><h3>Send a Report?</h3></a>
                    </nav>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 COMPLITE. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="../JS/About.js"></script>
</body>
</html>
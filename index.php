<?php
$chave = "6Le2B2MrAAAAAGibQeOs9ijTnBAljxxeHK7hlhGw";

$instagram = "https://www.instagram.com/m3solucoeseservicos";
$facebook = "https://www.facebook.com/m3solucoeseservicos";
$linkdin = "https://br.linkedin.com/company/m3solucoeseservicos";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title>M3 Soluções Contábeis | Consultoria Financeira e Gestão Fiscal no Rio de Janeiro</title>
    <meta name="description" content="Soluções contábeis completas para sua empresa no RJ. Reduza impostos, regularize sua empresa e tenha gestão financeira eficiente. Atendimento personalizado para MEI, PMEs e grandes empresas.">
    <meta name="keywords" content="contabilidade RJ, consultoria contábil, assessoria fiscal, gestão financeira, BPO financeiro, legalização de empresas, departamento pessoal, imposto de renda, MEI contábil, terceiro setor contábil">
    
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="M3 Soluções Contábeis | Consultoria Financeira e Gestão Fiscal no Rio de Janeiro">
    <meta itemprop="description" content="Soluções contábeis completas para sua empresa no RJ. Reduza impostos, regularize sua empresa e tenha gestão financeira eficiente. Atendimento personalizado para MEI, PMEs e grandes empresas.">
    <meta itemprop="image" content="https://m3solucoeseservicos.com.br/images/contabilidade-otimizada-rj.png">
    
    <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#2c3e50">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="M3 Contabilidade">
    
    <!-- Icons for iOS -->
    <link rel="apple-touch-icon" href="icons/icon-152x152.png">
    
    <!-- Manifest -->
    <link rel="manifest" href="/manifest.json">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://m3solucoeseservicos.com.br/">
    <meta property="og:title" content="M3 Soluções Contábeis | Especialistas em Gestão Fiscal no Rio">
    <meta property="og:description" content="Reduza até 30% dos custos tributários com nossa consultoria especializada. Atendimento personalizado para empresas no RJ. Agende sua análise gratuita!">
    <meta property="og:image" content="https://m3solucoeseservicos.com.br/images/contabilidade-social-share.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://m3solucoeseservicos.com.br/">
    <meta property="twitter:title" content="M3 Soluções Contábeis | Especialistas em Gestão Fiscal no Rio">
    <meta property="twitter:description" content="Reduza até 30% dos custos tributários com nossa consultoria especializada. Atendimento personalizado para empresas no RJ. Agende sua análise gratuita!">
    <meta property="twitter:image" content="https://m3solucoeseservicos.com.br/images/contabilidade-social-share.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://m3solucoeseservicos.com.br/">
    
    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "M3 Soluções Contábeis",
      "image": "https://m3solucoeseservicos.com.br/images/logo.png",
      "@id": "https://m3solucoeseservicos.com.br/",
      "url": "https://m3solucoeseservicos.com.br/",
      "telephone": "+5521993081798",
      "priceRange": "R$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rua Lopo Saraiva, 179 bloco 2 sala 320",
        "addressLocality": "Rio de Janeiro",
        "addressRegion": "RJ",
        "postalCode": "20000-000",
        "addressCountry": "BR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-22.9068",
        "longitude": "-43.1729"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "08:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/m3solucoeseservicos",
        "https://www.instagram.com/m3solucoeseservicos",
        "https://br.linkedin.com/company/m3solucoeseservicos"
      ]
    }
    </script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon/favicon.png">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $chave; ?>"></script>
    
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #7f8c8d;
            --white: #fff;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: #f9f9f9;
        }
        
        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: var(--transition);
        }
        
        ul {
            list-style: none;
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 25px;
            background-color: var(--secondary-color);
            color: var(--white);
            border-radius: 5px;
            font-weight: 500;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: var(--box-shadow);
        }
        
        .btn-accent {
            background-color: var(--accent-color);
        }
        
        .btn-accent:hover {
            background-color: #c0392b;
        }
        
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--primary-color);
            position: relative;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
            margin: 15px auto;
        }
        
        /* Header */
        header {
            background-color: var(--white);
            box-shadow: var(--box-shadow);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: var(--transition);
        }
        
        .header-scrolled {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .logo span {
            color: var(--secondary-color);
        }
        
        .logo img {
            max-height: 50px;
        }
        
        .nav-menu {
            display: flex;
        }
        
        .nav-menu li {
            margin-left: 30px;
        }
        
        .nav-menu a {
            font-weight: 500;
            position: relative;
        }
        
        .nav-menu a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--secondary-color);
            transition: var(--transition);
        }
        
        .nav-menu a:hover:after {
            width: 100%;
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: -100%;
            width: 80%;
            max-width: 350px;
            height: 100vh;
            background-color: var(--white);
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1100;
            transition: var(--transition);
            overflow-y: auto;
            padding: 20px;
        }
        
        .mobile-menu.active {
            left: 0;
        }
        
        .mobile-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .mobile-menu-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .mobile-menu-logo img {
            max-height: 30px;
        }
        
        .close-menu {
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--accent-color);
        }
        
        .mobile-nav-menu li {
            margin-bottom: 15px;
        }
        
        .mobile-nav-menu a {
            display: block;
            padding: 10px;
            font-weight: 500;
            border-radius: 5px;
        }
        
        .mobile-nav-menu a:hover {
            background-color: var(--light-color);
        }
        
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('/images/hero/hero.png') no-repeat center center/cover;
            color: var(--white);
            padding: 180px 0 100px;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        /* About Section */
        .about {
            background-color: var(--white);
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .about-text p {
            margin-bottom: 15px;
        }
        
        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }
        
        /* Services Section */
        .services {
            background-color: var(--light-color);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-image {
            height: 200px;
            overflow: hidden;
        }
        
        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .service-card:hover .service-image img {
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 20px;
        }
        
        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        
        /* Contact Section */
        .contact {
            background-color: var(--white);
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }
        
        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .contact-info p {
            margin-bottom: 30px;
        }
        
        .contact-details {
            margin-bottom: 30px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact-item i {
            width: 40px;
            height: 40px;
            background-color: var(--light-color);
            color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .contact-form .form-group {
            margin-bottom: 20px;
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            transition: var(--transition);
        }
        
        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--secondary-color);
        }
        
        .contact-form textarea {
            resize: vertical;
            min-height: 150px;
        }
        
        /* Testimonials Section */
        .testimonials {
            background-color: var(--light-color);
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--box-shadow);
            position: relative;
        }
        
        .testimonial-card:before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 4rem;
            color: var(--light-color);
            font-family: Georgia, serif;
            line-height: 1;
            z-index: 0;
        }
        
        .testimonial-content {
            position: relative;
            z-index: 1;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
            color: var(--primary-color);
        }
        
        .author-info p {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--white);
            padding: 70px 0 0;
            position: relative;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-about {
            grid-column: span 1;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--white);
            display: inline-block;
        }

        .footer-logo span {
            color: var(--secondary-color);
        }
        
        .footer-logo img {
            max-height: 40px;
        }

        .footer-about p {
            color: #bdc3c7;
            margin-bottom: 25px;
            line-height: 1.7;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-links a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: rgb(44, 62, 80);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            font-size: 1rem;
        }

        .social-links a:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }

        .footer-links {
            grid-column: span 1;
        }

        .footer-links h3 {
            font-size: 1.3rem;
            margin-bottom: 22px;
            position: relative;
            padding-bottom: 8px;
            color: var(--white);
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .footer-links ul {
            padding-left: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #bdc3c7;
            transition: var(--transition);
            display: inline-block;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--secondary-color);
            transform: translateX(5px);
        }

        .footer-contact {
            grid-column: span 1;
        }

        .footer-contact h3 {
            font-size: 1.3rem;
            margin-bottom: 22px;
            position: relative;
            padding-bottom: 8px;
            color: var(--white);
        }

        .footer-contact h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .contact-list {
            padding-left: 0;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 18px;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .contact-item i {
            color: var(--secondary-color);
            margin-right: 12px;
            margin-top: 3px;
            font-size: 1rem;
            min-width: 18px;
        }

        .contact-text {
            flex: 1;
        }

        .contact-address .address-line {
            display: block;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 25px 0;
            text-align: center;
        }

        .footer-bottom p {
            margin-bottom: 10px;
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .dev-credits a {
            color: var(--secondary-color);
            transition: var(--transition);
            text-decoration: none;
        }

        .dev-credits a:hover {
            text-decoration: underline;
        }
        
        /* Responsividade do Footer */
        @media (max-width: 992px) {
            .footer-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .footer-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-about, 
            .footer-links, 
            .footer-contact {
                text-align: center;
            }
            
            .footer-links h3::after,
            .footer-contact h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                justify-content: center;
            }
            
            .contact-item i {
                margin-right: 8px;
            }
            
            .logo img {
                max-height: 40px;
            }
            .footer-logo img {
                max-height: 30px;
            }
        }

        /* WhatsApp Button */
        .whatsapp-btn {
            position: fixed;
            bottom: 135px;
            right: 30px;
            background-color: #25D366;
            color: var(--white);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
            z-index: 999;
            transition: var(--transition);
            animation: pulse 2s infinite;
        }
        
        .whatsapp-btn:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }
        
        /* Phone Box */
        .phone-box {
            position: fixed;
            bottom: 30px;
            left: 30px;
            background-color: var(--white);
            color: var(--primary-color);
            padding: 15px;
            border-radius: 10px;
            box-shadow: var(--box-shadow);
            z-index: 999;
            display: flex;
            align-items: center;
            transition: var(--transition);
        }
        
        .phone-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .phone-icon {
            background-color: var(--secondary-color);
            color: var(--white);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .phone-number {
            font-weight: 600;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 200px;
            right: 30px;
            background-color: var(--primary-color);
            color: var(--white);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: var(--box-shadow);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--secondary-color);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
                margin-bottom: 40px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .about-text, .about-image {
                flex: none;
                width: 100%;
            }
            
            .about-image {
                order: -1;
            }
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .hamburger {
                display: block;
            }
            
            .hero {
                padding: 150px 0 80px;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
                text-align: center;
            }
            
            .phone-box {
                bottom: 130px;
                left: 20px;
                padding: 10px;
            }
            
            .phone-icon {
                width: 30px;
                height: 30px;
                font-size: 1rem;
            }
            
            .phone-number {
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .section {
                padding: 50px 0;
            }
            
            .section-title {
                font-size: 1.8rem;
                margin-bottom: 30px;
            }
            
            .testimonial-card {
                padding: 20px;
            }
            
            .whatsapp-btn {
                right: 20px;
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }
            
            .back-to-top {
                right: 20px;
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
        }
        
        .spinner-border {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            vertical-align: text-bottom;
            border: 0.2em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner-border .75s linear infinite;
        }

        @keyframes spinner-border {
            to { transform: rotate(360deg); }
        }
    </style>
    
    <style>
        .client-logos {
            padding: 60px 0;
            background: #f9f9f9;
            overflow: hidden;
        }
        
        .logos-carousel {
            width: 100%;
            position: relative;
            margin: 30px auto;
        }
        
        .logos-track {
            display: flex;
            align-items: center;
            gap: 40px;
            width: max-content;
            animation: scroll 20s linear infinite;
        }
        
        .logo-item {
            flex-shrink: 0;
            width: 160px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        .logo-item:hover {
            filter: grayscale(0);
            opacity: 1;
        }
        
        .logo-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        @media (max-width: 768px) {
            .logo-item {
                width: 120px;
                height: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="header-container container">
            <a href="#" class="logo">
                <img src="images/logo/logo.png" alt="M3 Soluções" />
            </a>
            <nav class="desktop-nav">
                <ul class="nav-menu">
                    <li><a href="#home">Início</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#parceiros">Parceiro</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <div class="mobile-menu-logo">
                <img src="images/logo/logo.png" alt="M3 Soluções" />
            </div>
            <div class="close-menu" id="closeMenu">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <nav class="mobile-nav">
            <ul class="mobile-nav-menu">
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#parceiros">Parceiro</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </div>
    
    <div class="overlay" id="overlay"></div>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Soluções Contábeis Completas para seu Negócio</h1>
            <p>A M3 Soluções e Serviços oferece os melhores serviços contábeis, fiscais e consultoria especializada para garantir a saúde financeira e compliance da sua empresa.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn">Fale Conosco</a>
                <a href="#services" class="btn btn-accent">Nossos Serviços</a>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <h2 class="section-title">Sobre Nós</h2>
            <div class="about-content">
                <div class="about-text">
                    <h2>Transformando números em estratégias de crescimento</h2>
                    <p>A M3 Soluções e Serviços é uma empresa especializada em serviços contábeis, consultoria financeira e soluções fiscais integradas. Nossa missão é ajudar empresas e empreendedores a alcançar seus objetivos através de uma gestão financeira eficiente e compliance fiscal.</p>
                    <p>Com uma equipe de contadores e especialistas fiscais altamente qualificados e experientes, oferecemos serviços personalizados que atendem às necessidades específicas de cada cliente, garantindo segurança, conformidade e otimização tributária.</p>
                    <p>Nossos valores incluem ética profissional, transparência nos processos e um relacionamento de parceria de longo prazo com nossos clientes.</p>
                    <a href="#contact" class="btn">Saiba Mais</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" alt="Equipe de contabilidade trabalhando">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="container">
            <h2 class="section-title">Nossos Serviços</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Análises Financeiras">
                    </div>
                    <div class="service-content">
                        <h3>Análises Financeiras</h3>
                        <p>Análises detalhadas da saúde financeira da sua empresa com relatórios personalizados e insights estratégicos.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" alt="Assessoria Contábil">
                    </div>
                    <div class="service-content">
                        <h3>Assessoria Contábil</h3>
                        <p>Orientação especializada para tomada de decisões estratégicas com base em informações contábeis precisas.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" alt="Consultoria Contábil">
                    </div>
                    <div class="service-content">
                        <h3>Consultoria Contábil</h3>
                        <p>Soluções personalizadas para otimização de processos contábeis e adequação à legislação vigente.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Gestão Contábil Empresarial">
                    </div>
                    <div class="service-content">
                        <h3>Gestão Contábil Empresarial</h3>
                        <p>Administração completa dos processos contábeis da sua empresa com acompanhamento personalizado.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1474&q=80" alt="Prestação de Contas">
                    </div>
                    <div class="service-content">
                        <h3>Prestação de Contas</h3>
                        <p>Elaboração e organização de relatórios financeiros para prestação de contas a órgãos reguladores e investidores.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Imposto de Renda">
                    </div>
                    <div class="service-content">
                        <h3>Imposto de Renda</h3>
                        <p>Preparação e entrega da declaração de IRPF e IRPJ, com planejamento tributário para otimização de carga fiscal.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Contabilidade Terceiro Setor">
                    </div>
                    <div class="service-content">
                        <h3>Contabilidade Terceiro Setor</h3>
                        <p>Serviços contábeis especializados para ONGs, associações e outras organizações do terceiro setor.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Legalização de Empresas">
                    </div>
                    <div class="service-content">
                        <h3>Legalização de Empresas</h3>
                        <p>Abertura, alteração e regularização de empresas em todos os regimes tributários.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Legalização de Organizações Religiosas">
                    </div>
                    <div class="service-content">
                        <h3>Legalização de Organizações Religiosas</h3>
                        <p>Processo completo de regularização para igrejas e Organizações Religiosas junto aos órgãos competentes.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Assessoria Administrativa">
                    </div>
                    <div class="service-content">
                        <h3>Assessoria Administrativa</h3>
                        <p>Suporte completo para gestão administrativa da sua organização com foco em eficiência e compliance.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="BPO Financeiro">
                    </div>
                    <div class="service-content">
                        <h3>BPO Financeiro</h3>
                        <p>Terceirização completa dos processos financeiros da sua empresa com equipe especializada.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Emissão de Nota Fiscal">
                    </div>
                    <div class="service-content">
                        <h3>Emissão de Nota Fiscal</h3>
                        <p>Serviço completo de emissão e gestão de documentos fiscais eletrônicos.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" alt="MEI">
                    </div>
                    <div class="service-content">
                        <h3>MEI</h3>
                        <p>Abertura, regularização e assessoria completa para Microempreendedores Individuais.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Departamento Pessoal">
                    </div>
                    <div class="service-content">
                        <h3>Departamento Pessoal</h3>
                        <p>Gestão completa da folha de pagamento, benefícios e obrigações trabalhistas da sua empresa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parceiros Section -->
    <section class="client-logos section" id="parceiros">
        <div class="container">
            <h2 class="section-title">Nossos Parceiros</h2>
            <div class="logos-carousel">
                <div class="logos-track">
                    <?php
                    $clientesDir = 'images/clientes/';
                    $allowedExtensions = ['png', 'jpg', 'jpeg', 'svg', 'webp'];
                    $clientesLogos = [];
                    if (is_dir($clientesDir)) {
                        $files = scandir($clientesDir);
                        foreach ($files as $file) {
                            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                            if (in_array($ext, $allowedExtensions)) {
                                $clientesLogos[] = $clientesDir . $file;
                            }
                        }
                    }
                    if (!empty($clientesLogos)) {
                        foreach ($clientesLogos as $index => $logo) {
                            $altText = 'Logo Cliente ' . ($index + 1);
                            echo '<div class="logo-item">
                                    <img src="' . $logo . '" alt="' . $altText . '">
                                  </div>';
                        }
                        foreach ($clientesLogos as $index => $logo) {
                            $altText = 'Logo Cliente ' . ($index + 1);
                            echo '<div class="logo-item">
                                    <img src="' . $logo . '" alt="' . $altText . '">
                                  </div>';
                        }
                    } else {
                        echo '<p class="no-logos">Estamos Ajustando nosso Sistema para Divulgação de nossos Clientes</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Separador Section -->
    <div class="w-full my-10">
        <div class="mx-auto w-1/2 h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent"></div>
    </div>
    
    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Fale com nossa equipe</h3>
                    <p>Tem dúvidas sobre nossos serviços ou precisa de um orçamento personalizado? Entre em contato conosco através dos canais abaixo ou preencha o formulário.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Rua Lopo Saraiva, 179 bloco 2 sala 320 - Rio de Janeiro/RJ</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span>(21) 99308-1798 / (21) 3439-5493</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>contato@m3solucoeseservicos.com.br</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span>Segunda a Sexta: 08h às 18h</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <?php if(!empty($facebook)): ?>
                            <a href="<?= htmlspecialchars($facebook, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($instagram)): ?>
                            <a href="<?= htmlspecialchars($instagram, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($linkdin)): ?>
                            <a href="<?= htmlspecialchars($linkdin, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="input-nome" name="nome" placeholder="Seu Nome" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="input-telefone" name="email" placeholder="Seu E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefone" id="phoneInput" placeholder="Seu Telefone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="assunto" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
                    </div>
                    <input type="hidden" id="recaptchaResponse" name="recaptcha_response">
                    <button type="submit" class="btn">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="images/logo/logo.png" alt="M3 Soluções" />
                    </div>
                    <p>A M3 Soluções e Serviços é especializada em contabilidade empresarial, consultoria fiscal e gestão financeira integrada, ajudando empresas a alcançar seus objetivos com segurança jurídica e eficiência tributária.</p>
                    <div class="social-links">
                        <?php if(!empty($facebook)): ?>
                            <a href="<?= htmlspecialchars($facebook, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($instagram)): ?>
                            <a href="<?= htmlspecialchars($instagram, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($linkdin)): ?>
                            <a href="<?= htmlspecialchars($linkdin, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="#home">Início</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#parceiros">Parceiro</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Nossos Serviços</h3>
                    <ul>
                        <li><a href="#">Contabilidade Fiscal</a></li>
                        <li><a href="#">Contabilidade Gerencial</a></li>
                        <li><a href="#">Departamento Pessoal</a></li>
                        <li><a href="#">Auditoria Contábil</a></li>
                        <li><a href="#">Consultoria Tributária</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contato</h3>
                    <ul class="contact-list">
                        <li class="contact-item">
                            <div class="contact-text">
                                <span class="contact-address">
                                    <span class="address-line">Rua Lopo Saraiva, 179 bloco 2 sala 320</span>
                                    <span class="address-line">Rio de Janeiro/RJ</span>
                                </span>
                            </div>
                        </li>
                        <li class="contact-item">
                            <div class="contact-text">(21) 99308-1798 / (21) 3439-5493</div>
                        </li>
                        <li class="contact-item">
                            <div class="contact-text">Seg-Sex: 08h às 18h</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 M3 Soluções e Serviços. Todos os direitos reservados.</p>
                <div class="dev-credits">
                    <p>Desenvolvido por <a href="https://ethestrategias.com.br" target="_blank">ETH Estratégias</a> e <a href="https://kdkhost.com.br" target="_blank">KDKHost Soluções</a></p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- WhatsApp Button -->
    <a href="https://wa.me/5521993081798" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    <!-- Phone Box -->
    <div class="phone-box">
        <div class="phone-icon">
            <i class="fas fa-phone-alt"></i>
        </div>
        <div class="phone-number">
            <a href="tel:552134395493" style="text-decoration:none; color:dark;">
                (21) 3439-5493
            </a>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <a href="#home" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Configuração global do SweetAlert2
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });

        // Phone Number Formatting
        const phoneInput = document.getElementById('phoneInput');
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, ''); // Remove all non-digits
            if (value.length > 11) value = value.slice(0, 11); // Limit to 11 digits (Brazilian max)

            if (value.length <= 10) {
                // Fixed line format: (XX) XXXX-XXXX
                value = value.replace(/^(\d{2})(\d{4})(\d{0,4})$/, '($1) $2-$3');
            } else {
                // Mobile format: (XX) 9XXXX-XXXX
                value = value.replace(/^(\d{2})(\d{1})(\d{4})(\d{0,4})$/, '($1) $2$3-$4');
            }
            e.target.value = value;
        });

        // reCAPTCHA v3 e envio do formulário
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const form = this;
                    grecaptcha.ready(function() {
                        grecaptcha.execute('<?= $chave; ?>', {action: 'submit'}).then(function(token) {
                            document.getElementById('recaptchaResponse').value = token;
                            const formData = new FormData(form);
                            const submitButton = form.querySelector('button[type="submit"]');
                            submitButton.disabled = true;
                            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...';
                            fetch('send_email.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => {
                                if (!response.ok) throw new Error('Erro na rede');
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    Toast.fire({ icon: 'success', title: data.message });
                                    form.reset();
                                } else {
                                    Toast.fire({ icon: 'error', title: data.message });
                                }
                            })
                            .catch(error => {
                                console.error('Erro:', error);
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Ocorreu um erro ao enviar o formulário. Por favor, tente novamente.'
                                });
                            })
                            .finally(() => {
                                submitButton.disabled = false;
                                submitButton.innerHTML = 'Enviar Mensagem';
                            });
                        });
                    });
                });
            }
        });

        // Mobile Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');
        const overlay = document.getElementById('overlay');
        hamburger.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        overlay.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        const mobileLinks = document.querySelectorAll('.mobile-nav-menu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });

        // Sticky Header
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Register Service Worker
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    })
                    .catch(err => {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }

        // PWA Install Prompt
        let deferredPrompt;
        const installButton = document.createElement('button');
        installButton.style.display = 'none';
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            installButton.style.display = 'block';
            installButton.textContent = 'Instalar App';
            installButton.classList.add('btn', 'btn-accent');
            installButton.addEventListener('click', () => {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    } else {
                        console.log('User dismissed the install prompt');
                    }
                    deferredPrompt = null;
                });
            });
            document.querySelector('.hero-buttons').appendChild(installButton);
        });
        window.addEventListener('appinstalled', () => {
            console.log('PWA was installed');
            installButton.style.display = 'none';
        });
    </script>
</body>
</html>
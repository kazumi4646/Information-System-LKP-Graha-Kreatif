<!DOCTYPE html>
<html lang="en" style="height: 100%; background-color: #f3f4f6;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LKP GRAHA KREATIF</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
        }
        
        /* Navigation Styles */
        .navbar {
            background-color: #1976d2;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
        }
        
        .logo {
            color: white;
            font-weight: bold;
            font-size: 24px;
            text-decoration: none;
        }
        
        .nav-links {
            display: none;
            gap: 24px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .mobile-menu-btn {
            display: block;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(55, 65, 81, 0.7), rgba(55, 65, 81, 0.7)), 
                        url('https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            min-height: 600px;
            display: flex;
            align-items: center;
        }
        
        .hero-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .hero-text h1 {
            font-size: 2.5rem;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        
        .hero-text p {
            font-size: 1.25rem;
            margin-bottom: 32px;
            opacity: 0.9;
        }
        
        .hero-buttons {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s;
            border: 2px solid transparent;
        }
        
        .btn-primary {
            background-color: white;
            color: #1976d2;
        }
        
        .btn-primary:hover {
            background-color: #e3f2fd;
        }
        
        .btn-outline {
            border: 2px solid white;
            color: white;
            background-color: transparent;
        }
        
        .btn-outline:hover {
            background-color: white;
            color: #1976d2;
        }
        
        .hero-image {
            text-align: center;
        }
        
        .hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        /* Welcome Section */
        .welcome {
            padding: 80px 0;
            background-color: white;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 48px;
        }
        
        .section-header h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #1565c0;
            margin-bottom: 16px;
        }
        
        .section-header p {
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }
        
        .feature-card {
            background: white;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 16px;
        }
        
        .feature-card p {
            color: #6b7280;
        }
        
        /* Courses Section */
        .courses {
            padding: 80px 0;
            background-color: #f9fafb;
        }
        
        .courses-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }
        
        .course-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .course-card:hover {
            transform: translateY(-4px);
        }
        
        .course-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .course-content {
            padding: 24px;
        }
        
        .course-category {
            display: inline-block;
            background-color: #e3f2fd;
            color: #1565c0;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 12px;
        }
        
        .course-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 12px;
        }
        
        .course-description {
            color: #6b7280;
            margin-bottom: 16px;
        }
        
        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }
        
        .course-price {
            font-weight: bold;
            color: #059669;
        }
        
        .course-duration {
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        .view-all {
            text-align: center;
            margin-top: 48px;
        }
        
        .btn-outline-blue {
            border: 2px solid #1976d2;
            color: #1976d2;
            background-color: transparent;
        }
        
        .btn-outline-blue:hover {
            background-color: #1976d2;
            color: white;
        }
        
        /* Responsive Design */
        @media (min-width: 640px) {
            .hero-buttons {
                flex-direction: row;
            }
        }
        
        @media (min-width: 768px) {
            .nav-links {
                display: flex;
            }
            
            .mobile-menu-btn {
                display: none;
            }
            
            .hero-content {
                grid-template-columns: 1fr 1fr;
            }
            
            .hero-text h1 {
                font-size: 3rem;
            }
            
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .courses-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .features-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .courses-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="/" class="logo">LKP Graha Kreatif</a>
                
                <div class="nav-links">
                    <a href="/">Dashboard</a>
                    <a href="/programs">Programs</a>
                    <a href="/galeri">Gallery</a>
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                </div>
                
                <button class="mobile-menu-btn">☰</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Unlock Your Potential with Professional IT Training</h1>
                    <p>Master programming skills and Microsoft Excel with LKP Graha Kreatif's expert-led courses designed for success in today's digital world.</p>
                    <div class="hero-buttons">
                        <a href="#courses" class="btn btn-primary">Explore Courses</a>
                        <a href="https://wa.me/6281224885762" class="btn btn-outline">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Students learning programming">
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome">
        <div class="container">
            <div class="section-header">
                <h2>Welcome to LKP Graha Kreatif</h2>
                <p>Your gateway to mastering programming and data analysis skills. Join us to enhance your career prospects and become a tech leader.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Comprehensive Curriculum</h3>
                    <p>Our courses cover a wide range of topics, from web development to data analysis, ensuring you gain the skills needed for today's job market.</p>
                </div>
                
                <div class="feature-card">
                    <h3>Expert Instructors</h3>
                    <p>Learn from industry professionals with years of experience who are dedicated to helping you succeed in your career.</p>
                </div>
                
                <div class="feature-card">
                    <h3>Flexible Learning Options</h3>
                    <p>Choose from online or in-person classes that fit your schedule, allowing you to learn at your own pace.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="courses">
        <div class="container">
            <div class="section-header">
                <h2>Our Featured Courses</h2>
                <p>Comprehensive training programs designed to build your skills from the ground up</p>
            </div>
            
            <div class="courses-grid">
                <!-- Course 1: Web Development -->
                <div class="course-card">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Web Development Course" class="course-image">
                    <div class="course-content">
                        <span class="course-category">Programming</span>
                        <h3 class="course-title">Web Development Fundamentals</h3>
                        <p class="course-description">Learn HTML, CSS, JavaScript and PHP to build modern, responsive websites from scratch.</p>
                        <div class="course-meta">
                            <span class="course-price">FREE</span>
                            <span class="course-duration">12 weeks</span>
                        </div>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                
                <!-- Course 2: Excel -->
                <div class="course-card">
                    <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Excel Course" class="course-image">
                    <div class="course-content">
                        <span class="course-category">Microsoft Office</span>
                        <h3 class="course-title">Advanced Excel for Professionals</h3>
                        <p class="course-description">Master complex formulas, pivot tables, macros, and data analysis tools in Microsoft Excel.</p>
                        <div class="course-meta">
                            <span class="course-price">FREE</span>
                            <span class="course-duration">8 weeks</span>
                        </div>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                
                <!-- Course 3: Laravel -->
                <div class="course-card">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laravel Course" class="course-image">
                    <div class="course-content">
                        <span class="course-category">Framework</span>
                        <h3 class="course-title">Laravel Application Development</h3>
                        <p class="course-description">Build robust web applications using Laravel, the popular PHP framework with MVC architecture.</p>
                        <div class="course-meta">
                            <span class="course-price">FREE</span>
                            <span class="course-duration">16 weeks</span>
                        </div>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="view-all">
                <a href="/programs" class="btn btn-outline-blue">View All Courses</a>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Mobile menu functionality (basic implementation)
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            // You can implement mobile menu toggle here
            alert('Mobile menu - implement as needed');
        });
    </script>
</body>
</html>
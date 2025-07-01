<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/build/assets/css-CVUPaf4i.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 

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
  <body class="h-full bg-linear-to-t from-sky-100 to-indigo-200">

      <x-navbar></x-navbar>
      <main>
        {{ $slot }}
      </main>

  </body>
</html>
<!DOCTYPE html>
<html lang="en" style="height: 100%; background-color: #f3f4f6;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LKP GRAHA KREATIF</title>
    <script>
        // Simple Alpine.js-like functionality
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            
            if (mobileMenu.style.display === 'none' || mobileMenu.style.display === '') {
                mobileMenu.style.display = 'block';
                hamburgerIcon.style.display = 'none';
                closeIcon.style.display = 'block';
            } else {
                mobileMenu.style.display = 'none';
                hamburgerIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }
        }
        
        function confirmLogout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>
</head>
<body style="height: 100%; background: linear-gradient(to top, #e0f2fe, #c5cae9);">

    <nav style="background-color: #1976d2; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 0;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 16px;">
            <div style="max-width: 1200px; margin: 0 auto; padding: 16px; display: flex; justify-content: space-between; align-items: center;">
                
                <!-- Logo and Desktop Menu -->
                <div style="display: flex; align-items: center;">
                    <div style="display: flex; align-items: center;">
                        <div style="color: white; font-weight: bold; font-size: 24px;">LKP Graha Kreatif</div>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div style="display: none; margin-left: 40px;">
                        <div style="display: flex; align-items: baseline; gap: 16px;">
                            <!-- Dashboard Link -->
                            <a href="/" style="display: inline-flex; align-items: center; padding: 8px 4px; border-bottom: 2px solid #5c6bc0; color: white; text-decoration: none; font-size: 14px; font-weight: 500; line-height: 1.25; transition: all 0.15s ease-in-out;" 
                               onmouseover="this.style.color='#374151'; this.style.borderBottomColor='#d1d5db';" 
                               onmouseout="this.style.color='white'; this.style.borderBottomColor='#5c6bc0';">
                                Dashboard
                            </a>
                            
                            <!-- Authenticated User Links -->
                            <a href="/myprograms" style="display: inline-flex; align-items: center; padding: 8px 4px; border-bottom: 2px solid transparent; color: white; text-decoration: none; font-size: 14px; font-weight: 500; line-height: 1.25; transition: all 0.15s ease-in-out;" 
                               onmouseover="this.style.color='#374151'; this.style.borderBottomColor='#d1d5db';" 
                               onmouseout="this.style.color='white'; this.style.borderBottomColor='transparent';">
                                Lihat Program Yang Diikuti
                            </a>
                            
                            <a href="/profile" style="display: inline-flex; align-items: center; padding: 8px 4px; border-bottom: 2px solid transparent; color: white; text-decoration: none; font-size: 14px; font-weight: 500; line-height: 1.25; transition: all 0.15s ease-in-out;" 
                               onmouseover="this.style.color='#374151'; this.style.borderBottomColor='#d1d5db';" 
                               onmouseout="this.style.color='white'; this.style.borderBottomColor='transparent';">
                                Kelola Biodata Peserta
                            </a>
                            
                            <!-- Logout Form -->
                            <form method="POST" action="/logout" id="logout-form" style="display: inline;">
                                <a href="#" onclick="event.preventDefault(); confirmLogout();" style="display: inline-flex; align-items: center; padding: 8px 4px; border-bottom: 2px solid transparent; color: white; text-decoration: none; font-size: 14px; font-weight: 500; line-height: 1.25; transition: all 0.15s ease-in-out;" 
                                   onmouseover="this.style.color='#374151'; this.style.borderBottomColor='#d1d5db';" 
                                   onmouseout="this.style.color='white'; this.style.borderBottomColor='transparent';">
                                    Log Out
                                </a>
                            </form>
                            
                            <!-- Guest User Links -->
                            <a href="/register" style="display: inline-flex; align-items: center; padding: 8px 4px; border-bottom: 2px solid transparent; color: white; text-decoration: none; font-size: 14px; font-weight: 500; line-height: 1.25; transition: all 0.15s ease-in-out;" 
                               onmouseover="this.style.color='#374151'; this.style.borderBottomColor='#d1d5db';" 
                               onmouseout="this.style.color='white'; this.style.borderBottomColor='transparent';">
                                Registrasi Pendaftaran
                            </a>
                            
                            <a href="/galeri" style="display: inline-flex; align-items: center; padding: 8px 4px; border-bottom: 2px solid transparent; color: white; text-decoration: none; font-size: 14px; font-weight: 500; line-height: 1.25; transition: all 0.15s ease-in-out;" 
                               onmouseover="this.style.color='#374151'; this.style.borderBottomColor='#d1d5db';" 
                               onmouseout="this.style.color='white'; this.style.borderBottomColor='transparent';">
                                Galeri
                            </a>
                            
                            <a href="/programs" style="display: inline-flex; align-items: center; padding: 8px 4px; border-bottom: 2px solid transparent; color: white; text-decoration: none; font-size: 14px; font-weight: 500; line-height: 1.25; transition: all 0.15s ease-in-out;" 
                               onmouseover="this.style.color='#374151'; this.style.borderBottomColor='#d1d5db';" 
                               onmouseout="this.style.color='white'; this.style.borderBottomColor='transparent';">
                                Daftar Program
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Login Button (Desktop) -->
                <div style="display: none;">
                    <div style="margin-left: 16px; display: flex; align-items: center;">
                        <a href="/login" style="background-color: white; color: #1976d2; padding: 8px 16px; border-radius: 8px; font-weight: 500; text-decoration: none; transition: background-color 0.15s ease-in-out;" 
                           onmouseover="this.style.backgroundColor='#e3f2fd';" 
                           onmouseout="this.style.backgroundColor='white';">
                            Log in
                        </a>
                    </div>
                </div>
                
                <!-- Mobile Menu Button -->
                <div style="margin-right: -8px; display: flex;">
                    <button type="button" onclick="toggleMobileMenu()" 
                            style="position: relative; display: inline-flex; align-items: center; justify-content: center; border-radius: 6px; background-color: #374151; padding: 8px; color: #9ca3af; border: none; cursor: pointer; transition: all 0.15s ease-in-out;" 
                            onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                            onmouseout="this.style.backgroundColor='#374151'; this.style.color='#9ca3af';">
                        
                        <!-- Hamburger Icon -->
                        <svg id="hamburger-icon" style="display: block; width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        
                        <!-- Close Icon -->
                        <svg id="close-icon" style="display: none; width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" style="display: none;">
            <div style="gap: 4px; padding: 8px 8px 12px 8px;">
                <a href="/" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; background-color: #111827; color: white; text-decoration: none; margin-bottom: 4px;" 
                   onmouseover="this.style.backgroundColor='#4b5563';" 
                   onmouseout="this.style.backgroundColor='#111827';">
                    Dashboard
                </a>
                
                <a href="/profile" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #1f2937; text-decoration: none; margin-bottom: 4px;" 
                   onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#1f2937';">
                    Profile
                </a>
                
                <a href="/galeri" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #1f2937; text-decoration: none; margin-bottom: 4px;" 
                   onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#1f2937';">
                    Galeri
                </a>
                
                <a href="/pendaftaran" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #1f2937; text-decoration: none; margin-bottom: 4px;" 
                   onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#1f2937';">
                    Pendaftaran
                </a>
                
                <a href="/program" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #1f2937; text-decoration: none; margin-bottom: 4px;" 
                   onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#1f2937';">
                    Program
                </a>
                
                <a href="/sertifikasi" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #1f2937; text-decoration: none; margin-bottom: 4px;" 
                   onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#1f2937';">
                    Sertifikasi
                </a>
                
                <a href="/template" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #1f2937; text-decoration: none; margin-bottom: 4px;" 
                   onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#1f2937';">
                    Template
                </a>
            </div>
            
            <!-- Mobile User Section -->
            <div style="border-top: 1px solid #374151; padding-top: 16px; padding-bottom: 12px;">
                <div style="display: flex; align-items: center; padding: 0 20px;">
                    <div style="flex-shrink: 0;">
                        <img style="width: 40px; height: 40px; border-radius: 50%;" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div style="margin-left: 12px;">
                        <div style="font-size: 16px; line-height: 1.25; font-weight: 500; color: white;">Tom Cook</div>
                        <div style="font-size: 14px; font-weight: 500; color: #9ca3af;">tom@example.com</div>
                    </div>
                </div>
                
                <div style="margin-top: 12px; gap: 4px; padding: 0 8px;">
                    <a href="#" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #9ca3af; text-decoration: none;" 
                       onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                       onmouseout="this.style.backgroundColor='transparent'; this.style.color='#9ca3af';">
                        Kelola Data Pribadi
                    </a>
                    
                    <a href="#" style="display: block; border-radius: 6px; padding: 12px; font-size: 16px; font-weight: 500; color: #9ca3af; text-decoration: none;" 
                       onmouseover="this.style.backgroundColor='#4b5563'; this.style.color='white';" 
                       onmouseout="this.style.backgroundColor='transparent'; this.style.color='#9ca3af';">
                        Sign out
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <main style="padding: 20px;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 40px 20px; text-align: center;">
            <h1 style="font-size: 32px; font-weight: bold; color: #1f2937; margin-bottom: 16px;">
                Selamat Datang di LKP Graha Kreatif
            </h1>
            <p style="font-size: 18px; color: #6b7280; max-width: 600px; margin: 0 auto;">
                Lembaga Kursus dan Pelatihan yang menyediakan berbagai program pendidikan dan sertifikasi untuk mengembangkan keterampilan Anda.
            </p>
        </div>
    </main>

    <script>
        // Show desktop menu on larger screens
        function updateMenuVisibility() {
            const desktopMenu = document.querySelector('nav div div div div:nth-child(2)');
            const loginButton = document.querySelector('nav div div div:nth-child(2)');
            const mobileButton = document.querySelector('nav div div div:nth-child(3)');
            
            if (window.innerWidth >= 768) {
                if (desktopMenu) desktopMenu.style.display = 'block';
                if (loginButton) loginButton.style.display = 'block';
                if (mobileButton) mobileButton.style.display = 'none';
                document.getElementById('mobile-menu').style.display = 'none';
            } else {
                if (desktopMenu) desktopMenu.style.display = 'none';
                if (loginButton) loginButton.style.display = 'none';
                if (mobileButton) mobileButton.style.display = 'flex';
            }
        }
        
        window.addEventListener('resize', updateMenuVisibility);
        window.addEventListener('load', updateMenuVisibility);
    </script>

</body>
</html>
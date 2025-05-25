<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoStartup</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-black via-indigo-900 to-black ... text-white">
    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6">
        <div class="text-2xl font-bold">GoStartup</div>
        <div>
            <a href="#" class="text-blue-300 hover:underline mx-4">Home</a>
            <a href="#" class="text-blue-300 hover:underline mx-4">Features</a>
            <a href="#" class="text-blue-300 hover:underline mx-4">Pages</a>
            <a href="#" class="text-blue-300 hover:underline mx-4">Support</a>
            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md mr-2">Sign In</a>
            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md">Sign Up</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="flex flex-col md:flex-row items-center justify-between p-10">
        <div class="md:w-1/2">
            <h1 class="text-4xl font-bold mb-4">Digital Solutions for <span class="text-blue-400">Your Business</span></h1>
            <p class="mb-6">Handcrafted Tailwind CSS template for your next - Startup, Business, Agency or SaaS Website. Comes with refreshing design and everything you need to kickstart your next web project.</p>
            <div class="space-x-4">
                <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-500">Get Started</a>
                <a href="#" class="text-blue-300 hover:underline">How it Works</a>
            </div>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
            <div class="relative w-64 h-64">
                <img src="img/lkp1.png" alt="Team working" class="rounded-lg absolute inset-0 w-full h-full object-cover" />
                <img src="img/lkp1.png"h alt="Business meeting" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-70" />
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-6">
        <p>&copy; 2023 GoStartup. All rights reserved.</p>
    </footer>
    
</body>

</html>


<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LKP Graha Raya - Programming & Excel Training Institute</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="antialiased font-sans bg-white">

    <section id="courses" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Our Featured Courses</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive training programs designed to build your skills from the ground up</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden">
                        <img src="/img/programming-course.jpg" alt="Programming Course" class="w-full h-full object-cover" onerror="this.src='/api/placeholder/400/200'; this.alt='Programming course placeholder'">
                    </div>
                    <div class="p-6">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Programming</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2">Web Development Fundamentals</h3>
                        <p class="text-gray-600 mt-2">Learn HTML, CSS, JavaScript and PHP to build modern, responsive websites from scratch.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-blue-700 font-bold">Rp 2.500.000</span>
                            <span class="text-gray-500 text-sm">12 weeks</span>
                        </div>
                        <a href="#" class="mt-4 block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition-colors">View Details</a>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden">
                        <img src="/img/excel-course.jpg" alt="Excel Course" class="w-full h-full object-cover" onerror="this.src='/api/placeholder/400/200'; this.alt='Excel course placeholder'">
                    </div>
                    <div class="p-6">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Microsoft Office</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2">Advanced Excel for Professionals</h3>
                        <p class="text-gray-600 mt-2">Master complex formulas, pivot tables, macros, and data analysis tools in Microsoft Excel.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-blue-700 font-bold">Rp 1.800.000</span>
                            <span class="text-gray-500 text-sm">8 weeks</span>
                        </div>
                        <a href="#" class="mt-4 block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition-colors">View Details</a>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden">
                        <img src="/img/laravel-course.jpg" alt="Laravel Course" class="w-full h-full object-cover" onerror="this.src='/api/placeholder/400/200'; this.alt='Laravel course placeholder'">
                    </div>
                    <div class="p-6">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Framework</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2">Laravel Application Development</h3>
                        <p class="text-gray-600 mt-2">Build robust web applications using Laravel, the popular PHP framework with MVC architecture.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-blue-700 font-bold">Rp 3.200.000</span>
                            <span class="text-gray-500 text-sm">16 weeks</span>
                        </div>
                        <a href="#" class="mt-4 block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition-colors">View Details</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="#" class="inline-block border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-6 py-3 rounded-lg font-medium transition-colors">View All Courses</a>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="/img/about-us.jpg" alt="About LKP Graha Raya" class="rounded-lg shadow-lg" onerror="this.src='/api/placeholder/500/350'; this.alt='About us placeholder image'">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold text-blue-800 mb-4">About LKP Graha Raya</h2>
                    <p class="text-gray-600 mb-6">Founded in 2015, LKP Graha Raya is dedicated to providing high-quality technical education in programming and data analysis. Our mission is to bridge the skills gap in the technology sector by offering practical, industry-relevant training.</p>
                    <p class="text-gray-600 mb-6">With over 5,000 graduates now working in leading tech companies across Indonesia, our courses have been crafted by industry experts who bring real-world experience to the classroom.</p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-gray-700">Expert Instructors</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-gray-700">Hands-on Projects</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-gray-700">Small Class Sizes</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-gray-700">Career Support</span>
                        </div>
                    </div>
                    <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-blue-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Why Choose LKP Graha Raya?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-blue-800 bg-opacity-50 p-8 rounded-lg">
                    <div class="bg-white text-blue-700 p-4 rounded-full inline-block mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Industry-Relevant Curriculum</h3>
                    <p>Our courses are constantly updated to reflect the latest industry trends and technologies.</p>
                </div>
                <div class="bg-blue-800 bg-opacity-50 p-8 rounded-lg">
                    <div class="bg-white text-blue-700 p-4 rounded-full inline-block mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Job Placement Assistance</h3>
                    <p>Our dedicated career services team helps students find employment opportunities after graduation.</p>
                </div>
                <div class="bg-blue-800 bg-opacity-50 p-8 rounded-lg">
                    <div class="bg-white text-blue-700 p-4 rounded-full inline-block mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Certified Training</h3>
                    <p>Receive nationally recognized certifications that enhance your credibility in the job market.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">What Our Students Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Hear from our graduates who have successfully transformed their careers</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="/img/testimonial-1.jpg" alt="Student testimonial" class="w-12 h-12 rounded-full mr-4" onerror="this.src='/api/placeholder/100/100'; this.alt='Student testimonial placeholder'">
                        <div>
                            <h4 class="font-bold text-gray-900">Budi Santoso</h4>
                            <p class="text-gray-600 text-sm">Web Developer at TechCorp</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The Laravel course at LKP Graha Raya completely changed my career trajectory. The hands-on approach and supportive instructors helped me master complex concepts quickly."</p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="/img/testimonial-2.jpg" alt="Student testimonial" class="w-12 h-12 rounded-full mr-4" onerror="this.src='/api/placeholder/100/100'; this.alt='Student testimonial placeholder'">
                        <div>
                            <h4 class="font-bold text-gray-900">Dewi Lestari</h4>
                            <p class="text-gray-600 text-sm">Data Analyst at FinanceGroup</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The Excel advanced course was exactly what I needed to move into data analysis. The skills I learned are used daily in my current role, and the certification helped me stand out to employers."</p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <img src="/img/testimonial-3.jpg" alt="Student testimonial" class="w-12 h-12 rounded-full mr-4" onerror="this.src='/api/placeholder/100/100'; this.alt='Student testimonial placeholder'">
                            <div>
                                <h4 class="font-bold text-gray-900">Ahmad Faisal</h4>
                                <p class="text-gray-600 text-sm">Full Stack Developer at StartupX</p>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"I started with zero coding knowledge and now I'm working as a full stack developer. The curriculum at LKP Graha Raya is practical and relevant to industry needs."</p>
                        <div class="mt-4 flex text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="contact" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row md:space-x-8">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <h2 class="text-3xl font-bold text-blue-800 mb-4">Get in Touch</h2>
                        <p class="text-gray-600 mb-6">Have questions about our courses or want to schedule a visit? Reach out to us using the form or contact information below.</p>
                        
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <form>
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                                    <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                                    <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                                    <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                    <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                </div>
                                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="bg-gray-50 p-6 rounded-lg mb-6">
                            <h3 class="text-xl font-bold text-blue-800 mb-4">Contact Information</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Address</h4>
                                        <p class="text-gray-600">Jl. Graha Raya No. 123, Serpong, Tangerang Selatan, Banten 15310</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Phone</h4>
                                        <p class="text-gray-600">+62 21 5566 7788</p>
                                        <p class="text-gray-600">+62 812 3456 7890</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Email</h4>
                                        <p class="text-gray-600">info@lkpgraharaya.ac.id</p>
                                        <p class="text-gray-600">admission@lkpgraharaya.ac.id</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Office Hours</h4>
                                        <p class="text-gray-600">Monday - Friday: 8:00 AM - 6:00 PM</p>
                                        <p class="text-gray-600">Saturday: 9:00 AM - 3:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-200 rounded-lg h-64">
                            <img src="/img/map.jpg" alt="Office location map" class="w-full h-full object-cover rounded-lg" onerror="this.src='/api/placeholder/600/300'; this.alt='Location map placeholder'">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="py-12 bg-blue-700 text-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold mb-4">Ready to Start Your Journey?</h2>
                    <p class="text-xl max-w-2xl mx-auto">Join thousands of successful graduates who have transformed their careers with our expert-led courses.</p>
                </div>
                <div class="flex justify-center">
                    <a href="#courses" class="bg-white text-blue-700 hover:bg-blue-100 px-6 py-3 rounded-lg font-medium mr-4 transition-colors">Explore Courses</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="border-2 border-white text-white hover:bg-white hover:text-blue-700 px-6 py-3 rounded-lg font-medium transition-colors">Register Now</a>
                    @endif
                </div>
            </div>
        </section>
    
        <footer class="bg-gray-900 text-white">
            <div class="container mx-auto px-4 pt-16 pb-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">LKP Graha Raya</h3>
                        <p class="text-gray-400 mb-4">Unlocking potential through expert-led technical education since 2015.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">YouTube</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.418-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                            <li><a href="#courses" class="text-gray-400 hover:text-white">Courses</a></li>
                            <li><a href="#about" class="text-gray-400 hover:text-white">About Us</a></li>
                            <li><a href="#contact" class="text-gray-400 hover:text-white">Contact</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Courses</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Web Development</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Microsoft Excel</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Laravel Framework</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">PHP Programming</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Database Management</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">UI/UX Design</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                        <p class="text-gray-400 mb-4">Subscribe to our newsletter for updates on new courses and events.</p>
                        <form class="space-y-2">
                            <div>
                                <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 mb-4 md:mb-0">&copy; 2025 LKP Graha Raya. All rights reserved.</p>
                        <div class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                            <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
                            <a href="#" class="text-gray-400 hover:text-white">Sitemap</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
        <!-- Fixed WhatsApp Button -->
        <div class="fixed bottom-6 right-6 z-50">
            <a href="https://wa.me/6281234567890" class="flex items-center justify-center bg-green-500 hover:bg-green-600 text-white rounded-full w-14 h-14 shadow-lg transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
        </a>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
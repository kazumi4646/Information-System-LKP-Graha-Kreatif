<x-layout>
    <section class="text-white bg-cover bg-center" style="background-image: url('/img/lkp1.png');">
        <div class="bg-gray-700/70 w-full h-full">
            <div class="container mx-auto px-4 py-20 md:py-32 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 ml-5">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Unlock Your Potential with Professional IT Training</h1>
                    <p class="text-xl mb-8">Master programming skills and Microsoft Excel with LKP Graha Raya's expert-led courses designed for success in today's digital world.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#courses" class="bg-white text-blue-700 hover:bg-blue-100 px-6 py-3 rounded-lg font-medium text-center transition-colors">Explore Courses</a>
                        <a href="https://wa.me/6281224885762" class="border-2 border-white text-white hover:bg-white hover:text-blue-700 px-6 py-3 rounded-lg font-medium text-center transition-colors">Contact Us</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="/img/profile/4.jpg" alt="Students learning programming" class="rounded-lg shadow-xl w-96 h-auto" onerror="this.src='/api/placeholder/600/400'; this.alt='Programming training placeholder image'">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Welcome to LKP Graha Raya</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Your gateway to mastering programming and data analysis skills. Join us to enhance your career prospects and become a tech leader.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Comprehensive Curriculum</h3>
                    <p class="text-gray-600">Our courses cover a wide range of topics, from web development to data analysis, ensuring you gain the skills needed for today's job market.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Instructors</h3>
                    <p class="text-gray-600">Learn from industry professionals with years of experience who are dedicated to helping you succeed in your career.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Flexible Learning Options</h3>
                    <p class="text-gray-600">Choose from online or in-person classes that fit your schedule, allowing you to learn at your own pace.</p>
                </div>
            </div>
        </div>

        <section id="courses" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-blue-800 mb-4">Our Featured Courses</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Comprehensive training programs designed to build your skills from the ground up
                    </p>
                </div>
        
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <x-course-card 
                        image="/img/profile/1.jpg"
                        alt="Programming Course"
                        category="Programming"
                        title="Web Development Fundamentals"
                        description="Learn HTML, CSS, JavaScript and PHP to build modern, responsive websites from scratch."
                        price="FREE"
                        duration="12 weeks"
                        link="#"
                    />
        
                    <x-course-card 
                        image="/img/profile/2.jpg"
                        alt="Excel Course"
                        category="Microsoft Office"
                        title="Advanced Excel for Professionals"
                        description="Master complex formulas, pivot tables, macros, and data analysis tools in Microsoft Excel."
                        price="FREE"
                        duration="8 weeks"
                        link="#"
                    />
        
                    <x-course-card 
                        image="/img/profile/3.jpg"
                        alt="Laravel Course"
                        category="Framework"
                        title="Laravel Application Development"
                        description="Build robust web applications using Laravel, the popular PHP framework with MVC architecture."
                        price="FREE"
                        duration="16 weeks"
                        link="#"
                    />
                </div>
        
                <div class="text-center mt-12">
                    <a href="/programs" class="inline-block border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-6 py-3 rounded-lg font-medium transition-colors">View All Courses</a>
                </div>
            </div>
        </section>
        
</x-layout>
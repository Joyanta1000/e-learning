<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/mini_carousel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @endif
</head>

<body>
    <header class="container py-2 m-auto">
        @if (Route::has('login'))
            <nav class="flex items-center justify-between ">

                <div class="relative">
                    <img src="https://t3.ftcdn.net/jpg/03/92/80/46/360_F_392804645_tUQxo5EgPXvFGxn5OQguX1BiYlI6lCOV.jpg"
                        class="h-[50px]" alt="elearning">
                </div>
                <div>

                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </nav>
        @endif
    </header>
    <section class="container py-2 m-auto">

        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[300px] overflow-hidden rounded-lg md:h-[500px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://codemanbd.com/wp-content/uploads/2024/01/best-elearning-platform.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://www.accuratereviews.com/wp-content/uploads/2022/07/What-is-eLearning.jpeg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwSrgdwIsnE4r4BuhU_-4R3AorZzTf6Op9Kg&s"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQebS4oKV7NGS5icJycS33Gg5gplpz5PSU-sQ&s"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://www.talentlms.com/blog/wp-content/uploads/2022/12/eLearning-Trends_4March2025_Big.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </section>

    <section class="container py-2 m-auto">
        <div class="relative overflow-hidden">
            <!-- Left Arrow -->
            <button id="left-arrow" onclick="scrollToLeft()"
                class="absolute left-0 top-1/2 -translate-y-1/2 p-2 bg-[#ababb4] text-white rounded-full shadow-lg z-10 hidden">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Scroll container -->
            <div id="category-scroll" onscroll="checkScroll()"
                class="flex gap-4 overflow-x-auto scroll-smooth py-4 hide-scrollbar">
                @foreach (range(1, 12) as $i)
                    <div class="min-w-[160px] px-4 py-3 rounded-xl  text-center flex-shrink-0 shadow">
                        <h4 class=" text-md font-medium">Programming</h4>
                        <p class=" text-sm mt-1">{{ $i }} Courses</p>
                    </div>
                @endforeach
            </div>

            <!-- Right Arrow -->
            <button id="right-arrow" onclick="scrollToRight()"
                class="absolute right-0 top-1/2 -translate-y-1/2 p-2 bg-[#ababb4] text-white rounded-full shadow-lg z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>

    <section class="container py-2 m-auto">
        <div class="text-center mb-4 w-full">
            <div class="text-2xl font-semibold py-4">
                What's in the online batch throughout the year?
            </div>
            <div class="text-[20px]">
                May the advancement of education continue from any part of the country under the care of the best
                teachers.
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-4">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow border p-4">
                <div class="relative rounded overflow-hidden">
                    <img src="https://streamline-learning.com/wp-content/uploads/2024/10/online-courses.png"
                        alt="Thumbnail 1" class="w-full rounded">
                    <button onclick="openModal('K5KVEU3aaeQ')"
                        class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white bg-opacity-80 p-4 rounded-full">
                            <svg class="w-10 h-10 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </button>
                </div>
                <h2 class="mt-4 text-lg font-semibold text-gray-800">সারা বছরে কী কী হচ্ছে অনলাইন ব্যাচে?</h2>
                <p class="mt-2 text-gray-600 text-sm">
                    এক্সপার্ট টিচারদের লাইভ ক্লাস, গুচ্ছনো মাস্টারবুক, ও মডেল টেস্ট দিয়ে ঘরে বসেই ৬ষ্ঠ–১০ম শ্রেণির
                    পড়াশোনার কমপ্লিট প্রিপারেশন!
                </p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow border p-4">
                <div class="relative rounded overflow-hidden">
                    <img src="https://www.globalcareercounsellor.com/blog/wp-content/uploads/2018/05/Online-Career-Counselling-course.jpg"
                        alt="Thumbnail 2" class="w-full rounded">
                    <button onclick="openModal('g4Ffdh41vRQ')"
                        class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white bg-opacity-80 p-4 rounded-full">
                            <svg class="w-10 h-10 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </button>
                </div>
                <h2 class="mt-4 text-lg font-semibold text-gray-800">সারা বছরের সেরা রেজাল্ট</h2>
                <p class="mt-2 text-gray-600 text-sm">
                    পুরো বছরের পারফেক্ট পড়াশোনার প্ল্যানে সারা বছর ৬ষ্ঠ–১০ম শ্রেণির সব পরীক্ষার সেরা প্রস্তুতি ঘরে বসেই।
                </p>
            </div>
        </div>

        <!-- Modal -->
        <div id="video-modal"
            class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
            <div class="relative w-full max-w-3xl aspect-video px-4">
                <button onclick="closeModal()" class="absolute top-2 right-5 hover:bg-red-400 text-white text-2xl rounded-full px-2  shadow-xl">&times;</button>
                <iframe class="w-full h-full rounded" src="" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <footer class="container pt-10 m-auto ">

        <div class="flex justify-between">
            <div class="py-5">
                <img src="https://t3.ftcdn.net/jpg/03/92/80/46/360_F_392804645_tUQxo5EgPXvFGxn5OQguX1BiYlI6lCOV.jpg"
                    class="h-[100px]" alt="elearning">
            </div>
            <div>
                <h2 class="text-xl font-semibold">Company</h2>
                <div>Join us as a teacher</div>
                <div>Free Download</div>
                <div>Privacy & Policy</div>
                <div>Refund Policy</div>
                <div>Terms & Conditions</div>
                <div>Faq</div>
            </div>
            <div>
                <h2 class="text-xl font-semibold">Contact Us</h2>
                <div>Phone: 01627962866</div>
                <div>Email: 2x5Mh@example.com</div>
                <div>WhatsApp: 01627962866</div>
                <div class="flex gap-4 py-2">
                    <a href="#" class="bg-[#0f172a] p-3 rounded-lg text-white hover:bg-gray-700">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-[#0f172a] p-3 rounded-lg text-white hover:bg-gray-700">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-[#0f172a] p-3 rounded-lg text-white hover:bg-gray-700">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="bg-[#0f172a] p-3 rounded-lg text-white hover:bg-gray-700">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="bg-[#0f172a] p-3 rounded-lg text-white hover:bg-gray-700">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center pt-5 pb-2">
            <p>Copyright &copy; 2023 E-Learning. All rights reserved.</p>
        </div>
    </footer>
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <script>
        const scrollContainer = document.getElementById('category-scroll');
        const leftArrow = document.getElementById('left-arrow');
        const rightArrow = document.getElementById('right-arrow');

        function checkScroll() {
            const scrollPosition = scrollContainer.scrollLeft;
            const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;

            // Toggle left arrow
            if (scrollPosition > 0) {
                leftArrow.classList.remove('hidden');
            } else {
                leftArrow.classList.add('hidden');
            }

            // Toggle right arrow
            if (scrollPosition >= maxScrollLeft - 10) {
                rightArrow.classList.add('hidden');
            } else {
                rightArrow.classList.remove('hidden');
            }
        }

        function scrollToLeft() {
            scrollContainer.scrollBy({
                left: -200,
                behavior: 'smooth'
            });
        }

        function scrollToRight() {
            scrollContainer.scrollBy({
                left: 200,
                behavior: 'smooth'
            });
        }

        scrollContainer.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);




        function openModal(videoId) {
            const modal = document.getElementById('video-modal');
            const iframe = modal.querySelector('iframe');
            iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            modal.classList.remove('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('video-modal');
            const iframe = modal.querySelector('iframe');
            iframe.src = '';
            modal.classList.add('hidden');
        }
    </script>



</body>

</html>

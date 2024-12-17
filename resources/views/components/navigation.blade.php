<nav class="fixed top-0 w-full z-50 shadow-md">
    <div class="flex">
        <!-- Левая часть: Логотип с белым фоном -->
        <div class="bg-white flex items-center justify-center px-4 md:w-1/5">
            <a href="{{ route('home') }}"
               class="text-blue-500 font-bold text-3xl hover:text-blue-600 transition duration-300">
                TBD
            </a>
        </div>

        <!-- Правая часть: Оранжевый фон -->
        <div class="flex-1 bg-orange-500 flex justify-between items-center px-4 md:px-6 py-4">
            <!-- Навигационные ссылки -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="text-white hover:text-gray-300 font-semibold transition-colors">
                    Главная
                </a>
                <a href="{{ route('tours.index') }}"
                   class="text-white hover:text-gray-300 font-semibold transition-colors">
                    Туры
                </a>
                <a href="{{ route('about') }}" class="text-white hover:text-gray-300 font-semibold transition-colors">
                    О нас
                </a>
                <a href="{{ route('contact') }}"
                   class="text-white hover:text-gray-300 font-semibold transition-colors">
                    Контакты
                </a>
            </div>

            <!-- Язык, Валюта и Кнопка Войти -->
            <div class="flex items-center space-x-4">
                <!-- Кнопка выбора языка -->
                <div class="relative">
                    <select class="custom-select border-2 border-black text-blue-500 font-semibold rounded-lg py-2 px-3 focus:outline-none">
                        <option value="ru">RU</option>
                        <option value="kz">KZ</option>
                        <option value="en">EN</option>
                    </select>
                </div>

                <!-- Кнопка выбора валюты -->
                <div class="relative">
                    <select class="custom-select border-2 border-black text-blue-500 font-semibold rounded-lg py-2 px-3 focus:outline-none">
                        <option value="kzt">KZT</option>
                        <option value="usd">USD</option>
                        <option value="eur">EUR</option>
                    </select>
                </div>

                <!-- Кнопка Войти -->
                <a href="{{ route('login') }}"
                   class="bg-white text-blue-500 font-semibold border-2 border-black py-2 px-4 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 shadow-md">
                    Войти
                </a>
            </div>

            <!-- Мобильное меню -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Мобильное выпадающее меню -->
    <div id="mobile-menu" class="hidden md:hidden bg-orange-500 px-6 py-4">
        <a href="{{ route('home') }}" class="block text-white py-2 hover:bg-orange-600 rounded">Главная</a>
        <a href="{{ route('tours.index') }}" class="block text-white py-2 hover:bg-orange-600 rounded">Туры</a>
        <a href="{{ route('about') }}" class="block text-white py-2 hover:bg-orange-600 rounded">О нас</a>
        <a href="{{ route('contact') }}" class="block text-white py-2 hover:bg-orange-600 rounded">Контакты</a>
    </div>
</nav>

<script>
    // Скрипт для мобильного меню
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>


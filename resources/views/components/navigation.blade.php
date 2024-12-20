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
                <a href="{{ route('about') }}" class="text-white hover:text-gray-300 font-semibold transition-colors">
                    О нас
                </a>
                <a href="{{ route('contact') }}" class="text-white hover:text-gray-300 font-semibold transition-colors">
                    Контакты
                </a>
            </div>

            <!-- Выбор языка и кнопка Войти -->
            <div class="flex items-center space-x-4">
                <!-- Кнопка выбора языка -->
                <div class="relative">
                    <select class="custom-select border-2 border-black text-blue-500 font-semibold rounded-lg py-2 px-3 focus:outline-none"
                            onchange="location = this.value;">
                        <option value="{{ route('set.language', ['locale' => 'ru']) }}" {{ app()->getLocale() === 'ru' ? 'selected' : '' }}>
                            RU
                        </option>
                        <option value="{{ route('set.language', ['locale' => 'kz']) }}" {{ app()->getLocale() === 'kz' ? 'selected' : '' }}>
                            KZ
                        </option>
                        <option value="{{ route('set.language', ['locale' => 'en']) }}" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>
                            EN
                        </option>
                    </select>
                </div>

                <!-- Кнопка Войти -->
                <a href="{{ route('login') }}"
                   class="bg-white text-blue-500 font-semibold border-2 border-black py-2 px-4 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 shadow-md">
                    Войти
                </a>
            </div>
        </div>
    </div>
</nav>

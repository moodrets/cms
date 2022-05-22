<header class="site-header py-4 shadow-md position-sticky top-0 bg-white dark:bg-main dark:shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <div @click="showOffcanvas()" class="cursor-pointer svg-icon w-8 h-8 lg:hidden">
                <svg><use xlink:href="#menu"></use></svg>
            </div>
            <div class="flex items-center">
                <a href="/" class="flex-none block site-logo italic text-brand text-34px leading-34px lg:mr-8">
                    <strong class="font-black">Union</strong>
                    <span>Capital</span>
                </a>
                <nav class="site-top-nav flex-none hidden lg:block">
                    <ul class="flex text-16px dark:text-white">
                        <li class="mr-8"><a href="#" class="hover:underline">Проект</a></li>
                        <li class="mr-8"><a href="#" class="hover:underline">Новости</a></li>
                        <li class="mr-8"><a href="#" class="hover:underline">Помощь</a></li>
                        <li class="mr-8"><a href="#" class="hover:underline">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <button type="button" class="theme-switcher flex-none" @click="toggleTheme()">
                <x-svg-icon name="theme-dark" iconClass="svg-icon--theme-dark"></x-svg-icon>
                <x-svg-icon name="theme-light" iconClass="svg-icon--theme-light"></x-svg-icon>
            </button>
        </div>
    </div>
</header>

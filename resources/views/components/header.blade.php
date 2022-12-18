<header class="site-header sticky w-full top-0 z-50 py-7 bg-brand text-white">
    <div class="site-container flex items-center justify-between">
        <div class="site-logo">
            <a href="/" class="block">
                <img src="/public/files/logo.svg" alt="">
            </a>
        </div>
        <nav class="ml-auto site-header__menu hidden lg:flex">
            <ul>
            @foreach ($items as $item)
                <li>
                    <a href="{{$item->link}}" class="{{ activeMenu(substr($item->link, 1)) }}">{{$item->title}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
        <a @click.prevent="showModal('request-modal')" href="tel:88129219090" class="site-button site-button--round-light min-w-[178px] ml-4 hidden lg:inline-flex">Позвонить</a>
        <div @click="showOffcanvas()" class="svg-icon svg-icon--mobile-menu text-neutral lg:hidden">
            <svg><use xlink:href="#menu"></use></svg>
        </div>
    </div>
</header>
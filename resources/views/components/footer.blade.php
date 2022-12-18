<footer class="site-footer py-12 bg-brand text-white">
    <div class="site-container">
        <div class="lg:flex lg:justify-between">
            <div class="lg:w-1/2 xl:w-1/4">
                <div class="site-logo">
                    <a href="/" class="block">
                        <img src="/public/files/logo.svg" alt="">
                    </a>
                </div>
                <div class="leading-relaxed text-[18px] mt-14 text-neutral">
                    <strong>Адрес</strong>: Наб. Обводного кан. 146<br>
                    Санкт-Петербург, Россия
                </div>
            </div>
            <div class="lg:w-2/5 xl:w-1/3 mt-10 lg:mt-0 md:flex">
                <nav class="text-[18px] flex-none md:w-1/2 xl:w-1/3">
                    <ul class="site-footer__menu space-y-2">
                    @foreach ($items as $item)
                        <li>
                            <a href="{{$item->link}}" class="text-neutral-20 transition-all hover:text-theme {{ activeMenu(substr($item->link, 1)) }}">{{$item->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
                <div class="md:w-1/2 xl:w-2/3 flex flex-col justify-between mt-10 md:mt-0">
                    <div class="site-footer__social flex md:justify-end flex-wrap">
                        <a href="#"><x-svg-icon name="vk" iconClass="svg-icon--social"></x-svg-icon></a>
                        <a href="#"><x-svg-icon name="instagram" iconClass="svg-icon--social"></x-svg-icon></a>
                        <a href="#"><x-svg-icon name="facebook" iconClass="svg-icon--social"></x-svg-icon></a>
                        <a href="#"><x-svg-icon name="telegram" iconClass="svg-icon--social"></x-svg-icon></a>
                    </div>
                    <div class="mt-10 text-neutral-30 text-[16px] md:text-right">*Не является публичной офертой</div>
                </div>
            </div>
        </div>
    </div>
</footer>
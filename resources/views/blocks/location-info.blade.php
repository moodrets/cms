<section class="location-info py-12 md:py-16 block-{{getAttributeByPivotValue($block->attributes,'style') ? getAttributeByPivotValue($block->attributes,'style')->pivot->value : ''}}">
    <div class="site-container">
        <h2 class="text-3xl md:text-5xl font-bold mb-10 lg:hidden text-center">Расположение</h2>
        <div class="flex flex-col lg:items-center lg:flex-row">
            <div class="lg:w-8/12 mb-10 lg:mb-0">
                <img src="/public/files/location-pic.png" alt="">
            </div>
            <div class="lg:w-4/12 lg:pl-5">
                <h2 class="text-3xl md:text-5xl font-bold mb-10 hidden lg:block text-center">Расположение</h2>
                <div class="location-info__list">
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">5<span class="text-[20px]"> мин</span></div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">Пешком до станции<br> метро Нарвская</div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">15<span class="text-[20px]"> мин</span></div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">Пешком до станции<br> метро Сенная</div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">20<span class="text-[20px]"> мин</span></div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">Пешком до<br> Мариинки</div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">3<span class="text-[20px]"> мин</span></div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">На авто до<br> трассы ЗСД</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 text-[18px] space-y-4">
            <div class="flex">Город <span class="ml-10">Санкт-Петербург</span></div>
            <div class="flex">Адрес <span class="ml-10">Наб. Обводного кан. 146</span></div>
        </div>
    </div>
</section>
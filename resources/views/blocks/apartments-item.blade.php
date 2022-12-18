<section class="apartments-item py-12 md:py-16 block-{{getAttributeByPivotValue($block->attributes,'style') ? getAttributeByPivotValue($block->attributes,'style')->pivot->value : ''}}">
    <div class="site-container">
        <div class="lg:flex">
            <div class="lg:w-2/5 lg:pr-10 xl:pr-20">
                <h2 class="text-3xl md:text-5xl font-bold mb-10">Квартира 11</h2>
                <div class="mb-10 js-lightbox">
                    <a href="/public/files/plan-pic.png" class="block">
                        <img class="mx-auto" src="/public/files/plan-pic.png" alt="">
                    </a>
                </div>
                <div class="flex flex-wrap md:flex-nowrap text-[16px] font-bold">
                    <div class="w-1/2 lg:w-auto lg:flex-1 text-center p-2">
                        <div class="font-bold text-[38px]">11,2</div>
                        <div>Площадь<br> квартиры, м2</div>
                    </div>
                    <div class="w-1/2 lg:w-auto lg:flex-1 text-center p-2">
                        <div class="font-bold text-[38px]">4</div>
                        <div>Площадь<br> квартиры, м2</div>
                    </div>
                    <div class="w-1/2 lg:w-auto lg:flex-1 text-center p-2 flex flex-col items-center">
                        <div class="py-2.5">
                            <x-svg-icon name="facing" iconClass="w-9 h-9"></x-svg-icon>
                        </div>
                        <div>Готовая<br>отделка</div>
                    </div>
                    <div class="w-1/2 lg:w-auto lg:flex-1 text-center p-2 flex flex-col items-center">
                        <div class="py-2.5">
                            <x-svg-icon name="furniture" iconClass="w-12 h-9"></x-svg-icon>
                        </div>
                        <div>Качественная<br>мебелировка</div>
                    </div>
                </div>
                <div class="mt-10 flex justify-center lg:block">
                    <a href="#" class="site-button site-button--theme py-4 w-full max-w-[470px] lg:max-w-none text-[22px]">Записаться на просмотр</a>
                </div>
            </div>
            <div class="lg:w-3/5 mt-10 lg:mt-0">
                <div class="flex items-center justify-between mb-9">
                    <h3 class="text-2xl md:text-4xl font-bold">Отделка</h3>
                    <a href="#" class="site-button site-button--theme lg:py-4 lg:text-[22px] lg:min-w-[200px]">назад</a>
                </div>
                <div>
                    <img src="/public/files/gallery-pic.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
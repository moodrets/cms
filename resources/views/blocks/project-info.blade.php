<section class="project-info py-12 md:py-16 block-{{getAttributeByPivotValue($block->attributes,'style') ? getAttributeByPivotValue($block->attributes,'style')->pivot->value : ''}}">
    <div class="site-container">
        <h2 class="text-3xl md:text-5xl font-bold mb-10 lg:hidden">Информация о проекте</h2>
        <div class="flex flex-col lg:items-center lg:flex-row">
            <div class="lg:w-4/12 lg:pr-5">
                <h2 class="text-3xl md:text-5xl font-bold mb-10 hidden lg:block">Информация о проекте</h2>
                <div class="project-info__list">
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">1230</div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">м2, Площадь<br> застройки</div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">56</div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">м2, Количество<br> квартир</div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">1876</div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">м2, Дата постройки<br> здания</div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="w-1/2 xl:w-5/12 pr-3 text-right font-bold text-theme text-[60px]">2023</div>
                        <div class="w-1/2 xl:w-5/12 pl-3 text-left text-[16px] font-semibold">м2, Год сдачи<br> проекта</div>
                    </div>
                </div>
            </div>
            <div class="lg:w-8/12 -order-1 lg:order-1 mb-10 lg:mb-0">
                <img src="/public/files/gallery-pic.png" alt="">
            </div>
        </div>
    </div>
</section>
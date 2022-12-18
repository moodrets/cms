<section class="apartments-type py-12 md:py-16 block-{{getAttributeByPivotValue($block->attributes,'style') ? getAttributeByPivotValue($block->attributes,'style')->pivot->value : ''}}">
    <div class="site-container">
        <div class="md:flex flex-wrap -mx-3">
            <div class="apartments-type__item group md:w-1/2 flex-none p-3 mb-5 relative">
                <a href="#" class="absolute inset-0 z-10"></a>
                <div class="transition-all group-hover:scale-102 group-hover:shadow-lg"><img class="block rounded-lg" src="/public/files/apartment-type-pic.png" alt=""></div>
                <div class="text-xl md:text-3xl font-bold mt-6">ОБВОДНЫЙ 146</div>
            </div>
            <div class="apartments-type__item group md:w-1/2 flex-none p-3 mb-5 relative">
                <a href="#" class="absolute inset-0 z-10"></a>
                <div class="transition-all group-hover:scale-102 group-hover:shadow-lg"><img class="block rounded-lg" src="/public/files/apartment-type-pic.png" alt=""></div>
                <div class="text-xl md:text-3xl font-bold mt-6">БУМАЖНЫЙ</div>
            </div>
        </div>
    </div>
</section>
<section class="site-gallery py-12 md:py-16 block-{{getAttributeByPivotValue($block->attributes,'style') ? getAttributeByPivotValue($block->attributes,'style')->pivot->value : ''}}">
    <div class="site-container">
        <div class="lg:flex items-center mb-10">
            <h2 class="text-3xl md:text-5xl font-bold mb-6 lg:mb-0 lg:w-1/3">Галерея</h2>
            <div class="flex flex-wrap -ml-2 lg:flex-1 lg:justify-end">
                <a href="#" @click.prevent="galleryTab = 'building'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="galleryTab === 'building' ? 'active' : ''">Здание</a>
                <a href="#" @click.prevent="galleryTab = 'interiors'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="galleryTab === 'interiors' ? 'active' : ''">Интерьеры</a>
                <a href="#" @click.prevent="galleryTab = 'mop'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="galleryTab === 'mop' ? 'active' : ''">МОП</a>
                <a href="#" @click.prevent="galleryTab = 'building-progress'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="galleryTab === 'building-progress' ? 'active' : ''">Ход строительства</a>
            </div>
        </div>
        <transition name="tab-show">
            <div class="site-gallery-tab-body-item js-lightbox" v-show="galleryTab === 'building'">
                <div class="flex flex-wrap -mx-2">
                    <a href="/public/files/gallery-pic.png" class="p-2 w-full md:w-1/2 lg:w-1/3 cursor-pointer transition-all hover:scale-102" v-for="i in 6" :key="i">
                        <img src="/public/files/gallery-pic.png" alt="">
                    </a>
                </div>
            </div>
        </transition>
        <transition name="tab-show">
            <div class="site-gallery-tab-body-item js-lightbox" v-show="galleryTab === 'interiors'">
                <div class="flex flex-wrap -mx-2">
                    <a href="/public/files/apartment-type-pic.png" class="p-2 w-full md:w-1/2 lg:w-1/3 cursor-pointer transition-all hover:scale-102" v-for="i in 6" :key="i">
                        <img src="/public/files/apartment-type-pic.png" alt="">
                    </a>
                </div>
            </div>
        </transition>
        <transition name="tab-show">
            <div class="site-gallery-tab-body-item js-lightbox" v-show="galleryTab === 'mop'">
                <div class="flex flex-wrap -mx-2">
                    <a href="/public/files/gallery-pic.png" class="p-2 w-full md:w-1/2 lg:w-1/3 cursor-pointer transition-all hover:scale-102" v-for="i in 3" :key="i">
                        <img src="/public/files/gallery-pic.png" alt="">
                    </a>
                </div>
            </div>
        </transition>
        <transition name="tab-show">
            <div class="site-gallery-tab-body-item js-lightbox" v-show="galleryTab === 'building-progress'">
                <div class="flex flex-wrap -mx-2">
                    <a href="/public/files/gallery-pic.png" class="p-2 w-full md:w-1/2 lg:w-1/3 cursor-pointer transition-all hover:scale-102" v-for="i in 2" :key="i">
                        <img src="/public/files/gallery-pic.png" alt="">
                    </a>
                </div>
            </div>
        </transition>
    </div>
</section>
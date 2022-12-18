<section class="facing-info py-12 md:py-16 block-{{getAttributeByPivotValue($block->attributes,'style') ? getAttributeByPivotValue($block->attributes,'style')->pivot->value : ''}}">
    <div class="site-container">
        <div class="lg:flex md:items-center">
            <div class="lg:w-2/6 lg:pr-5 xl:pr-10">
                <h2 class="text-3xl md:text-5xl font-bold mb-10">Отделка</h2>
                <div class="text-[18px] mb-6 font-bold">Типы квартир:</div>
                <div class="flex flex-wrap lg:flex-col -mx-2">
                    <button @click="facingTab = 'tab-1'" :class="{'active': facingTab === 'tab-1'}" class="m-2 px-3 py-4 xl:text-[20px] site-button site-button--round-dark" type="button">Типовая квартита 22 (один уровень)</button>
                    <button @click="facingTab = 'tab-2'" :class="{'active': facingTab === 'tab-2'}" class="m-2 px-3 py-4 xl:text-[20px] site-button site-button--round-dark" type="button">Типовая квартита 22 (два уровня)</button>
                    <button @click="facingTab = 'tab-3'" :class="{'active': facingTab === 'tab-3'}" class="m-2 px-3 py-4 xl:text-[20px] site-button site-button--round-dark" type="button">Типовая квартита 18 (один уровень)</button>
                    <button @click="facingTab = 'tab-4'" :class="{'active': facingTab === 'tab-4'}" class="m-2 px-3 py-4 xl:text-[20px] site-button site-button--round-dark" type="button">Типовая квартита 18 (два уровня)</button>
                    <button @click="facingTab = 'tab-5'" :class="{'active': facingTab === 'tab-5'}" class="m-2 px-3 py-4 xl:text-[20px] site-button site-button--round-dark" type="button">Типовая квартита 22 (мансарда)</button>
                </div>
            </div>
            <div class="lg:w-4/6 mt-10 lg:mt-0">
                <transition name="tab-show">
                    <div class="js-lightbox" v-show="facingTab === 'tab-1'">
                        <a href="/public/files/gallery-pic.png" class="block cursor-pointer transition-all hover:scale-102">
                            <img src="/public/files/gallery-pic.png" alt="">
                        </a>
                    </div>                    
                </transition>
                <transition name="tab-show">
                    <div class="js-lightbox" v-show="facingTab === 'tab-2'">
                        <a href="/public/files/gallery-pic.png" class="block cursor-pointer transition-all hover:scale-102">
                            <img src="/public/files/gallery-pic.png" alt="">
                        </a>
                    </div>                    
                </transition>
                <transition name="tab-show">
                    <div class="js-lightbox" v-show="facingTab === 'tab-3'">
                        <a href="/public/files/gallery-pic.png" class="block cursor-pointer transition-all hover:scale-102">
                            <img src="/public/files/gallery-pic.png" alt="">
                        </a>
                    </div>                    
                </transition>
                <transition name="tab-show">
                    <div class="js-lightbox" v-show="facingTab === 'tab-4'">
                        <a href="/public/files/gallery-pic.png" class="block cursor-pointer transition-all hover:scale-102">
                            <img src="/public/files/gallery-pic.png" alt="">
                        </a>
                    </div>                    
                </transition>
                <transition name="tab-show">
                    <div class="js-lightbox" v-show="facingTab === 'tab-5'">
                        <a href="/public/files/gallery-pic.png" class="block cursor-pointer transition-all hover:scale-102">
                            <img src="/public/files/gallery-pic.png" alt="">
                        </a>
                    </div>                    
                </transition>
            </div>
        </div>
    </div>
</section>
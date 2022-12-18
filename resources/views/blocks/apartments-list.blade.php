<section class="apartments-list py-12 md:py-16 block-{{getAttributeByPivotValue($block->attributes,'style') ? getAttributeByPivotValue($block->attributes,'style')->pivot->value : ''}}">
    <div class="site-container">
        <div class="lg:flex items-center mb-10">
            <h2 class="text-3xl md:text-5xl font-bold mb-6 lg:mb-0 lg:w-1/3">Квартиры</h2>
            <div class="flex flex-wrap -ml-2 lg:flex-1 lg:justify-end">
                <a href="#" @click.prevent="apartmentsListTab = 'floor-1'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="apartmentsListTab === 'floor-1' ? 'active' : ''">1 этаж</a>
                <a href="#" @click.prevent="apartmentsListTab = 'floor-2'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="apartmentsListTab === 'floor-2' ? 'active' : ''">2 этаж</a>
                <a href="#" @click.prevent="apartmentsListTab = 'floor-3'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="apartmentsListTab === 'floor-3' ? 'active' : ''">3 этаж</a>
                <a href="#" @click.prevent="apartmentsListTab = 'floor-4'" class="m-2 xl:px-10 xl:py-3 site-button site-button--theme" :class="apartmentsListTab === 'floor-4' ? 'active' : ''">4 этаж</a>
            </div>
        </div>
        <transition name="tab-show">
            <div class="lg:flex lg:items-center" v-show="apartmentsListTab === 'floor-1'">
                <div class="lg:w-2/5 lg:pr-16 text-[18px]">
                    <div class="flex mb-8 font-bold">
                        <div class="flex-1">Квартира:</div>
                        <div class="flex-1">Площадь:</div>
                        <div class="flex-1">Стоимость</div>
                    </div>
                    <div class="space-y-2">
                        <div 
                            @mouseenter="apartmentItemMouseEnter($event.target, 'floor-1', i)"
                            @mouseleave="apartmentItemMouseLeave($event.target, 'floor-1', i)"
                            @click.prevent="showModal('request-modal')" 
                            v-for="i in 15" 
                            :key="i"
                            class="flex cursor-pointer hover:font-bold"
                        >
                            <div class="flex-1 pr-2" v-html="i"></div>
                            <div class="flex-1 pr-2">18,9</div>
                            <div class="flex-1 pr-2">Узнать цену</div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-3/5 overflow-x-auto mt-10 lg:mt-0 pb-4">
                    <div class="w-[840px] h-[394px] relative js-plan-wrapper">
                        <svg data-place="floor-1" class="js-plan-svg apartments-list__plan-svg" width="840" height="394" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon @click.prevent="showModal('request-modal')" data-number="1" points="30, 23, 125, 25, 124, 178, 29, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="2" points="126, 25, 126, 178, 238, 178, 238, 25" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="3" points="237, 24, 331, 24, 331, 178, 236, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="4" points="334, 25, 439, 25, 439, 179, 334, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="5" points="453, 25, 513, 25, 513, 178, 452, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="6" points="513, 25, 611, 25, 611, 179, 514, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="7" points="613, 26, 711, 26, 711, 178, 611, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="8" points="712, 178, 812, 178, 812, 24, 713, 24" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="9" points="760, 179, 760, 368, 812, 368, 812, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="10" points="755, 208, 671, 208, 671, 368, 755, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="11" points="494, 210, 584, 210, 584, 369, 495, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="12" points="405, 210, 495, 210, 495, 368, 405, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="13" points="262, 208, 406, 208, 406, 369, 263, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="14" points="186, 209, 248, 209, 248, 369, 186, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="15" points="28, 179, 91, 179, 91, 209, 168, 209, 168, 369, 30, 369" />
                        </svg>
                        <img class="w-full h-full pointer-events-none" src="/public/files/apartments-list.png" alt="">
                    </div>
                </div>
            </div>
        </transition>
        <transition name="tab-show">
            <div class="lg:flex lg:items-center" v-show="apartmentsListTab === 'floor-2'">
                <div class="lg:w-2/5 lg:pr-16 text-[18px]">
                    <div class="flex mb-8 font-bold">
                        <div class="flex-1">Квартира:</div>
                        <div class="flex-1">Площадь:</div>
                        <div class="flex-1">Стоимость</div>
                    </div>
                    <div class="space-y-2">
                        <div 
                            @mouseenter="apartmentItemMouseEnter($event.target, 'floor-2', i)"
                            @mouseleave="apartmentItemMouseLeave($event.target, 'floor-2', i)"
                            @click.prevent="showModal('request-modal')" 
                            v-for="i in 15" 
                            :key="i"
                            class="flex cursor-pointer hover:font-bold"
                        >
                            <div class="flex-1 pr-2" v-html="i"></div>
                            <div class="flex-1 pr-2">18,9</div>
                            <div class="flex-1 pr-2">Узнать цену</div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-3/5 overflow-x-auto mt-10 lg:mt-0 pb-4">
                    <div class="w-[840px] h-[394px] relative js-plan-wrapper">
                        <svg data-place="floor-2" class="js-plan-svg apartments-list__plan-svg" width="840" height="394" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon @click.prevent="showModal('request-modal')" data-number="1" points="30, 23, 125, 25, 124, 178, 29, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="2" points="126, 25, 126, 178, 238, 178, 238, 25" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="3" points="237, 24, 331, 24, 331, 178, 236, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="4" points="334, 25, 439, 25, 439, 179, 334, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="5" points="453, 25, 513, 25, 513, 178, 452, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="6" points="513, 25, 611, 25, 611, 179, 514, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="7" points="613, 26, 711, 26, 711, 178, 611, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="8" points="712, 178, 812, 178, 812, 24, 713, 24" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="9" points="760, 179, 760, 368, 812, 368, 812, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="10" points="755, 208, 671, 208, 671, 368, 755, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="11" points="494, 210, 584, 210, 584, 369, 495, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="12" points="405, 210, 495, 210, 495, 368, 405, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="13" points="262, 208, 406, 208, 406, 369, 263, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="14" points="186, 209, 248, 209, 248, 369, 186, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="15" points="28, 179, 91, 179, 91, 209, 168, 209, 168, 369, 30, 369" />
                        </svg>
                        <img class="w-full h-full pointer-events-none" src="/public/files/apartments-list.png" alt="">
                    </div>
                </div>
            </div>
        </transition>
        <transition name="tab-show">
            <div class="lg:flex lg:items-center" v-show="apartmentsListTab === 'floor-3'">
                <div class="lg:w-2/5 lg:pr-16 text-[18px]">
                    <div class="flex mb-8 font-bold">
                        <div class="flex-1">Квартира:</div>
                        <div class="flex-1">Площадь:</div>
                        <div class="flex-1">Стоимость</div>
                    </div>
                    <div class="space-y-2">
                        <div 
                            @mouseenter="apartmentItemMouseEnter($event.target, 'floor-3', i)"
                            @mouseleave="apartmentItemMouseLeave($event.target, 'floor-3', i)"
                            @click.prevent="showModal('request-modal')" 
                            v-for="i in 15" 
                            :key="i"
                            class="flex cursor-pointer hover:font-bold"
                        >
                            <div class="flex-1 pr-2" v-html="i"></div>
                            <div class="flex-1 pr-2">18,9</div>
                            <div class="flex-1 pr-2">Узнать цену</div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-3/5 overflow-x-auto mt-10 lg:mt-0 pb-4">
                    <div class="w-[840px] h-[394px] relative js-plan-wrapper">
                        <svg data-place="floor-3" class="js-plan-svg apartments-list__plan-svg" width="840" height="394" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon @click.prevent="showModal('request-modal')" data-number="1" points="30, 23, 125, 25, 124, 178, 29, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="2" points="126, 25, 126, 178, 238, 178, 238, 25" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="3" points="237, 24, 331, 24, 331, 178, 236, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="4" points="334, 25, 439, 25, 439, 179, 334, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="5" points="453, 25, 513, 25, 513, 178, 452, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="6" points="513, 25, 611, 25, 611, 179, 514, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="7" points="613, 26, 711, 26, 711, 178, 611, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="8" points="712, 178, 812, 178, 812, 24, 713, 24" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="9" points="760, 179, 760, 368, 812, 368, 812, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="10" points="755, 208, 671, 208, 671, 368, 755, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="11" points="494, 210, 584, 210, 584, 369, 495, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="12" points="405, 210, 495, 210, 495, 368, 405, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="13" points="262, 208, 406, 208, 406, 369, 263, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="14" points="186, 209, 248, 209, 248, 369, 186, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="15" points="28, 179, 91, 179, 91, 209, 168, 209, 168, 369, 30, 369" />
                        </svg>
                        <img class="w-full h-full pointer-events-none" src="/public/files/apartments-list.png" alt="">
                    </div>
                </div>
            </div>
        </transition>
        <transition name="tab-show">
            <div class="lg:flex lg:items-center" v-show="apartmentsListTab === 'floor-4'">
                <div class="lg:w-2/5 lg:pr-16 text-[18px]">
                    <div class="flex mb-8 font-bold">
                        <div class="flex-1">Квартира:</div>
                        <div class="flex-1">Площадь:</div>
                        <div class="flex-1">Стоимость</div>
                    </div>
                    <div class="space-y-2">
                        <div
                            @mouseenter="apartmentItemMouseEnter($event.target, 'floor-4', i)"
                            @mouseleave="apartmentItemMouseLeave($event.target, 'floor-4', i)"
                            @click.prevent="showModal('request-modal')" 
                            v-for="i in 15" 
                            :key="i"
                            class="flex cursor-pointer hover:font-bold"
                        >
                            <div class="flex-1 pr-2" v-html="i"></div>
                            <div class="flex-1 pr-2">18,9</div>
                            <div class="flex-1 pr-2">Узнать цену</div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-3/5 overflow-x-auto mt-10 lg:mt-0 pb-4">
                    <div class="w-[840px] h-[394px] relative js-plan-wrapper">
                        <svg data-place="floor-4" class="js-plan-svg apartments-list__plan-svg" width="840" height="394" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon @click.prevent="showModal('request-modal')" data-number="1" points="30, 23, 125, 25, 124, 178, 29, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="2" points="126, 25, 126, 178, 238, 178, 238, 25" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="3" points="237, 24, 331, 24, 331, 178, 236, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="4" points="334, 25, 439, 25, 439, 179, 334, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="5" points="453, 25, 513, 25, 513, 178, 452, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="6" points="513, 25, 611, 25, 611, 179, 514, 179" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="7" points="613, 26, 711, 26, 711, 178, 611, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="8" points="712, 178, 812, 178, 812, 24, 713, 24" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="9" points="760, 179, 760, 368, 812, 368, 812, 178" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="10" points="755, 208, 671, 208, 671, 368, 755, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="11" points="494, 210, 584, 210, 584, 369, 495, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="12" points="405, 210, 495, 210, 495, 368, 405, 368" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="13" points="262, 208, 406, 208, 406, 369, 263, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="14" points="186, 209, 248, 209, 248, 369, 186, 369" />
                            <polygon @click.prevent="showModal('request-modal')" data-number="15" points="28, 179, 91, 179, 91, 209, 168, 209, 168, 369, 30, 369" />
                        </svg>
                        <img class="w-full h-full pointer-events-none" src="/public/files/apartments-list.png" alt="">
                    </div>
                </div>
            </div>
        </transition>
    </div>
</section>
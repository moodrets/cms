import Vue from 'vue'
import OffCanvas from './components/Offcanvas.vue'
import Modal from './components/Modal.vue'
import baguetteBox from 'baguettebox.js'
import { initPlansPolygons } from './helpers/helpers'

Vue.component('app-offcanvas', OffCanvas)
Vue.component('app-modal', Modal)

const app = new Vue({
    el: '#main',
    data: () => ({
        galleryTab: 'building',
        facingTab: 'tab-1',
        apartmentsListTab: 'floor-1',
    }),
    methods: {
        showOffcanvas() {
            this.$refs['offcanvas'] && this.$refs['offcanvas'].toggle()
        },
        showModal(modalRefName) {
            this.$refs[modalRefName] && this.$refs[modalRefName].toggle()
        },
        apartmentItemMouseEnter(target, place, number) {
            const $svgElement = document.querySelector(`.js-plan-svg[data-place="${place}"]`)
            const $poly = $svgElement.querySelector(`polygon[data-number="${number}"]`)
            $poly && $poly.classList.add('active')
        },
        apartmentItemMouseLeave(target, place, number) {
            const $svgElement = document.querySelector(`.js-plan-svg[data-place="${place}"]`)
            const $polyActive = $svgElement.querySelector(`polygon.active`)
            $polyActive && $polyActive.classList.remove('active')
        },
    },
    mounted() {
        baguetteBox.run('.js-lightbox')
    },
    beforeCreate() {
        initPlansPolygons()
    },
})

document.addEventListener('DOMContentLoaded', () => {})

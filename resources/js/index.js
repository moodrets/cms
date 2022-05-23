import Vue from 'vue'
import { toggleTheme, themeOnLoad } from './helpers/themeMode'

// [+] components
import Offcanvas from './components/Offcanvas'
import Modal from './components/Modal'
// [-] components

Vue.component('app-offcanvas', Offcanvas)
Vue.component('app-modal', Modal)

const app = new Vue({
    el: '#main',
    data() {
        return {
            mobileSearchVisible: false,
        }
    },
    methods: {
        toggleTheme,
        showOffcanvas() {
            this.$refs['offcanvas'] && this.$refs['offcanvas'].toggle()
        },
        showModal(ref = 'login-modal') {
            this.$refs[ref] && this.$refs[ref].toggle()
            this.$refs['offcanvas'] && (this.$refs['offcanvas'].visible = false)
        },
        toggleMobileSearch() {
            this.mobileSearchVisible = !this.mobileSearchVisible
        },
        appClickHandler(event) {},
    },
    mounted() {},
})

themeOnLoad()

window.APP = app

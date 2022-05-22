import Vue from 'vue'
import { toggleTheme, themeOnLoad } from './helpers/themeMode'

// [+] components
import Offcanvas from './components/Offcanvas'
// [-] components

Vue.component('app-offcanvas', Offcanvas)

const app = new Vue({
    el: '#main',
    methods: {
        toggleTheme,
        showOffcanvas() {
            this.$refs['offcanvas'] && this.$refs['offcanvas'].toggle()
        },
    },
})

themeOnLoad()

window.APP = app

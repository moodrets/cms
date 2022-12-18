<template>
    <div
        class="offcanvas"
        :class="{ 'is-opened': visible }"
        @click="clickHandler($event)"
        data-offcanvas-element
        v-cloak
    >
        <div class="flex items-center justify-between py-7 px-5">
            <div class="site-logo">
                <a href="/" class="block">
                    <img src="/public/files/logo.svg" alt="" />
                </a>
            </div>
            <div class="offcanvas__close" @click="toggle()">
                <div class="svg-icon">
                    <svg><use xlink:href="#close"></use></svg>
                </div>
            </div>
        </div>
        <div class="offcanvas__body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            visible: false,
        }
    },
    methods: {
        bodyToggleClass() {
            if (this.visible) {
                document.body.classList.add('overflow-hidden', 'offcanvas-opened')
            } else {
                document.body.classList.remove('overflow-hidden', 'offcanvas-opened')
            }
        },
        toggle() {
            this.visible = !this.visible
            this.bodyToggleClass()
        },
        clickHandler(event) {
            if (event.target.hasAttribute('data-offcanvas-element')) {
                this.visible = false
            }
            this.bodyToggleClass()
        },
    },
}
</script>

<style lang="scss">
.offcanvas {
    display: flex;
    flex-direction: column;
    position: fixed;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    z-index: 120;
    transition: all 0.3s;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    background: rgba(20, 20, 20, 0.9);

    &.is-opened {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    &__close {
        .svg-icon {
            width: 24px;
            height: 24px;
            color: #fff;
        }
    }

    &__body {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        transition: all 0.3s;
    }
}
</style>

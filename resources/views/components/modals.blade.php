<app-modal ref="request-modal" v-cloak>
    <div class="text-3xl font-bold mb-6">Заявка</div>
    <form>
        <div class="mb-3">
            <div class="mb-2 font-bold">Email</div>
            <input type="email" class="rounded-xl w-full outline-none border-2 text-[16px] border-solid border-neutral px-4 py-2 placeholder:italic :text-neutral font-semibold focus:border-theme" required>
        </div>
        <div class="mb-3">
            <div class="mb-2 font-bold">Телефон</div>
            <input type="tel" class="rounded-xl w-full outline-none border-2 text-[16px] border-solid border-neutral px-4 py-2 placeholder:italic :text-neutral font-semibold focus:border-theme" required>
        </div>
        <div class="mt-6 flex justify-center">
            <button type="submit" class="site-button site-button--theme px-6 py-3 text-[18px]">Оставить заявку</button>
        </div>
    </form>
</app-modal>
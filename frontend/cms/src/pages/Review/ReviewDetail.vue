<template>
    <detail namespace="review">
        <template #form="{ setValue, entity }">
            <v-text-field
                label="Имя"
                outlined
                :value="entity.name"
                @input="(val) => setValue('name', val)"
            ></v-text-field>
            <v-textarea
                label="Контент"
                outlined
                :value="entity.content"
                @input="(val) => setValue('content', val)"
            ></v-textarea>
            <v-textarea
                label="Ответ"
                outlined
                :value="entity.admin_content"
                @input="(val) => setValue('admin_content', val)"
            ></v-textarea>
            <v-checkbox
                :value="Boolean(entity.show)"
                @change="setValue('show', !Boolean(entity.show))"
                label="Показывать на сайте"
            ></v-checkbox>
        </template>
    </detail>
</template>
<script>
export default {
    metaInfo: {
        title: 'Отзывы',
    },
}
</script>

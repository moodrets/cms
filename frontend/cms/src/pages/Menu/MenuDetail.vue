<template>
  <detail namespace="menu">
    <template #form="{ setValue, entity, createView }">
      <v-text-field
        label="Название"
        outlined
        :value="entity.name"
        @input="(val) => setValue('name', val)"
      ></v-text-field>
      <edit-list-menu
        title="Пункты меню"
        relationPicker
        v-if="!createView"
        :value="entity.items"
        @input="(val) => setValue('items', val)"
      ></edit-list-menu>
      <!--
      <picker
        label="Пункты меню"
        multiple
        model="menuItem"
        returnObject
        url="menu-item"
        textSelector="title"
        :value="entity.items"
        @input="(val) => setValue('items', val)"
      ></picker>-->
    </template>
  </detail>
</template>
<script>
export default {
  metaInfo: {
    title: "Меню",
  },
};
</script>

<template>
  <detail namespace="order">
    <template #form="{ setValue, entity }">
      <v-text-field
        label="Имя"
        outlined
        readonly
        :value="entity.name"
        @input="(val) => setValue('name', val)"
      ></v-text-field>
      <v-text-field
        label="Почта"
        outlined
        readonly
        :value="entity.email"
        @input="(val) => setValue('email', val)"
      ></v-text-field>
      <v-text-field
        label="Телефон"
        outlined
        readonly
        :value="entity.phone"
        @input="(val) => setValue('phone', val)"
      ></v-text-field>
    </template>
  </detail>
</template>
<script>
export default {
  metaInfo: {
    title: "Заявки",
  },
};
</script>

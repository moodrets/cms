<template>
  <list namespace="order" :headers="headers"></list>
</template>
<script>
export default {
  metaInfo: {
    title: "Заявки",
  },
  data: () => ({
    headers: [
      { text: "#", value: "id" },
      { text: "Имя", value: "name" },
      { text: "Почта", value: "email" },
      { text: "Телефон", value: "phone" },
    ],
  }),
};
</script>

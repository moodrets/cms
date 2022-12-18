<template>
    <list namespace="review" :headers="headers"></list>
</template>
<script>
export default {
    metaInfo: {
        title: 'Заявки',
    },
    data: () => ({
        headers: [
            { text: '#', value: 'id' },
            { text: 'Имя', value: 'name' },
        ],
    }),
}
</script>

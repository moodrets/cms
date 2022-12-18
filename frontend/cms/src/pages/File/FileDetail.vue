<template>
    <detail namespace="file" formData>
        <template #form="{ setValue, entity }">
            <v-file-input
                return-object
                label="Файл"
                outlined
                accept="file/*"
                :value="entity.file"
                @change="(val) => setValue('file', val)"
            ></v-file-input>
            <v-text-input label="Путь" outlined :value="entity.path"> </v-text-input>
        </template>
    </detail>
</template>

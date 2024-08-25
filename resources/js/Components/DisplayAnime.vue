<template>
    <div>
        <p class="text-2xl font-semibold">{{ animes.name }}</p>
        <p>{{ animes.description }}</p>
        <img :src="animes.image_url" :alt="animes.name" class="w-60 h-80"/>
    </div>
</template>
<script setup lang="ts">
interface AnimesProps {
    name: string;
    description: string;
    image_url: string;
}
defineProps<{
    animes: AnimesProps;
}>();
</script>

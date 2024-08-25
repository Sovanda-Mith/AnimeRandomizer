<template>
    <div>
        <p class="text-2xl font-semibold">{{ animes.title }}</p>
        <p>{{ animes.description }}</p>
        <img :src="animes.image_url" :alt="animes.title" class="w-60 h-80" />
    </div>
</template>
<script setup lang="ts">
import { AnimeProps } from "@/types/AnimeProps.type";

defineProps<{
    animes: AnimeProps;
}>();
</script>

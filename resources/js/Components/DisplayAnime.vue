<template>
    <div>
        <p class="md:text-3xl lg:text-4xl font-semibold">{{ anime.title }}</p>
        <p class="md:text-md lg:text-lg">{{ anime.description }}</p>
        <a :href="anime.mal_url">
            <img
                :src="anime.image_url"
                :alt="anime.title"
                class="md:w-60 md:h-60 lg:w-80 lg:h-80"
            />
        </a>
    </div>
</template>
<script setup lang="ts">
import { AnimeProps } from "@/types/AnimeProps.type";

defineProps<{
    anime: AnimeProps;
}>();
</script>

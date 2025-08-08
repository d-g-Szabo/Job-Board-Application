<script setup lang="ts">
import AuthLayout from '@/layouts/auth/AuthSplitLayout.vue'; // can change between AuthSplitLayout, AuthCardLayout and AuthSimpleLayout

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <AuthLayout :title="title" :description="description">
        <slot />
    </AuthLayout>
</template>

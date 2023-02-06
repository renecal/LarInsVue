<template>
  <Link href="/listing">Listings</Link>&nbsp;
  <Link href="/listing/create">New Listing</Link>&nbsp;
  <div v-if="$page.props.flash.success" class="alert">
    {{ $page.props.flash.success }}
  </div>
  <slot />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
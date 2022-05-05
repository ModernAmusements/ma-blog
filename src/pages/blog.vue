<template>
  <div>
    <p class="text-xl">Blog</p>
    <p class="text-sm opacity-75">Test</p>

    <div class="py-4" />

    <div v-if="page.isReady" class="prose" v-html="page.text" />
  </div>
</template>

<script setup lang="ts">
import { useController } from "~/hooks";

// Pass the controller name as parameter
const page = useController("blog");

(async () => {
  await page.isReadyPromise();

  console.log(`Hello from the ${page.title} page`);
})();
</script>

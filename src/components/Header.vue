<template>
  <header class="mx-auto sticky">
    <nav class="flex box">
      <div class="logo">modernAmusement</div>
      <div class="nav-links flex-wrap space-x-4">
        <router-link class="header-link" to="/">Home</router-link>
        <router-link class="header-link" to="/about">About</router-link>
        <router-link class="header-link" to="/blog">Blog</router-link>
      </div>
    </nav>
  </header>
</template>

<style scoped>
.header-link {
  @apply text-gray-800 whitespace-nowrap dark:text-white hover:text-blue-600;

  &.router-link-active {
    text-decoration-line: underline;
  }
}
</style>

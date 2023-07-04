<template>
  <div>
    <header class="site-header">
      <div>
        <a href="/admin/apartements" class="brand">
          <h1>Billroth Minerva</h1>
        </a>
        <a href="javascript:;" @click="toggleMenu()" class="icon-menu"></a>
      </div>
    </header>
    <nav class="site-nav" :class="{'is-visible': menuVisible}">
        <div>
          <a href="javascript:;" @click="toggleMenu()" class="icon-close"></a>
        </div>
        <ul>
          <li>
            <router-link :to="{ name: 'apartements' }">Objekte</router-link>
          </li>
        </ul>
      <router-link :to="{ name: 'logout' }" class="icon-logout">Logout</router-link>
    </nav>
  </div>
</template>
<script>
export default {
  data() {
    return {
      menuVisible: false
    }
  },
  methods: {
    toggleMenu() {
      this.menuVisible = !this.menuVisible;
    }
  }
}
</script>
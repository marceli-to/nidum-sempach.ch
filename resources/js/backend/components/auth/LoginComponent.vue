<template>
  <div class="container-auth">
    <main class="content-auth" role="main">
      <div class="brand is-login">
        <img src="/assets/img/logo-billroth-minerva.svg" height="39" width="228" class="logo" alt="Nidum Sempach – Zuhause am See">
      </div>
      <header class="auth-header">
        <h1>Login</h1>
      </header>
      <form method="POST" class="login" v-on:submit.prevent="submitLogin">
        <div class="form-row">
          <label>E-Mail</label>
          <input type="email" required autofocus autocomplete="email" v-model="email">
        </div>
        <div class="form-row">
          <label>Password</label>
          <input id="password" type="password" required v-model="password">
        </div>
        <div class="form-row is-last">
          <div class="form-buttons">
            <input type="submit" class="btn" value="Login">
          </div>
        </div>
      </form>
    </main>
  </div>
</template>

<script>
  import store from '../../store'
  export default {
    data() {
      return {
        email: '',
        password: '',
        loginError: false,
      }
    },
    methods: {
      submitLogin() {
        this.loginError = false;
        axios.post('/api/auth/login', {
          email: this.email,
          password: this.password
        }).then(response => {
          store.commit('loginUser')
          localStorage.setItem('token', response.data.access_token)
          window.location.href = '/admin/apartements';
        }).catch(error => {
          this.loginError = true
        });
      }
    }
  }
</script>
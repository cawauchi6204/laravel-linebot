<template>
  <div class="container">
    <span v-if="user">こんにちは {{user.mail }}さん</span>
    <span v-else>ログインしていません</span>
  </div>
</template>

<script>
// @ is an alias to /src
import firebase from "firebase";

export default {
  name: "Home",
  data() {
    return {
      user: null
    };
  },
  created() {
    firebase.auth().onAuthStateChanged(user => {
      this.user = user;
    });
  },
  components: {}
};
</script>

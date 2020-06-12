import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import firebase from 'firebase';

var firebaseConfig = {
  apiKey: "AIzaSyCSn8V5lBQ9IoiXJ30wWretaSv4OXj0okA",
  authDomain: "pitmark-d8c7e.firebaseapp.com",
  databaseURL: "https://pitmark-d8c7e.firebaseio.com",
  projectId: "pitmark-d8c7e",
  storageBucket: "pitmark-d8c7e.appspot.com",
  messagingSenderId: "70104532290",
  appId: "1:70104532290:web:c1bb0bd92a3fc91a0ab4db",
  measurementId: "G-BF98LM9VW4"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");

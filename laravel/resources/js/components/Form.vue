<template>
    <form @submit.prevent="submitForm">
      <input type="text" v-model="name" placeholder="Nom">
      <input type="email" v-model="email" placeholder="Adresse e-mail">
      <button type="submit">Envoyer</button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        name: '',
        email: ''
      };
    },
    methods: {
      submitForm() {
        // Traitement de la soumission du formulaire ici (par exemple, appel à une API Laravel)
      }
    }
  };
  </script>
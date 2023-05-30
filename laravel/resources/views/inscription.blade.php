@extends('template')
@section('header')
@section('content')
<div class='FontInter'>
    <h1 class='titre'>Inscription</h1>
    <span id='trait'></span>
    <form id='inscription'>
      <input class='inscription' type="text" v-model="firstName" placeholder="Prénom">
        <input class='inscription' type="text" v-model="lastName" placeholder="Nom">
        <input class='inscription' type="text" v-model="username" placeholder="Nom d'utilisateur">
        <input class='inscription' type="email" v-model="email" placeholder="Adresse e-mail">
        <input class='inscription' type="number" v-model="phone" placeholder="Numéro de téléphone">
        <input class='inscription' type="password" v-model="password" placeholder="Mot de passe">
        <input class='inscription' type="text" v-model="address" placeholder="Adresse">
        <label>
            <input type="checkbox" v-model="checkedOptions" value="option1">
            J'accepte les conditions d'utilisation
        </label>
        <label>
            <input type="checkbox" v-model="checkedOptions" value="option1">
            J'accepte la charte de confidentialité
        </label>
   
      <button type="submit">S'inscrire</button>
    </form>

    <script>
  export default {
    data() {
      return {
        firstName: '',
        lastName: '',
        username: '',
        email: '',
        phone: '',
        password: '',
        address: '',
        
      };
    },
    methods: {
      submitForm() {
        // Traitement de la soumission du formulaire ici (par exemple, appel à une API Laravel)
      }
    }
  };
  </script>

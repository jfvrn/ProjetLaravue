<script setup>
import { ref, watchEffect } from 'vue';
import { useFetchJson } from '@/composables/useFetchJson';

const currentPassage = ref(null);
const choices = ref([]);
const passageId = ref(12); // Commence par le passage avec l'ID 12

const fetchPassage = (id) => {
    const { data, error } = useFetchJson(`/api/v1/passages/${id}`);

    watchEffect(() => {
        if (data.value) {
            currentPassage.value = data.value;
            fetchChoices(data.value.id);
        }

        if (error.value) {
            console.error('Error fetching passage:', error.value);
        }
    });
};

const fetchChoices = (id) => {
    console.log('Fetching choices for passage ID:', id); // Log pour déboguer
    const { data, error } = useFetchJson(`/api/v1/choix`);

    watchEffect(() => {
        if (data.value) {
            console.log('All choices fetched:', data.value); // Log pour vérifier les données reçues
            const filteredChoices = data.value.filter(choice => choice.passage_id === id);
            console.log('Filtered choices:', filteredChoices);
            choices.value = filteredChoices;
        }

        if (error.value) {
            console.error('Error fetching choices:', error.value);
        }
    });
};

// Fetch the initial passage
fetchPassage(passageId.value);

const selectChoice = (choice) => {
    if (choice.suivant_id) {
        passageId.value = choice.suivant_id;
        fetchPassage(passageId.value);
    }
};
</script>

<template>
  <div>
    <p v-if="currentPassage">{{ currentPassage.content }}</p>

    <ul>
      <li v-for="choice in choices" :key="choice.passage_id">
        <button @click="selectChoice(choice)">{{ choice.texte }}</button>
      </li>
    </ul>
  </div>
</template>

<style scoped>
body {
    background-color: #1e1e2f; /* Couleur sombre pour le fond */
    color: #ffffff; /* Texte blanc pour un bon contraste */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* S'assure que le contenu est centré verticalement */
}

div {
    padding: 20px;
    border-radius: 10px;
    background-color: #1f2a38; /* Couleur sombre pour le bloc */
    color: #ffffff; /* Texte blanc */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Ombre pour un effet subtil */
    max-width: 700px; /* Limite la largeur du bloc */
    width: 90%; /* S'assure que le bloc est réactif */
    margin: auto; /* Centre horizontalement */
    margin-top: 5%;
}

h1, h2, h3 {
    color: #ffffff; /* Couleur blanche pour les titres */
    font-weight: bold;
    margin-bottom: 1rem;
}

p {
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 1rem;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 1rem;
}

button {
    background-color: #007bff; /* Couleur bleue pour les boutons */
    color: #fff; /* Texte blanc */
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius: 5px; /* Arrondi léger */
    width: 100%; /* Prend toute la largeur de la box */
    box-sizing: border-box; /* Inclut le padding et la bordure dans la largeur totale */
}

button:hover {
    background-color: #0056b3; /* Couleur bleue plus foncée au survol */
}

pre {
    background-color: #333333; /* Fond sombre pour les blocs de code */
    color: #ffffff; /* Texte blanc */
    padding: 10px;
    border-radius: 5px;
    overflow-x: auto;
    border: 1px solid #444444; /* Bordure légère */
}
</style>
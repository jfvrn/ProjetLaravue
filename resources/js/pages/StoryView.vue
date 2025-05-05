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

    <h2>Choix</h2>
    <ul>
      <li v-for="choice in choices" :key="choice.passage_id">
        <button @click="selectChoice(choice)">{{ choice.texte }}</button>
      </li>
    </ul>
  </div>
</template>

<style scoped>
body {
    background-color: #f9f9f9; /* Couleur claire pour un style sobre */
    color: #333; /* Texte sombre pour un bon contraste */
    margin: 0;
    padding: 0;
}

h1, h2, h3 {
    color: #444; /* Couleur légèrement plus sombre pour les titres */
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
    color: #fff; /* Texte blanc pour un bon contraste */
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius: 5px; /* Arrondi léger pour un style moderne */
}

button:hover {
    background-color: #0056b3; /* Couleur bleue plus foncée au survol */
}

pre {
    background-color: #f1f1f1;
    color: #333;
    padding: 10px;
    border-radius: 5px;
    overflow-x: auto;
    border: 1px solid #ddd; /* Bordure légère pour délimiter */
}

div {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #fff; /* Fond blanc pour un style propre */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Ombre légère pour un effet subtil */
}
</style>
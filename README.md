# Escape Game

Escape game est une application minimaliste d'histoire interactive de type escape game développée avec laravel 12 (backend) et vue 3 via vite (frontend). cette application permet aux utilisateurs de vivre une expérience immersive en sein des plusieurs hisoires

## 📋 Table des matières

* ✨ objectifs du projet
* 🛠️ architecture technique
* 🌟 fonctionnalités implémentées
* 📚 modèle de données
* 🚀 guide d'installation
* 🔐 sécurité
* 💻 technologies utilisées
* ⭐ fonctionnalités avancées
* 📝 conclusion

## ✨ Objectifs du projet

 • Concevoir et développer une application web complète de type SPA(SinglePageApplication).
 • Implémenter un backend Laravel structuré avec des routes RESTful.
 • Créer une API versionnée avec validation, middleware, et relations Eloquent.
 • Gérer un frontendVue.js pour naviguer dans une histoire à choix multiples.
 • Interagir avec une API (GET, POST, etc.) et afficher dynamiquement les contenus.

## 🛠️ Architecture technique

**backend — laravel 12**

* API RESTful : gestion des passages, choix et utilisateurs
* authentification : système personnalisé sans packages externes
* middlewares : protection des routes auth et guest
* form requests : validation sécurisée des données

**frontend — vue 3 (via vite)**

* architecture SPA : navigation fluide sans rechargement de page
* vue router : gestion des routes et des vues de récit
* composables : réutilisation de la logique (ex : useFetchJson)
* support mobile/tablette/desktop avec tailwind css

## 🌟 Fonctionnalités implémentées

* **authentification** : inscription, connexion, déconnexion
* **gestion des récits** : création, édition et suppression de passages
* **choix interactifs** : options variables à chaque étape
* **fins multiples** : plusieurs dénouements selon les décisions
* **journal de progression** : suivi des passages consultés et des choix effectués

## 📚 Modèle de données

| entité         | champs clés                                 | description                                 |
| -------------- | ------------------------------------------- | ------------------------------------------- |
| users          | id, name, email, password, role             | comptes utilisateurs                        |
| stories        | id, title, description,                     | titres et descriptions des histoires        |
| passages       | id, title, content, order                   | contenus narratifs                          |
| choices        | id, passage\_id, content, next\_passage\_id   | options de navigation entre passages        |

## 🚀 Guide d'installation

1. cloner le dépôt

   ```bash
   git clone <https://github.com/jfvrn/ProjetLaravue>
   cd ProjetLaravue
   ```
2. installer les dépendances php

   ```bash
   composer install
   ```
3. copier l’environnement et générer une clé

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. configurer la base de données

   * utiliser sqlite (par défaut) :

     ```bash
     touch database/database.sqlite
     ```
   * mettre à jour `DB_CONNECTION` et `DB_DATABASE` dans `.env`
5. exécuter migrations & seeds

   ```bash
   php artisan migrate --seed
   ```
6. installer dépendances js & compiler

   ```bash
   npm install
   npm run dev
   ```
7. lancer le serveur

   ```bash
   php artisan serve
   ```

   puis accéder à `http://localhost:8000`

## 🔐 Sécurité

* protection CSRF sur tous les formulaires
* validation stricte via laravel form requests
* hashage bcrypt des mots de passe
* régénération de session à chaque connexion
* contrôle d’autorisation pour la modification des contenus

## 💻 technologies utilisées

* laravel 12 (php 8.2)
* vue 3 (vite)
* tailwind css
* sqlite (configurable mysql/pgsql)
* composer, npm/yarn, git

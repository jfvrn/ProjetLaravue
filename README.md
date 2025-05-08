# escape game

escape game est une application minimaliste d'histoire interactive de type escape game développée avec laravel 12 (backend) et vue 3 via vite (frontend). cette application permet aux utilisateurs de vivre une expérience immersive en explorant une maison lugubre, en faisant des choix multiples et en découvrant plusieurs fins.

## 📋 table des matières

* ✨ objectifs du projet
* 🛠️ architecture technique
* 🌟 fonctionnalités implémentées
* 📚 modèle de données
* 🚀 guide d'installation
* 🔐 sécurité
* 💻 technologies utilisées
* ⭐ fonctionnalités avancées
* 📝 conclusion

## ✨ objectifs du projet

* proposer une expérience narrative immersive dans un univers mystérieux
* offrir des choix à impact variable pour orienter l’issue de l’aventure
* permettre la création et l’ajout simple de nouveaux passages et énigmes
* assurer une interface réactive et accessible sur tous les appareils
* mettre en pratique un backend robuste (API RESTful) et un frontend performant (SPA)

## 🛠️ architecture technique

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

## 🌟 fonctionnalités implémentées

* **authentification** : inscription, connexion, déconnexion
* **gestion des récits** : création, édition et suppression de passages
* **choix interactifs** : options variables à chaque étape
* **fins multiples** : plusieurs dénouements selon les décisions
* **systeme d’indices** : affichage d’indices optionnels pour aider l’utilisateur
* **journal de progression** : suivi des passages consultés et des choix effectués

## 📚 modèle de données

| entité         | champs clés                                 | description                                 |
| -------------- | ------------------------------------------- | ------------------------------------------- |
| users          | id, name, email, password, role             | comptes utilisateurs                        |
| passages       | id, title, content, order                   | contenus narratifs                          |
| choices        | id, passage\_id, label, next\_passage\_id   | options de navigation entre passages        |
| endings        | id, name, description, condition\_rules     | dénouements possibles selon règles de choix |
| hints          | id, passage\_id, content                    | indices liés à chaque passage               |
| progress\_logs | id, user\_id, passage\_id, choice\_id, seen | historique de lecture et de sélection       |

## 🚀 guide d'installation

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

## 🔐 sécurité

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

## 📝 conclusion

escape game est une implémentation complète d’une application d’histoire interactive combinant backend solide et frontend moderne. elle offre une expérience immersive, sécurisée et facilement extensible pour toute nouvelle aventure.

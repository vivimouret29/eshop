# Documentation projet Laravel événements

---

## I. Setup : Création des fichiers necessaires

Controller : EvenementController

Model : Evenement

Factory : EvenementFactory

Migration : create_permission_tables, create_evenements_table

Seeder : EvenementsTableSeeder, PermissionsTableSeeder

Views : 
- evenements.create, evenements.edit, evenements.show

## II. Base de données

### 1. Factories :

Ajout des colonnes suivantes pour la table événements en utilisant faker pour les données : titre, date, url_image, statut, nbr_participants, description et lieu.

Ajout des colonnes suivantes pour la table user en utilisant faker pour les données : name, email, email_verified_at, url_image, age, login, password et remember_token

### 2. Migrations :

Assignation des types de donnée aux différentes colonnes des tables.

### 3. Seeder :

DatabaseSeeder : utilisation de la fonction "call" pour les tableseeder de permissions, users et evenements.

EvenementsTableSeeder : Récupération des users inscrits et affection d'événement.

Création des roles Admin et inscrit dans la table PermissionsTableSeeder.

## II. MVC

### 1. Models :

Evenement : Ajout de la fonction "user()" avec à l'intérieur belongsTo afin d'affecter des événéments aux users.

User : Ajout de la fonction "evenements()" avec hasMany afin d'affecter plusieurs événements à un même user.

### 2. Controllers :

Création du CRUD avec les fonctions : create, store, show, edit, update et destroy.

Création du controller User avec show et destroy.

### 3. Views :

home.blade.php :

* Affichage des données de l'utilisateur actuellement connecté avec "Auth::user()"

* Affichage des événements créés par l'utilisateur étant connecté, avec affectation d'une variable contenant la requête permettant de récupérer ses événements. Ainsi que des boutons lui permettant d'afficher l'événement en détail, un autre pour le modifier ainsi qu'un autre pour le supprimer.

welcome.blade.php :

* Affichage des événements contenu par la bdd triés par date de l'événement du plus proche au plus lointain.

show.blade.php :

Le bouton détails pointe vers cette view, elle affiche toutes les caractéristiques de l'événement ainsi qu'un bouton pour participer.

Une requête est effectué pour comparer la table user et événement afin d'afficher le nom du créateur.

### 4. Routes :

Dans le fichier web.php, redirection vers la page d'accueil, redirection vers le home, intégration des resources pour le model événement et requête afin de supprimer un événement.
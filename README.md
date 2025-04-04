# PHP - Gestion des Assignments


## Gestion des branches GitHub

### Création et utilisation d’une branche

1. **Créer une nouvelle branche** et basculer dessus : `git checkout -b nom_de_la_branche`
2. **Vérifier la branche actuelle** : `git branch`
3. **Ajouter et valider les modifications** :
   - `git add .`
   - `git commit -m "Message des modifications"`
4. **Pousser la branche sur GitHub** : `git push -u origin nom_de_la_branche`
5. **Changer de branche** : `git checkout main`
6. **Fusionner la branche avec main** : `git merge nom_de_la_branche`
7. **Supprimer une branche locale** : `git branch -d nom_de_la_branche`
8. **Supprimer une branche sur GitHub** : `git push origin --delete nom_de_la_branche`


### Configuration de la base de données

1. **Créer une base de données** nommée `assignment_db`.
2. **Créer une table** nommée `assignments` avec les champs nécessaires.
3. **Créer un fichier de configuration** (`config.php`) pour gérer la connexion à la base de données.
4. **Inclure le fichier de configuration** dans les autres fichiers en utilisant `require` ou `include`.
5. **Gérer les exceptions** (`Exception`) pour tester la connexion à l’aide de `PDO`.

#### Gestion des formulaires

6. Vérifier si la méthode `POST` est utilisée dans le formulaire.
7. Stocker les valeurs de `$_POST` dans des variables pour chaque champ du formulaire.
8. **Assainir les entrées utilisateur** pour éviter les failles **XSS** (Cross-Site Scripting).
9. Rendre les champs **obligatoires** afin d'éviter les soumissions vides.
10. **Valider la date** avec `DateTime` et l’enregistrer au format `Y-m-d`.
11. **Effectuer une insertion sécurisée** des données dans la base avec des requêtes préparées.
12. **Gérer les erreurs** avec un système de **journalisation** (`try/catch`).




### Gestion des fichiers (uploads)
13. Créer un dossier `uploads` pour stocker les fichiers soumis par les utilisateurs.
    
**Pour aller Plus loin**

15. **Valider le numéro d’étudiant** (chiffres uniquement) avec `ctype_digit()`.
16. Sécuriser les fichiers en **autorisant uniquement certains types** (`pdf`, `doc`, `jpg`, etc.).
17. Définir une **taille maximale** de fichier à `2MB`.
18. Vérifier le **type et la taille du fichier** avant l’upload.
19. Définir un **nom unique** pour chaque fichier et utiliser un dossier sécurisé.
20. Déplacer le fichier en toute sécurité avec `move_uploaded_file()`.
21. Stocker le **chemin relatif** du fichier dans la base de données (meilleure pratique).

### Améliorations possibles

- Ajouter un système d'authentification pour sécuriser l'accès aux fichiers et aux données.
- Ajouter des logs pour suivre les erreurs et événements critiques.

---

**A vous de jouée Bonne chance !**


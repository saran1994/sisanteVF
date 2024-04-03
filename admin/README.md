# horloge-javascript
TUTORIEL : CREER UNE HORLOGE NUMERIQUE - HTML, CSS & Javascript - Wikodemedias

Hello tout le monde ! Dans ce TUTO, nous allons créer étape par étape une horloge numérique au design moderne.

On commence par créer une structure HTML très simple avec un élément destiné à contenir l'heure, et un élément destiné à contenir la date.
La partie CSS est bien sûr entièrement customisable selon vos goûts. J'ai choisi un style plutôt épuré, simple et moderne pour ce tuto. 

Pour la partie Javascript, c'est tout le côté dynamique qui est géré : 
- Récupérer la date (date complète récupérée sur votre ordinateur) et la stocker dans une nouvelle variable : 
	var today = new Date();
- De cette date, on en tire chaque élément. J'ai décidé de tirer tout ce qui était possible : heure, minutes, secondes, jour, mois, année ... Dans le but de vous montrer toutes les méthodes associées et comment le faire concrètement !
- Associer les données à des mots : avec les méthodes utilisées, le jour de la semaine et le mois de l'année sont retournés sous forme de numéro. Pour les transformer en mot (Lundi, Mardi ... Janvier, Février ...) il est nécessaire de passer par des listes. Là encore, tout est expliqué dans le tuto ;)
- Affichage dans la page web : en sélectionnant les éléments HTML dans lesquels on souhaite intégrer nos données, puis en utilisant la méthode .textContent();

La vidéo sera sur ma chaine youtube ;)

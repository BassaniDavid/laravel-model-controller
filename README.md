# Movies

## Obiettivo: creare un interazione con il database utilizzando Eloquent, l’ORM di Laravel.

### Milestone 1:

-   Creare un nuovo progetto Laravel
-   tramite MySQL Workbench creare un nuovo database laravel_model_controller
-   Importare nel database la tabella `movies` presente in `file db`
-   inserire le credenziali per il database nel file .env

### Milestone 2:

-   Creare un model Movie.php col comando `php artisan make:model Movie`
-   Creare un controller che gestirà la rotta `/` col comando
    `php artisan make:controller Guest/PageController`
-   All’interno della funzione index() del controller, recuperare tutti i film dal database e passarli alla view, che quindi li visualizzerà a schermo, tramite delle card.

### Bonus

Inventare una grafica a piacere per il sito e realizzarne il layout, aggiungendo lo stile con SASS.

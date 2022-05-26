#SET UP THE PROJETCT :


1.composer install
2.npm install
3.faire les migrations base de données :
    Adresse de la base de données à renseigné dans le .env : DATABASE_URL="mysql://root:root@127.0.0.1:3306/tpSymfony?serverVersion=10.8.3-MariaDB&charset=utf8mb4"
  - 3.1 symfony console make:migration
  - 3.2 symfony console doctrine:migrations:migrate

-----------------------------------------------------------------------------------------------------------------------------------------------
Si il manque les validateurs apres installation du composer install faire la commande :

 -composer require symfony/validator doctrine/annotations
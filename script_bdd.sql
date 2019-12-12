/*Pour créer l'utilisateur avec tous les droits en base de données*/

CREATE USER 'bolosse'@'localhost' IDENTIFIED BY 'bolosse';
GRANT ALL PRIVILEGES ON * . * TO 'bolosse'@'localhost';
FLUSH PRIVILEGES;

/*Après avoir créer la base via "php bin/console doctrine:database:create", changer les droits de l'utilisateur*/

REVOKE ALL ON * . * FROM 'bolosse'@'localhost';
GRANT ALL PRIVILEGES ON my_movies_lists . * TO 'bolosse'@'localhost';
FLUSH PRIVILEGES;

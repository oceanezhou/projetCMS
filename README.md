# projetCMS

#### Océane ZHOU / Quentin HUBER

Plusieurs problèmes : 

- Docker pas compatible sur Windows Famille ... meme en regardant les tutos, j'ai touché au BIOS pour activer la virtualisation mais toujours rien, mon WSL reste bloqué à 1 malgré la mise la commande en powershell pour passer en 2.
- Git push Logon failed, use ctrl+c to cancel basic credential prompt 
- La wifi (plus de 4G)
- Problèmes de DB

-----

### Architecture MVC du projet

-----

.gitignore
- admin/
    - .htaccess
    - .htpasswd
    - README
- src/
    - app/
        - controllers/
		- controller.php
        - models/
		- model.php
        - views/
		- template.php
		- view.php
    - config/
        - config.php // En cours
        - autoloader.php // Possibilité ...
        - router.php
	- routes.xml
	- routes.php // A voir
	- README
    - lib/
        - README
    - data/
        - db.sql // Possibilité ...
	- database.php
    - web/
        - css/
        - img/
        - scripts/
    - .htaccess
    - index.php
    - require.php

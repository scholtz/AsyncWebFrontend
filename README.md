# AsyncWebFrontend
FrontEnd installation for AsyncWeb

Installation: 
1) Install composer
```bash
curl -sS https://getcomposer.org/installer | php```

2) Install project
```bash
php composer.phar create-project scholtz/async-web-frontend /srv/www/vhosts/MyApp```

3) Set up webserver
then add path your virtual host for the domain in Apache, Nginx, or other webserver to /srv/www/vhosts/MyApp/htdocs

4) Set up project
Set up your settings.php file. Use settings.example.php as example usage file.
# Safe Night

Hey, welcome to the repo of the Safe Night project.

The concept of this project was conceptualized by students of the NEOMA Business School and originally consisted in a native app for a tiny social network in which the users could create events and invite their friends, and feel more comfortable about how safe they come back home thanks to a SOS function.  
This last feature was not developped further yet.  

Instead of being a native app, this project was developped in PHP with the framework Symfony by a group of 4 coding students, which I was in.  
This was the last project of our bootcamp, this is Safe Night.  

If you want to run it to see it by yourself, follow these steps :  

* Make sure to have PHP, mySQL or postgreSQL, Yarn and Composer installed on your computer, and upgraded to latest versions to avoid possible crashes
* You can implement global Symfony command on your OS by installing Symfony Flex from https://symfony.com/download to make things easier. If you don't want to, replace "symfony console" command in the next lines by "php bin/console"  
* Git clone the projet on your local machine  
* In your terminal, move inside the directory that just has been created, and run "composer install" then "yarn install" to install necessary packages  
* Create a copy of the .env file that you will find in the root folder of the project and name it .env.local
* This file is basically a config file that will link the symfony project to the SQL database, and is by default in gitignore for your config ids will not be saved and so be consulted by others.
* In the bottom of this file, there is an uncommented line that is the line to create the link to the database.
* According to your use of mySQL or postgreSQL, uncomment the good line and comment the other.
* In this line, change the host, id and password default values by your connexion ids to your SQL server, and enter a database name
* Return to your terminal and create a database by running command "symfony console doctrine:database:create"
* Load the database schema by running migrations with "symfony console doctrine:migrations:migrate"
* Add content to your database by running fixtures with "symfony console doctrine:fixtures:load"
* Compile assets and stylesheets by running "yarn encore dev"
* Finally, run "symfony server:start" and open a tab in your navigator to your localhost adress, often "https://localhost:8000"

Thanks for reading, I hope you will enjoy the project, don't hesitate sending me a message if you have issues or if you have ideas to improve the project.
Best regards =)

## Previews 
[](./1.png)
[](./2.png)
[](./3.png)
[](./4.png)
[](./5.png)
[](./6.png)
[](./7.png)

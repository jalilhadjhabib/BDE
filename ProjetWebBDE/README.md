# WEB PROJECT

To facilitate the organization and the communication of our BDE, we will realize a site that will manage promotion
of events and an online shop 

## Constraints

 - responsive website
 - respect for the graphic charter
 - good SEO
 - Use of AJAX
 - Each generated page must be valid by W3C
 - No use of CMS
 - An API must be put in place for a possible future
integration with an external service or application (s).

## Tasks

 1. Front-end → to realize the integrality of visual
 2. MCD/DB → to design the integrality of database
 3. Back-end 

# Deployment

## Necessary tools

 - Php
 - Laravel
 - composer
 - MySQL

## Installation

First of all, you need to install « composer » which is the software to manage Laravel dependances and the last version of php. The process to install it is simple since it only needs to download and execute a .exe file. Here are the link to download it:
- https://getcomposer.org/download/ (composer)
	- https://secure.php.net/downloads.php (php)


Then, for the database, it simply needs to download a web development platform like WAMP or XAMPP, depending on which Operating System you are. It’s a necessity to try the website locally since it’s not directly linked to a database in the cloud. Here are the download links:
- https://www.apachefriends.org/fr/index.html (XAMPP)
	- http://www.wampserver.com/ (WAMP)

Next, download the integrality of the source code through GitHub, get into the directory and open the “.env.example” file. Once open, change the name of the database, the username and the password, save the file as “.env”:

DB_CONNECTION=mysql  
	DB_HOST=127.0.0.1  
	DB_PORT=3306  
	DB_DATABASE=golf_alpha_bravo -> modify 
	DB_USERNAME=root  -> modify
	DB_PASSWORD= -> modify

After, launch your MySQL server through WAMP or XAMPP and create a database of the same name.

Get back in the project directory, launch a CMD from it and write the following commands:

composer install //install the dependances to your project

composer update //update the dependances
	
	php artisan migrate:fresh //create the tables in the database
	
	php artisan db:seed //fill the tables

	php artisan serve // launch the server

Finally, open your browser and go to the following url: localhost:8000

You have now access to the website.

## Functionalities
On the website, it is possible to:
-	Register
-	Connect once you are registered
-	Suggest an idea 
-	Look all the idea suggested by users
-	Vote for one or several ideas
-	Add a picture to a past event
-	Add a comment to an event
-	Take a look to the picture and comments of a past event

Then, if you are a BDE member, you can:
-	Add an event with a description, an image and a date
-	Access to all the suggested event in the “idea box” section
-	Select a suggested event and add it to the future events
-	Access to a list of users that participate to a specific event and download it as a PDF
-	Manage the pictures and comments 

Or if you are CESI employee, you can:
-	Notify all the BDE members that some pictures, comments or events are against the school policy.
-	Navigate on the website with the same rights as students
-	Download the photos posted by the students and the BDE members

Finally, for the shop :
-	The BDE members can add or delete products, with a name, a description, a price and order them by categories
-	The connected students can make an order by adding products to a cart and pay at the end
-	When an order is done by a student, the BDE members receive a notification by mail

# TEAM

The project has been realized by Paul Fontaine, Clément Lesage, Arthur Delamare and Gabriel Lesourd.

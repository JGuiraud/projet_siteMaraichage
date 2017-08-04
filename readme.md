## About the project

This project aims to allow a market gardener to highlight themselves and their activity through their products against the competition. It's been developed with the PHP framework Laravel on a linux environment.

The website has two sections (front and admin views).

### Admin | This section is specifically designed for the gardener themselves :
- They can from there see the list of the vegetables they produce as well as add/delete entries.
- They can see all the recipes they have in the database as well as add/delete entries.
- They can search through the vegetables and add them to a basket in order to display the most matching recipes. They can then print them and/or add one to the front view.
- They can add/delete the markets' locations where they go. That will update a map.

### Front | The end user can navigate through 3 sections: The garderner suggestions, the markets, the farm.
- The garderner suggestions : The recipe that has been previously highlighted is displayed there as well as the optional comment from the gardener.
- The markets : All the markets to which the gardener goes are displayed on a map where pins can be clicked to show details.
- The farm : A short description of the farm as well as a instagram feed is displayed.

## Installation

After having cloned/forked/downloaded the project:
- Create and setup a databse
- Duplicate the .env.example file and rename it to .env
- Customise : DB_DATABASE | DB_USERNAME | DB_PASSWORD
- Run :
    - ```composer install```
    - ```php artisan key:generate```
    - ```php artisan migrate```
    - ```php artisan db:seed```
    - ```php artisan serve```
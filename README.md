# Getting Started with PHP

#### Epicodus PHP Week 1, 3, 4 Lab, 2/7,21/2017

#### By Andrew Devlin, Benjamin T. Seaver and Ash Laidlaw, Dan Lauby
#### Revised to use DB by Benjamin Seaver

## Description

This lab is about experimenting with PHP and many to many SQL relationships.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org/ for details on installing _composer_.
* See https://mamp.info/ for details on installing _MAMP_.
* Use MAMP `http://localhost:8888/phpmyadmin/` and `to_do.sql.zip` to import a `to_do` database.
* Use same MAMP website to copy to_do database to `to_do_test` database (if you would like to try PHPUnit tests).
* Use MAMP
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* To run PHPUnit tests from root > `vendor/bin/phpunit tests`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* MAMP
* mySQL
* Composer
* PHPUnit
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017  Andrew Devlin, Benjamin T. Seaver, Dan Lauby and Ash Laidlaw.

## License
* MIT

## Specifications
* Silex and Twig Dependencies
* Initial Silex framework
* Twig forms
* Tasks class
* Create Tasks Class with description
* Add Tasks functionality to routes

* Adapt to MySQL database for persistent storage
* Modify Tasks Class to use DB
* Build TaskTest cases:
    * PHPUnit fixture: test->setUp() does Tasks::deleteAll()
    * PHPUnit fixture: test->tearDown does test->setUp();
    * save: new_task->save() equals
    * Save() "Hello"
    * deleteAll()
    * getAll()
    * Verify count of 0
    * Save() 3 "Get up", "Pack Lunch", "Go to School"
    * getAll()
    * Verify Count of three in DB
    * Verify First is "Get up"
    * Verify Last is "Go to School"
    * Verify
    * Verify retrieveById(2)
    Retrieve all
    V

|Behavior|Input|Output|
|--------|-----|------|
|$x = new Job()|"myTitle","myDescription","myContact"|"myTitle","myDescription","myContact"|

* Create a Contact class

|Behavior|Input|Output|
|--------|-----|------|
|$x = new Contact()|"myName","myAddress","myPhoneNumber"|"myName","myAddress","myPhoneNumber"| -->

* End specifications

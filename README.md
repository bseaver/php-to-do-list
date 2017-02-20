# Getting Started with PHP

#### Epicodus PHP Week 1 Lab, 2/7/2017

#### By Benjamin T. Seaver and Dan Lauby
#### Revised to use DB by Benjamin Seaver

## Description

This lab is about experimenting with PHP and installing the silex and Twig frameworks

## Setup/Installation Requirements
* Clone project
* run `composer install --prefer-source --no-interaction` from project root
* start PHP in web folder to use Silex

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* composer
* Silex
* Twig
* HTML
* CSS
* JavaScript
* jQuery
* Bootstrap
* git

## Copyright (c)
* 2017 Benjamin T. Seaver and Dan Lauby

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

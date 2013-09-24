winnipeg-php-silex-demo
=======================

Demo Repository for the Winnipeg PHP Users Group Silex/Twig/Composer/GitHub presentation

Chris Pappas [pappas.christopher@gmail.com](pappas.christopher@gmail.com)
Web Developer and Front-End Specialist
Tipping Canoe

Prerequisites
-------------

* A web server with PHP 5.3 or greater. Ideally you will have Apache to easily take advantage of the included `.htaccess`
file for URL rewriting.
* [Composer](http://getcomposer.org/) - PHP source package management system
* [Git](http://git-scm.com/) - Distributed Version Control System (DVCS)

Getting started
---------------

Once you have cloned this repository, run `composer install` from the project root to install all dependencies via
[Composer](http://getcomposer.org/).

Serving the Web App
-------------------

Figuring out how to get a virtual host set up to serve a PHP website is left as an exercise for the reader. There are
LOTS of different ways to do this (XAMPP/MAMP, local development VM, PHP 5.4 Web Server etc.)

Point your virtual host's public root at the `/web` directory, and make sure `index.php` is set to be the primary
`DirectoryIndex` in Apache.
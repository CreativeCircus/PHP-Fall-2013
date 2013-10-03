# Web Development 5 - Intro to PHP
###### Instructor: Daniel Seripap (daniel.seripap@creativecircus.edu)

## Overview

This is a 10-week class that teaches procedural PHP development with emphasis on MySQL database integration and server-side application development.

## Required Materials

The following list of materials/digital assets are **REQUIRED** for this class.

+ Outfacing Domain Name
+ Web Hosting for domain name
+ Github account (http://www.github.com)
+ A Computer (laptop/desktop, personal or lab)
+ IDE (Notepad/SublimeText)

## Optional Materials

This is a list of optional materials that *may* help you along the way. These are just references - you are not required to download/purchase any of these items.

+ [iTerm2](http://www.iterm2.com)
+ [CodeKit](incident57.com/codekit/‎)

## Before you start

+ Make sure you have a domain name with dedicated hosting and a dedicated subdirectory for this class. Even better if you can create a subdomain for this class. Subdomain or subdirectory root should be named **ccphp**

**THIS IS AN IMPERATIVE REQUIREMENT**

+ Make sure your computer is up to date and will not be sluggish or cause any issues to you for the next 10 weeks. There are lab computers available for you to use, but if you decide to use your own computer, it is on you to backup at will.

## Attendance Policy

If you are planning on leaving early or missing class, please notify the instructor prior to class. If you miss **2 consecutive classes**, you will fail this course.

## Disruptances

Please handle all phone calls, text messages, or any other outside activites at a different time. Unless your wife is having a baby, kid is sick, or an immediate emergency is imminante, please allocate the 3 hours for the class.

## Tentative Schedule

### Week 1 - Introduction to PHP

#### Overview

Introduction to peers, learning how to simplify learning of PHP (tools of the trade), running a local development environment, basic overview of source code control (git), introduction to PHP using procedual development, coding standards, references.

##### Agenda

* Introduction
* Tools of the Trade
* Running and configuring a local L/WAMP Server
* Quick overview/basic fundamentals of source code versioning
* Introduction to PHP (functions, variables, procedual, built in functions, JSvsPHP)
* How to use PHP.NET
* Coding Standards
* References

##### Homework

Develop an index.php page that is HTML5 compliant that introduces you with a link to a contact us page.

###### Acceptance Criteria

* index.php - Has a picture of yourself, has your name, and a biography of yourself. It also links to a contact us page. Must have a different background color than contact.php.
* contact.php - Has 3 text fields: Name, Email, and Comments (multiline field). Has 2 buttons: submit (does nothing), reset (clears text fields)
* proccess.php - Blank for now

### Week 2 - include(), GET/POST, server-side validation, sending emails

## Overview###
Learn how to include differen PHP files across a platform, server-side validation of your contact form, and sending an email using your contact form.

##### Agenda

* The include() method
* The require() method
* GET/POST data
* Validating POST data
* Sending email using mail()
* Sending email using gmail's smtp server

##### Homework

With last weeks homework, integrate server side validation and insure the the form sends the email with the data that was input in the form. Transform your website dynamically using include().

###### Acceptance Criteria

* index.php - routes user dynamically to requested pages
* contact.php - loads dynamically
* proccess.php - must validate text fields from contact.php and insure that Name and Email are required fields. Email must be validated to insure its an email address. Must also send email with a confirmation message stating to the user that the email has been sent successfully. Must also have a graceful fail message.

### Week 4 - Integrating with a database

#### Overview

Overview of databasing with PHP. Connecting to a database, creating a table, modifying a table, dropping a table with standard queries. Using PhpMyAdmin to manage database.

##### Agenda

* Relational database design overview
* Connecting to local database
* Connecting to external database
* Creating a table using PHP
* Dropping a table using PHP
* Installing and using PhpMyAdmin

##### Homework

With the developed contact us form from last week, integrate database submission with the data that was inputted from the form.

###### Acceptance Criteria

* proccess.php - submits data consistently to a table with a unique id assigned to each submission

### Week 5 - ubmitting data to SQL, Modifying SQL Tables / Lab Project Introduction

#### Overview

Brainstorm application ideas, develop flow chart of pages, develop wireframes.

##### Homework

Create HTML/CSS template for application wireframe, dynamically load all required pages as just a mockup.

###### Acceptance Criteria

* Application has at least 3 user interaction pages
* Application has an admin section mocked up

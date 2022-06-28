[//]: <> (// This is confusing, I KNOW, so let me explain it to you)
# Laravel CRUD application
A web-based system where a user can log in and out of the system to manage people via CRUD operations.
* Admin
* Form
* Mailtrap

# Instructions
###### Incase it is needed :grin:
:checkered_flag: ```[MAC OS BIG SUR TERMINAL ]```  
Create Database "first" via Mysql Workbench -- 
Called - laravelpropay -- change details in .env

- **root@comp %** ```composer install```
- **root@comp %** ```php artisan migrate --seed```
- **root@comp %** ```php artisan ui bootstrap --auth``` :grin:
- **root@comp %** ```php artisan serve```

[//]: <> (// put here so I dont have to redo it again for another test => copy paste :-/)
[//]: <> (// composer require laravel/ui)
[//]: <> (// php artisan key:generate`)
[//]: <> (// php artisan ui vue --auth`)
[//]: <> (// php artisan session:table)
[//]: <> (// npm install)
[//]: <> (// npm run dev)

###### SHOW ME LOGIN DASHBOARD
:checkered_flag: ```[BROWSER URL - CHANGE PORT]``` 
- <a href="http://127.0.0.1:8000/login">http://127.0.0.1:8000/login</a>

###### CREDENTIALS
```username: admin@test.com```
```passcode: admin```

```username: user@test.com```
```passcode: secret```

:grin: now your logged in...!!!!



# ScreenShots

###### ADMIN LOGIN
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/showtable.png" alt="create contact" width="300" height="150">

###### ADMIN SHOWTABLE
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/admin.png" alt="create contact" width="300" height="150">

###### CONTACT FORM
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/contactform.png" alt="create contact" width="300" height="150">

###### MAILTRAP
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/mailtrap.png" alt="create contact" width="300" height="150">


# Test Instructions
ProPay Assessment
The candidate will need to create the following:

 

A web-based system where a user can log in and out of the system to manage people via CRUD operations.

 

Herewith the fields that need to be managed: (all fields are required)

 

    * Name
    * Surname
    * South African Id Number
    * Mobile Number
    * Email Address
    * Birth Date
    * Language (Single Selection)
    * Interests (Multiple Selection)

 

On capturing a person: An email needs to be sent out to the person captured informing them that they’ve been captured on the system.

 

If using a framework: Fire an event that triggers a job.

If using vanilla PHP: Simply send out an email.

 

Using the following:

 

    PHP >= 7.1.3
    MySQL >= 5.1
    Apache or Nginx (system needs to be able to work on a virtual host)
    HTML, CSS and JavaScript (Bootstrap and jQuery can be leveraged if need be.)

 

Vanilla PHP will be accepted, but it is advantageous to use a modern framework like Laravel. (You’re going to have to really know what you’re doing if you’re going to roll your own functionality)

If you’re using CakePHP, please don’t “bake” everything together.

If you’re using Drupal, Joomla or WordPress: You need not send the assessment. Your journey can safely stop here.


If there are no migrations or seeds, kindly provide the SQL file for us to dump.
The username and password for the web app also need to be provided, please. (We can’t seem to figure out encrypted passwords)

Pro-Tip! Avoid hard-coding values and duplicating code. Spaghetti code is also a big no-no. Hacking someone else’s GitHub / Bitbucket project isn’t going to fly either.

Yet another Pro-Tip! Your application actually needs to work. Clear all migrations, rerun and test your application again.

Kindly provide your assessment via any cloud platform after completion. Our mail server blocks any incoming compressed files.

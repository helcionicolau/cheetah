CHEETAH FRAMEWORK 

Created by Helcio Nicolau
Date of creation: 01/05/2023
Time creation: 23h...

Note: The architeture pattern used to build this framework was MVC.

Just for Studies purposes!!


ABOUT THE NAME

So, I've named Cheetah 'cuz of my cat, this's her name,"her" 'cuz is female. And I always
would want to build my own programming languages, but while I didn't developed mine, so we
have at least a framework for now, it doesn't mean I won't develop my language.

RUNNING THE PROJECT

I'm using the PHP 7.4.33 version to build up the framework and run, once the PHP Community
has released a server in the back of own PHP by writing:

CMD> php -S localhost:100 *(this command is used to run my framework, and the number there, is the port showing out my project interface)

***********************************************************************
Let's talk about "Composer and Autoload PSR-4" used in my framework

We'll configure the specification PRS-4 for the Autoload system of composer.
What does it mean!? So, as we already have all necessary MVC layers implemented into of our project architeture

'Cuz of this all stuffs, we'll use the "Composer" that is a 'Dependency Manager For PHP'
by it, we can bring external package into our framework.

So, I have to install the compose in my framework folder by this command in the cmd> 
: php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

Once downloaded, I need to verify if was completed downloaded the 'composer-setup.php' by this command>
: php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

"Installer verified" was the success download message. Now I can execute the script with this command>
: php composer-setup.php

Once installed, we can delete 'composer-setup.php' file to continue with our development...

So, now we'll configure our file 'composer.json' with some informations that'll be base for the Composer Installation into our project.
once done, need to execute the command: "php composer.phar install"


Now, we'll configure our framework 'routes'


We need to configure the '.htaccess' file. It works as a parametrization file in our apache.

Then we got the 'Controllers'


Now, in our MF*(Where stands methods relactive in the Cheetah Framework) folder we create an other folder and call it by 'Bootstrap.php', that will be stablished as 'Applications initialization scripts' <where the'all stand>


Then, must work on Views Configuration and Folder at once time

So, as we've created 'IndexController', we'll need to create a folder called 'index' and into this stands two files called:
'index.phtml ^ sobreNos.phtml'. And why 'phtml' ? 'Cuz frameworks use file with these extensions because in the same file can be writed HTML and PHP Codes...

One of the objectives of this Framework is about bring all "No functional Requirements" of the application to be associated with its own(Cheetah Framework). What mades this framework a Framework are the "No Functionals Requirements"


We still have to separate the "Functional and Not Functional" resources between Framework and Applications

Into the "MF" Folder of the Framework, I'll create the Folder "Controller", and into the "Controller" create the file called 'Action'
where stands all necessaries functionalities that others will use to render their functions and methods.

So, we need create a default '../App/Views/layouts' that will let us customize our applications. For example we can create an e-commerce theme or others. like this u stand free to work separately and the page structure, being conscient about all logics, without have a conflict of codification. Sure, reusing everything possible

Now, we'll see how to implement the logic with the 'Models and Connection with the database'...

So, we create a 'MF\Model\Container' that let us execute 'Controller' work more dinamicaly with the 'Model(coming from DB)' in any time, in any 'Action'. Just using our Static Model from 'Container' to reference which 'Model' we need to return, already objected and with the connection provided.


Then, we finished the first step of our Framework by MVC arquitechture.

MVC arquitechture follows some logics(resources) like "index.php; Connection.php; Route.php"

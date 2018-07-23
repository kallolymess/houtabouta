the default Laravel application structure is intended to provide a great starting point for both large and small applications. Of course, you are free to organize your application however you like. laravel imposes almost no restrictions on whee any given class is located - as long as Composer can autolosd the class. 

the app diectory, as you might expect, contains the core code of your application. We'll explore this directory in more detail soon; however, almost all of the classes in your application will be in this directory.

The bootstrap directory contains the app.php file which bootstraps the framework. This directory also houses a cache directory which contains framework generated files for performance optimization such as the route and services cache files. 

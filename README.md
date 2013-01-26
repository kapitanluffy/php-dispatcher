PHP-Dispatcher
==============

a boilerplate for creating a front-end controller for your php web apps

Anatomy of the URL
---

`http://my_awesome_site/controller/method/query_1/query_2/query_3`

The Config File
---

  * Base URL
  
    This URL serves as the *root* link of your site. Remember to remove the trailing slash :)

  * My App
  
    The directory pointing to your *controllers* (if you are using MVC or such).

  * Default Controller
  
    The controller that will be loaded automatically (if none is specified in the URL).

  * Default Action
  
    Same as the Default Controller.

The htaccess file
---

You can edit the htaccess file to remove the `index.php` in your URL

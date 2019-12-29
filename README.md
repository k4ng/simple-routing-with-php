# Simple Rooting With PHP
An example how to make a rooting URL in PHP Language

### Instalation
- Clone this repo ```git clone https://github.com/k4ng/simple-rooting-with-php.git```
- Move to htdocs
- Open ```index.php```
- Change path project dir ```/x-kang/simple-rooting-with-php``` in variable ```$project_location``` 
- Done, You can try to access in your browser now :)

### Sample Pages
- Home Page ```localhost/PROJECT_DIR/``` 
- About Page ```localhost/PROJECT_DIR/about```
- Contact Page ```localhost/PROJECT_DIR/contact```

### ADD And Remove PAGE
If you want to add or remove page you can added *new CASE* in this part code in ```index.php```
``` php 
switch ($request) {
    case $me.'/' :
        require "views/home.php";
        break;
    case $me.'/about' :
        require "views/about.php";
        break;
    case $me.'/contact' :
        require "views/contact.php";
        break;
    default:
        http_response_code(404);
        echo "404";
        break;
}
```



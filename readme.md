# Jelly Framework

Thanks for using this framework <3. It allows you to start any kind of MVC project.

## Initial config

### 1. public/.htaccess

Change `REWRITE_BASE` path to `/YOUR_PROJECT_NAME/public`

### 2. app/config/config.php

Change global variables values.

Database values :
```
// DB Params
define('DB_HOST', 'localhost');
define('DB_NAME', '_DB_NAME_');
define('DB_USER', '_USER_');
define('DB_PASS', '_PASS_');
```

URL and site name :
```
// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', '_URL_');

// Site Name
define('SITENAME', '_SITENAME_');
```

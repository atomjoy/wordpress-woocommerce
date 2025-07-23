# Wordpress Woocommerce Xampp 

Gdy są dzine błędy w przeglądarce podczas aktywacji pluginu. Aktualizuj wersję pluginu woocommerce do 10.0.4 i nadpisz php w xampp na wersję 8.3 (Pobierz php 8.3 dla windows ze strony plik zip wyłącz xampp i nadpisz w xampp/php następnie uruchom xampp).

## Php

```sh
https://windows.php.net/downloads/releases/php-8.3.23-Win32-vs16-x64.zip
https://windows.php.net/downloads/releases/php-8.4.10-Win32-vs17-x64.zip
```

## Tutorial

```sh
https://fullsiteediting.com/lessons/preparations-quick-start-guide
https://make.wordpress.org/core/2023/07/14/configuring-development-mode-in-6-3
https://developer.wordpress.org/advanced-administration/before-install/howto-install
```

## Wp config

```php
<?php
# Memory limit
define( 'WP_MEMORY_LIMIT', '512M' );

# Dev mode
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_ENVIRONMENT_TYPE', 'local' );
define( 'WP_DEVELOPMENT_MODE', 'theme' );

// Wp theme
if ( wp_is_development_mode( 'theme' ) ) {
    /*
     * This could contain some logic that only applies when developing a theme
     * on the site.
     */
}
```

## Mysql

```sql
# Add user db
CREATE DATABASE IF NOT EXISTS wordpress CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'%' IDENTIFIED BY 'Password123#';
FLUSH PRIVILEGES;

# Change password
ALTER USER 'wordpress'@'%' IDENTIFIED BY 'Password123#';
FLUSH PRIVILEGES;
```

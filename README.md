# Error Pages
Add error pages to your virtual machines !

## Installation

First, run the following command: `cd /etc/apache2/conf-enabled`
Open the `localized-error-pages.conf` file and drag the contents of the folder just below the first default errors.

### Debian view
![Debian conf view](https://media.discordapp.net/attachments/733366929561092157/1082555021427736586/image.png?width=1115&height=603)

Go to the `html` file and run the following command
```bash
mkdir /errors
```
This folder will contain the HTML files of our errors.

Now, still in the `html` folder, run the following commands
```bash
mkdir /_errors
```
This will allow us to access the CSS of HTML files.
Don't forget to restart the apache service.
```bash
service apache2 restart
```
The last step is to drag and drop the content of this repository into the folders you just created.

Once the installation is complete, have fun testing your error pages! Here is an example code to test these pages.

```php
<?php
// Récupérer l'adresse IP de l'utilisateur
$ip = $_SERVER['REMOTE_ADDR'];

// Vérifier si l'adresse IP de l'utilisateur est différente de ALLOWED_IP
if ($ip !== 'ALLOWED_IP') {
    // Rediriger l'utilisateur vers une page d'erreur ou afficher un message
    header('Location: /errors/403.html');
    exit;
}

?>

```



## Screenshots
### 502 Error Page
![502 error page](screenshots/screenshot-1.png)

### 404 Error Page
![404 Error Page](screenshots/screenshot-2.png)

### 418 - I'm a Teapot
![418 Error Page](screenshots/screenshot-3.png)

## Authors

- [Hugo T](https://www.github.com/Hugotby)




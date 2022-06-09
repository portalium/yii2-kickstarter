# Install Portalium Application
The Portalium application can be install via composer on terminal.

# Composer create-project
Composer command **create-project** to checkout the portalium-kickstarter application. It is recommended
to run the **create-project** command directly from your **htdocs/www** folder like this:

```bash
composer create-project portalium/portalium-kickstarter
```
The **create-project** command will create a folder (inside of your current folder) named portalium-kickstarter. (This name is changeable) If you want create-project by directory name (ex. portalium), run command like this:
```bash
composer create-project portalium/portalium-kickstarter portalium
```
Also if you want to chekout the special version/branch of portalium-kickstarter application (ex. develop) by cloning the git repositories of packages inside the vendor directory, run command like this:
```bash
composer create-project portalium/portalium-kickstarter:dev-develop portalium  --prefer-source
```

# Init Project for Development
Preapare the database information (db hostname, db name, db username, db password). Run init file in project directory like this:
```
php init
```
Select the option Development. And then configure the database settings in **../common/config/main-local.php** file.

# Migrate Database
After the setting database configuration, run migrate command like this:
```
php yii migrate
```
After successfully base migration, run migrate command for all portalium modules like this:
```
php migration
```

# Access App
You can open application on a single domain so **/** is frontend, **/admin** is backend, **/api** is RESTful web service api. Example links for access to Portalium App:

frontend: http://localhost/portalium-kickstarter

backend: http://localhost/portalium-kickstarter/admin

rest-api: http://localhost/portalium-kickstarter/api

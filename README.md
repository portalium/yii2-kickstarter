# Install Portalium Application
The Portalium application can be install via composer on terminal.

# Composer create-project
Composer command **create-project** to checkout the portalium-kickstarter application. It is recommended
to run the **create-project** command directly from your **htdocs/www** folder like this:

```bash
composer create-project portalium/yii2-kickstarter --stability dev
```
The **create-project** command will create a folder (inside of your current folder) named portalium-kickstarter. (This name is changeable) If you want create-project by directory name (ex. portalium), run command like this:
```bash
composer create-project portalium/yii2-kickstarter portalium --stability dev
```
Also if you want to chekout the special version/branch of portalium-kickstarter application (ex. develop) by cloning the git repositories of packages inside the vendor directory, run command like this:
```bash
composer create-project portalium/yii2-kickstarter:dev-develop portalium  --prefer-source --stability dev
```

# Init Project for Development
Preapare the database information (db hostname, db name, db username, db password). Run init file in project directory like this:
```
php init
```
If you don't want to create indexes in your tables, you can use the following command:
```
php init --noIndex
```
Select the option Development. And then configure the database settings in **../common/config/main-local.php** file.

# Migrate Database
After the setting database configuration, run migrate command like this:
```
php portalium migrate
```
After successfully base migration, run migrate command for all portalium modules like this:
```
php migration
```

# Access App
You can open application on a single domain so **/** is web, **/api** is RESTful web service api. Example links for access to Portalium App:

web: http://localhost/portalium-kickstarter

rest-api: http://localhost/portalium-kickstarter/api

# Issues
## Create Index Error
Description: While setting up on Windows computers, if the container to which the database is connected suddenly shuts down during the creation of database tables and some tables are missing in the database, an error message "Settings not found" is encountered when attempting to access the site.

Solution: To resolve this issue, remove the database and reinstall it using the command 
```
php init --noIndex
```

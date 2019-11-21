# backend-vanilla-php
A simple vanilla PHP boilerplate using the bootstrap pattern of routing requests through index.php, great for small sites that don't really call for a framework or may be on shared hosting and old versions of php

# PHP Bootstrapping Pattern Template

Plain as they come, a small repo to clone when begining projects to following the front controller bootstrapping pattern that MVC frameworks follow. We don't always need or want a framework however, sometimes there is no point in one when making a small 1-2 page application.


Folder Structure (assuming we are @ the root of your application folder) feel free to change this to your needs:

```
app/
  bootstrap.php     --This is a bootstrapping file for loading the app environment.
  lib/              --This is where our code will live.
  public/           --The public folder, the only code/file we will expose to the world with the
    .htaccess(Opt.) --You may not be using htaccess files, in which case you can delete this
    index.php       --The 'front controller', this will be the entry point of our application and where everything get's hit
  share/            --Things that are not part of the application but need to be shared across versions/releases
  vendor/           --This is for third party code, if you are using composer (you should) then composer will manage this folder for you
```

###Optional apache server directives code

If you are using .htaccess you would copy this in, these are basic re-write rules to send all requests recieved by the web server to index.php first:

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [QSA,L]
```


If you are using vhost configurations:
**Update this to match vhost directives**

```
DocumentRoot /path/to/myapp/app/public
<Directory "/path/to/myapp/app/public">
  # other setting here
</Directory>
```


```
"autoload": {
  "psr-4": {
      "SampleApp\\": "app/lib/"
  }
},`
```

The autoload key says that the root of the SampleApp namespace is mapped to the app/lib directory.


```
    "archive": {
        "exclude": ["vendor", ".DS_Store", "*.log"]
    }
```
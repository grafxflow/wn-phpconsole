# wn-phpconsole
PHP Console plugin for Winter CMS.

Based on the original https://github.com/vanyaraspopov/oc-phpconsole

This plugin allows you to execute custom code as in tinker.

## Installing

Amend the following in the root **composer.json**.

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/grafxflow/wn-phpconsole"
    }
],
```

Then run the following:

```
composer require grafxflow/wn-phpconsole
```

```
php artisan migrate
```

### Version:
* 0.1.0:
    - 'Create scripts model'
    - create_scripts_table.php
* 1.0.0:
    - '1st stable version'
* 1.0.1:
    - 'Migrated to Winter CMS'

# wn-phpconsole
PHP Console plugin for Winter CMS.

Based on original https://github.com/vanyaraspopov/oc-phpconsole

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
composer update grafxflow/wn-phpconsole
```

```
php artisan migrate
```

### Version:

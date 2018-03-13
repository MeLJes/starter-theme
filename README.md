![ACKERMAN WP Starter Theme](/preview.png)

# ACKERMAN WP Starter Theme

**ACKERMAN WP** is a basic theme, with all the necessary templates without useless code.

## WP-CONFIG

Place this snippets after opening tags.

```php
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
define( 'NOBLOGREDIRECT', 'http://yoursite' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'IMAGE_EDIT_OVERWRITE', true );
```

> `WP_MEMORY_LIMIT` Sets memory limit for the website

> `WP_MAX_MEMORY_LIMIT` Sets memory limit for the admin area

> `NOBLOGREDIRECT` Redirects non-existing subdomains and subfolders to homepage **(don't forget to change URL)**

> `DISALLOW_FILE_EDIT` Disables the plugin and theme editor

> `DISALLOW_FILE_MODS` Disables the plugin & theme editor PLUS the plugin & theme update

> `IMAGE_EDIT_OVERWRITE` Cleans up image edits

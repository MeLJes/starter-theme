![ACKERMAN WP Starter Theme](/preview.png)

# ACKERMAN WP Starter Theme

**ACKERMAN WP** is a basic theme, with all the necessary templates without useless code.

## WP-CONFIG

Place this snippets after opening tags.

```php
define( 'WP_MEMORY_LIMIT', '256M' );             // --- Sets memory limit for the website
define( 'WP_MAX_MEMORY_LIMIT', '256M' );         // --- Sets memory limit for the admin area
define( 'NOBLOGREDIRECT', 'http://yoursite' );   // --- Redirects non-existing subdomains and subfolders to homepage
define( 'DISALLOW_FILE_EDIT', true );            // --- Disables the plugin and theme editor
define( 'DISALLOW_FILE_MODS', true );            // --- Disables the plugin & theme editor PLUS the plugin & theme update
define( 'IMAGE_EDIT_OVERWRITE', true );          // --- Cleans up image edits
```

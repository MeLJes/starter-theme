![ACKERMAN WP Starter Theme](/preview.png)

# ACKERMAN WP Starter Theme

**ACKERMAN WP** is a basic theme, with all the necessary templates without useless code.

## Setup wp-config

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

---

## Code snippets

1. Add additional classes to the `body` if we are on specific page

    > Add `$body_classes` as argument into `body_class();` function

    ```php
    <?php
      if( is_home() || is_page( 'some-page' ) ):
        $body_classes = array('some-class');
      endif;
    ?>
    ```

2. Get page thumbnail with specific class

    > Should be in loop

    ```php
    <?php if( has_post_thumbnail() ):
      the_post_thumbnail( 'full', array('class' => 'thumbnail') );
    endif; ?>
    ```

3. Get page title, content and URL

    > Should be in loop

    > `the_title` function can contain coma separated tags as arguments, like `'<h1>', '</h1>'`

    ```php
    <?php
      the_title();
      the_content();
    ?>
    ```

    ```php
    <?php echo esc_url( get_permalink() ) ?>
    ```

4. Get menu

    > More arguments [here](https://developer.wordpress.org/reference/functions/wp_nav_menu/)

    ```php
    <?php wp_nav_menu( array(
      'menu' => 'Main menu',
      'container' => false,
      'menu_class' => 'main-menu',
    ) ); ?>
    ```

5. Posts navigation

    > Should be in loop

    ```php
    <?php the_post_navigation( array(
      'screen_reader_text' => __( 'Continue', 'ackerman' ),
      'prev_text' => __( 'Prev', 'ackerman' ),
      'next_text' => __( 'Next', 'ackerman' ),
    ) ); ?>
    ```

6. Other

    > **`<?php get_template_part( 'templates/file', 'name' ); ?>`** Get template part

    > **`<?php bloginfo( 'name' ); ?>`** Get base blog info

    > **`<?php the_custom_logo(); ?>`** Get site logo

    > **`<?php echo esc_url( home_url( '/' ) ); ?>`** Get home page URL

### Other stuff

1. Base `style.css`

    ```css
    /*
      Theme Name: ackerman
      Theme URI: https://github.com/MeLJes/starter-theme
      Author: MeLJes
      Author URI: https://github.com/MeLJes
      Description: Ackerman - Starter WP theme
      Version: 1.0.0
      License: GNU General Public License v2 or later
      License URI: http://www.gnu.org/licenses/gpl-2.0.html
      Text Domain: ackerman
    */
    ```

2. Assign unique template for custom post type

    ```php
    <?php
    /*
    Template Name: Name
    Template Post Type: post, page, custom_type
    */
    ?>
    ```

---

## Development

```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
```

> `WP_DEBUG` Allows you to view errors in your theme

> `WP_DEBUG_DISPLAY` Error messages will display at the top of your site pages

> :warning: Dont forget set to ‘false’ before upload to live!

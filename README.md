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

    ```php
    <?php
      the_title( '<h2>', '</h2>' );
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

    > `<?php get_template_part( 'templates/file', 'name' ); ?>` Get template part

    > `<?php bloginfo( 'name' ); ?>` Get base blog info

    > `<?php the_custom_logo(); ?>` Get site logo

    > `<?php echo esc_url( home_url( '/' ) ); ?>` Get home page URL

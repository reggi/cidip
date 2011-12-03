# CI Dip

-   Original : http://codeigniter.com/wiki/dip_into_CI/
-   Discussion : http://codeigniter.com/forums/viewthread/194386/
-   Tutorial : http://www.youtube.com/watch?v=KCmLseX1uSQ

## Files

Two things must be set they depend on weather or not you have codeigniter within your root directory please consult the beginning of these files respectively.

-   /applications/tools/rdip.php
-   /example.php

## Wordpress Integration

I have included the folder wordpress_insight which are some of the key pieces that make http://reggi.com work using codeigniter & wordpress. This folder is not necessary for the dip to work, just reference files.

If you are using wordpress use:

    <?php get_template_part('header'); ?>

rather than:

    <?php get_header(); ?>
<?php
/*
Template Name: Search
*/
get_header(); ?>

<form action="<?php echo site_url(); ?>" style="padding: 150px 0;">
    <input type="text" name="s">
    <input type="submit" value="search">
</form>

<?php
get_footer();
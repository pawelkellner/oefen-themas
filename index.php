<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<?php
get_header();
?>

    <div class="Contenplek">
        <?php
        if (have_posts()):
            while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>

        <?php endwhile;
        else :
            echo '<p>There are no posts!</p>';
        endif;
        ?>
    </div>

<?php
get_footer();
?>
</body>
</html>
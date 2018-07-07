<?php get_header()?>

<section class="container">

<div class="row">
    <div class="col-xl-7 col-lg-7 col-md-7 col- info">
        <?php the_post()?>
        <h3><?php the_title()?></h3>

        <p>Full Article:</p>
        <p><?php the_content()?></p>

        <div class="bg" style="background-image: url('<?=get_the_post_thumbnail_url();?>'); background-size: contain; min-width: 20vw;min-height: 20vh;background-repeat: no-repeat; margin: 2vh auto;"></div>

        <div class="category">
            Kategoria : <?php the_category();?>
        </div>

        <div class="tags">
            Tagi : <?php the_tags();?>
        </div>

        <div class="date">
            Data : <?php the_time('F j, Y');?>
        </div>

        <div class="author">
            Autor : <?php the_author();?>
        </div>
    </div>
</div>

</section>

<?php get_footer()?>
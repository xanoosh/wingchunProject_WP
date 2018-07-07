<?php get_header()?>

    <section class="container">

        <div class="row">


            <?php	if	(	have_posts()	)	:
                while	(	have_posts()	)	:
                    the_post();	?>


                    <div class="col-xl-7 col-lg-7 col-md-7 col- info">
                        <h3><?php the_title()?></h3>
                        <p><?php the_excerpt()?></p>
                        <a href="<?php the_permalink()?>">
                            <button class="btn btn-light">Read More</button>
                        </a>
                        <div class="excerpt">Data : <?php the_time('F j, Y');?></div>
                        <div class="author">Autor : <?php the_author();?></div>
                    </div>
                <?php	endwhile;	?>
            <?php	else:	?>
                <p>brak wpisów</p>
            <?php	endif;	?>


        </div>



        <div class="container">
            <div class="row">


            <div class="col-xl-7 col-lg-7 col-md-7 col- contact-form" id="Form">

                <div class="form-group">
                    <label>Name
                    <input type="text" class="form-control">
                    </label>
                </div>

                <div class="form-group">
                    <label>Email
                    <input type="email" class="form-control">
                    </label>
                </div>

                <div class="form-group">
                    <label>Message
                    <textarea  class="form-control" rows="7"></textarea>
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Sign in</button>
                </div>
                <a href="#Start">
                    <button class="btn btn-light">Scroll Up</button>
                </a>


            </div>
        </div>
        </div>

    <?php get_footer()?>


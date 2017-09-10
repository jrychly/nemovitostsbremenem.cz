<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-lg-12">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <h1 class="page-header">
                    <?php the_title(); ?>
                    <small>od <?php the_author() ?></small>
                </h1>

                <!-- First Blog Post -->
                
                <p><span class="glyphicon glyphicon-time"></span> <?php the_time('j.n.Y') ?></p>
                <hr>
                <p><?php the_content(); ?></p>

                <hr>

                <?php endwhile; ?> 

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="/">&larr; Zpět na hlavní stránku</a>
                    </li>
                </ul>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <?php get_footer(); ?>
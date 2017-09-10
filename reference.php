<?php
 
/*
 Template Name: Reference page
 */
 
get_header();
?>

<nav class="navbar navbar-toggleable-md navbar-inverse" id="menu">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#menu"><span class="fa-stack fa-purple"></a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Domů</span></a>
      </li><li class="nav-item">
        <a class="nav-link" href="/jak-na-to">Jak na to?</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/reference">Reference <span class="sr-only">(current)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kontakt">Kontakt</a>
      </li>
    </ul>
  </div>
</nav> 

<div class="top-h">
	<div class="money"><p class="text-money">Reference od lidí, kteří si nás vybrali.</p></div>
</div>

<?php
        if(have_posts()):
            while (have_posts()):the_post(); ?>
                <div class="container text-first">
    <?php the_content();?>
</div>
            <?php
            endwhile;
        else:
            echo "Není zde žádný příspěvek";
        endif;
        ?>

<?php get_footer();?>
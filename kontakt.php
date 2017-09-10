<?php

    mb_internal_encoding("UTF-8");

    $hlaska = '';
    if ($_POST)
    {
        if (isset($_POST['jmeno']) && $_POST['jmeno'] &&
      isset($_POST['email']) && $_POST['email'] &&
      isset($_POST['zprava']) && $_POST['zprava'] &&
      isset($_POST['rok']) && $_POST['rok'] == date('Y'))
        {
            $hlavicka = 'From:' . $_POST['email'];
            $hlavicka .= "\nMIME-Version: 1.0\n";
            $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
            $adresa = 'info@nemovitostsbremenem.cz';
            $predmet = "Nová zpráva z webového formuláře";
            $uspech = mb_send_mail($adresa, $predmet, $_POST['zprava'], $hlavicka);
            if ($uspech)
            {
                $hlaska = '<div class="alert alert-success"> Email byl úspěšně odeslán, brzy vám odpovíme. </div>';
            }
            else
                $hlaska = '<div class="alert alert-warning"> Email není správně vyplněný, zkontrolujte správnost! </div>';
        }
        else 
            $hlaska = '<div class="alert alert-danger"> Formulář není správně vyplněný! </div>';
    }

?>

<?php
 
/*
 Template Name: Kontakt page
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
      <li class="nav-item">
        <a class="nav-link" href="/reference">Reference</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/kontakt">Kontakt <span class="sr-only">(current)</a>
      </li>
    </ul>
  </div>
</nav> 


<div class="container">
    <?php if(have_posts()):
    while (have_posts()):the_post(); ?>
        <?php the_content();?>
    <?php
    endwhile;
else:
    echo "Není zde žádný příspěvek";
endif;
?>
</div>

<div class="container formik formularik"><h4 style="text-align: center;">Kontaktní formulář:</h4></div>

<div class="container col-lg-6"> <?php 
            if ($hlaska)
                echo('<p>' . $hlaska . '</p>');
        ?><form method="POST">
          <div class="form-group">
    <label class="text-form">Jméno a příjmení:</label>
    <input name="jmeno" type="text" class="form-control" placeholder="Vložte jméno">
  </div>

  <div class="form-group">
    <label class="text-form">Email:</label>
    <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Vložte email">
  </div>

  <div class="form-group">
    <label class="text-form">Zpráva:</label>
    <input name="zprava" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Vložte Zprávu">
  </div>

  <div class="form-group">
    <label class="text-form">Rok:</label>
    <input name="rok" type="number" class="form-control" aria-describedby="emailHelp" placeholder="Vložte aktuální rok">
  </div>
  <div class="button-kon"><button type="submit" class="btn btn-success btn-purple-2">Odeslat</button></div>
</div>

<?php get_footer();?>
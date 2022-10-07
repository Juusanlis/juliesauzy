<?php
  get_header(); ?>
<!-- MENU -->
<section class="header_menu sticky top-0 w-full py-4 lg:py-0 md:py-8">

  <div class="header text-white bg-black">
    <div class="container flex items-center left-0 lg:justify-start h-full">

      <ul class="lg:flex items-center h-full p-4 lg:p-0 w-full justify-between text-lg">
        <li class="logo lg:py-8"><a class="header_tag" href="#top">JS</a></li>
        <li class="lg:py-8"><a class="header_tag" href="#top">Présentation</a></li>
        <li class="lg:py-8"><a class="header_tag" href="#portfolio">Portfolio</a></li>
        <li class="lg:py-8"><a class="header_tag" href="#types_projets">Types de projets</a></li>
        <li class="btn_wrapper"><a class="btn_header" href="#me_contacter">Me contacter</a></li>
      </ul>
    </div>

  </div>
</section>

<!-- DAMIER -->
<section id="top" class="damier_menu container lg:min-h-[88vh] flex gap-20 items-center justify-center overflow-hidden">
  <!-- <div class="grid grid-cols-2"> -->

    <div>
      <div class="text leading-tight">
        <h1 class="mb-5">Bienvenue !<br> Je suis Julie Sauzy,<br> <span class="text-dark-corail"> Développeur web freelance.</span></h1>
        <p class="mb-20 my-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie<br> malesuada. Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Curabitur non nulla<br> sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Vivamus suscipit<br> tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. <br>Curabitur aliquet quam id dui posuere blandit. <br>Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id<br> orci porta dapibus. Nulla porttitor accumsan tincidunt.</p>
        <a href="#" class="btn">Télécharger mon CV <i class="fa-solid fa-download"></i></a>
      </div>
    </div>

    <div class="photo w-2/5 h-full">
      <img class="rounded-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg" alt="moi">
    </div>
  <!-- </div> -->
</section>


<!-- PROJETS -->
<section class="projects bg-beige lg:min-h-screen items-center justify-center overflow-hidden py-10 space-y-10">
  <div id="portfolio" class="container mt-10 py-5">

    <div class="title_underline">
      <h2 class="title text-center mb-5">Sites web réalisés, portfolio</h2>
    </div>

    <div class="projects_intro mb-20 my-8">
      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.
                      Curabitur aliquet quam id dui posuere blandit.
                      Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id
                      orci porta dapibus. Nulla porttitor accumsan tincidunt.</p>
    </div>

    <!-- Projet 1 -->
    <div class="projects_damier flex gap-20 items-center justify-center mb-10">
      <div class="img_projects w-[480px] ml-auto">
        <img class="rounded-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/spas.png" alt="">
      </div>

      <div class="title_description_projects bg-beige w-1/2">
        <div class="title_underline_projects">
          <h4 class="title_projects mb-5">Spas Aquatechniques</h3>
          <a class="bg-dark-corail p-2 rounded-2xl text-white my-5">Freelance</a>
        </div>
        <div class="description_projects">
          <p class="mt-8">Création d'un site vitrine pour un spécialiste en vente et<br>rénovation de spas aquatechniques.</p>
          <p class="my-5">Environnement : <i class="fa-brands fa-html5 text-2xl"></i>
                                          <i class="fa-brands fa-css3-alt text-2xl"></i>
                                          <i class="fa-brands fa-square-js text-2xl"></i>
                                          <i class="fa-brands fa-php text-2xl"></i>
                                          <i class="fa-brands fa-wordpress text-2xl"></i>
                                          tailwind</p>
          <a target="_blank" href="#" class="see_site my-5">Voir le site <i class="fa-solid fa-arrow-right"></i></a>
        </div>

      </div>
    </div>

    <!-- Projet 2 -->
    <div class="projects_damier flex gap-20 items-center justify-center my-10 py-10">

      <div class="title_description_projects text-right bg-beige w-1/2">
        <div class="title_underline_projects">
          <h4 class="title_projects mb-5">Challenge Accepted</h3>
          <a class="bg-dark-corail p-2 rounded-2xl text-white my-5">Formation</a>
          <a class="bg-dark-green p-2 rounded-2xl text-white my-5">Le Wagon</a>
        </div>
        <div class="description_projects">
          <p class="mt-8">Développement "from scratch" d'une application en équipe:<br> des défis entres amis avec récompenses de points.</p>
          <p class="my-5">Environnement : <i class="fa-brands fa-html5 text-2xl"></i>
                                          <i class="fa-brands fa-css3-alt text-2xl"></i>
                                          <i class="fa-brands fa-square-js text-2xl"></i>
                                          <i class="fa-brands fa-bootstrap text-2xl"></i>
                                          ruby on rails</p>
          <a target="_blank" href="https://www.youtube.com/watch?v=RZQYGEoD-0E&t=25s" class="see_site_corail my-5">Voir la vidéo <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="img_projects w-[480px] mr-auto">
        <img class="rounded-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/challenge.webp" alt="">
      </div>
    </div>

  </div>
</section>

<!-- Types de projets -->
<section class="types_of_projects flex justify-center items-center bg-black text-white py-14 text-center lg:min-h-[65vh]">
  <div id="types_projets" class="container">

    <div class="title pb-20 text-center">
      <h2>Différents types de projets proposés</h2>
    </div>

    <div class="inline-flex text-center justify-evenly w-full h-full">
      <div class="logo_title_descr">
        <i class="fa-solid fa-display text-6xl"></i>
        <h4 class="py-5">Sites vitrine</h4>
        <p class="text-light-white hover:text-white duration-300 transition-all">Présente une entreprise, une marque,<br> ou une activité, sans générer de ventes<br> directes.</p>
      </div>

      <div class="site_wp">
        <i class="fa-brands fa-wordpress-simple text-6xl"></i>
        <h4 class="py-5">Sites WordPress</h4>
        <p class="text-light-white hover:text-white duration-300 transition-all">Site rendu administrable et donc<br> modifiable par le client.</p>
      </div>

      <div class="site_commerce">
        <i class="fa-solid fa-shop text-6xl"></i>
        <h4 class="py-5">Sites commerce</h4>
        <p class="text-light-white hover:text-white duration-300 transition-all">Permet de réaliser des ventes en ligne.</p>
      </div>
    </div>

  </div>

</section>

<!-- Banner contact -->
<section class="banner_contact bg-beige">
  <div class="container py-12 text-center">
    <h3 class="">Un projet à soumettre ?<br>Une question à me poser ?<br><a href="mailto:juliesauzy@outlook.com" class="text-dark-corail">JulieSauzy@outlook.com</a></h3>
  </div>
</section>

<!-- Contact form -->
<section class="contact_form">
  <div id="me_contacter" class="container">
TODO
  </div>

</section>

<!-- Footer -->
<section class="footer bg-black text-center justify-center items-center text-light-white py-5">
  <div class="container">
    <div class="icons text-xl inline-flex justify-evenly w-36 h-full py-3">
      <a href="mailto:juliesauzy@outlook.com"><i class="fa-regular fa-envelope hover:white"></i></a>
      <a target="_blank" href="https://www.linkedin.com/in/julie-sauzy-720583149/"><i class="fa-brands fa-linkedin-in hover:white"></i></a>
      <a target="_blank" href="https://github.com/Juusanlis"><i class="fa-brands fa-github hover:white"></i></a>
    </div>
    <br>
    <hr>
    <br>
    <div class="credits">
      <span>Création de site web WordPress</span><br><span>Design et développement : Julie Sauzy </span>|
      <span> Création site internet Lyon </span>| <a target="_blank" href="https://github.com/Juusanlis">Politique de confidentialité</a></p>
    </div>
  </div>
</section>

<?php
  get_footer(); ?>

<?php
  get_header(); ?>
<!-- MENU -->
<header class="header_menu z-50 sticky top-0 w-full py-4 lg:py-0 md:py-8">
  <div class="header text-white bg-black">
    <nav class="container flex items-center left-0 lg:justify-start h-full">
      <ul class="lg:flex items-center h-full p-4 lg:p-0 w-full justify-between text-lg">
        <li class="logo relative lg:py-8">
          <div class="logo_animation absolute -left-7 bottom-1 top-auto w-12 h-12"></div>
          <div class="logo_animation_2 absolute left-auto top-3.5 -right-6 w-12 h-12"></div>
          <a class="header_tag relative" href="#top">JS</a>
        </li>
        <li class="lg:py-8"><a class="header_tag" href="#top">Présentation</a></li>
        <li class="lg:py-8"><a class="header_tag" href="#portfolio">Portfolio</a></li>
        <li class="lg:py-8"><a class="header_tag" href="#types_projets">Types de projets</a></li>
        <li class="btn_wrapper"><a class="btn_header" href="#me_contacter">Me contacter</a></li>
      </ul>
    </nav>
  </div>
</header>

<main>

  <!-- DAMIER -->
  <section id="top" class="damier_menu container lg:min-h-[88vh] flex gap-20 items-center justify-center overflow-hidden">

        <div class="text leading-tight">
          <h1 class="mb-5">Bienvenue !<br> Je suis Julie Sauzy,<br> <span class="text-dark-corail"> Développeur web freelance.</span></h1>
          <p class="mb-20 my-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie<br> malesuada. Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Curabitur non nulla<br> sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Vivamus suscipit<br> tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. <br>Curabitur aliquet quam id dui posuere blandit. <br>Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id<br> orci porta dapibus. Nulla porttitor accumsan tincidunt.</p>
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/CV_Julie_Sauzy.pdf" download class="btn">Télécharger mon CV <i class="fa-solid fa-download"></i></a>
        </div>

      <div class="photo w-2/5 h-full">
        <img class="rounded-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg" alt="moi">
      </div>
  </section>

  <!-- PROJETS -->
  <section class="projects bg-beige lg:min-h-screen items-center justify-center overflow-hidden py-10 space-y-10">
    <div id="portfolio" class="container mt-10 py-5">

      <div class="title_underline text-center">
        <h2 class="title_project_1 relative mb-5 inline-block z-10">Sites web réalisés, portfolio</h2>
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

        <div class="title_description_projects bg-beige mr-auto w-[480px]">
          <div class="title_underline_projects">
            <h4 class="title_projects mb-5">Spas Aquatechniques</h3>
            <a class="bg-dark-corail p-2 rounded-2xl text-white my-5">Freelance</a>
          </div>
          <div class="description_projects">
            <p class="mt-8">Création d'un site vitrine pour un spécialiste en vente et<br>rénovation de spas aquatechniques.</p>
            <p class="my-5 gap-2 flex items-center">Environnement : <i class="fa-brands fa-html5 text-2xl"></i>
                                            <i class="fa-brands fa-css3-alt text-2xl"></i>
                                            <i class="fa-brands fa-square-js text-2xl"></i>
                                            <i class="fa-brands fa-php text-2xl"></i>
                                            <i class="fa-brands fa-wordpress text-2xl"></i>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tailwind-css-2.svg" class="w-7" alt="tailwind"></p>
            <a target="_blank" href="#" class="see_site my-5 group">Voir le site <i class="fa-solid fa-arrow-right group-hover:pl-2 duration-300 transform"></i></a>
          </div>

        </div>
      </div>

      <!-- Projet 2 -->
      <div class="projects_damier flex gap-20 items-center justify-center my-10 py-10">

        <div class="title_description_projects bg-beige w-[480px] ml-auto">
          <div class="title_underline_projects">
            <h4 class="title_projects mb-5">Challenge Accepted</h3>
            <a class="bg-dark-corail p-2 rounded-2xl text-white my-5">Formation</a>
            <a class="bg-dark-green p-2 rounded-2xl text-white my-5">Le Wagon</a>
          </div>
          <div class="description_projects">
            <p class="mt-8">Développement "from scratch" d'une application en équipe:<br> des défis entres amis avec récompenses de points.</p>
            <p class="my-5 gap-2 flex items-center">Environnement : <i class="fa-brands fa-html5 text-2xl"></i>
                                            <i class="fa-brands fa-css3-alt text-2xl"></i>
                                            <i class="fa-brands fa-square-js text-2xl"></i>
                                            <i class="fa-brands fa-bootstrap text-2xl"></i>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rails.svg" class="w-12" alt="ruby_on_rails"></p>
            <a target="_blank" href="https://www.youtube.com/watch?v=RZQYGEoD-0E&t=25s" class="see_site_corail my-5 group">Voir la vidéo <i class="fa-solid fa-arrow-right group-hover:pl-2 duration-300 transform"></i></a>
          </div>
        </div>

        <div class="img_projects w-[480px] mr-auto">
          <img class="rounded-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Challenge_accepted.png" alt="">
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
  <section class="contact_form my-5 py-10 ">
    <div id="me_contacter" class="container">
      <div class="contactez_nous text-center justify-center items-center">
        <h2 class="title_form relative inline-block my-8">Me contacter</h2>
        <p  class="mb-20 my-8">Un projet de site en tête ? Une question ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec moi !</p>

        <?php
          $form_data = map_deep( $_POST, 'sanitize_text_field' ); // clean values
          $form_data = wp_unslash( $form_data ); // remove slashes in string
          $nom = $form_data['nom'] ?? '';
          $prenom = $form_data['prenom'] ?? '';
          $email = $form_data['email'] ?? '';
          $telephone = $form_data['telephone'] ?? '';
          $message = $form_data['message'] ?? '';
          $trap_for_robot = $form_data['trap_for_robot'] ?? '';
            if($nom && $prenom && $email && $telephone && $message && !$trap_for_robot) :
              ob_start(); ?>
              <p>
                Bonjour,<br>
                <?php echo "$prenom $nom ($telephone)" ?> a essayé de vous contacter et il vous a laissé le message suivant:<br>
                <?php echo $message; ?>
              </p>
              <?php
              $message_mail = ob_get_clean();
              $headers = array('Content-Type: text/html; charset=UTF-8'); // set mail format to HTML
              wp_mail( 'Juliesauzy@outlook.com', 'Message provenant du site', $message_mail, $headers );
              ?>
            <div class="petales_animation fixed h-screen w-screen inset-0 flex items-center justify-center pointer-events-none"></div>

            <script>
              document.addEventListener('DOMContentLoaded', function(){
                function fadeOutEffect() {
                    var fadeTarget = document.querySelector('.petales_animation');
                    var fadeEffect = setInterval(function () {
                        if (!fadeTarget.style.opacity) {
                            fadeTarget.style.opacity = 1;
                        }
                        if (fadeTarget.style.opacity > 0) {
                            fadeTarget.style.opacity -= 0.1;
                        } else {
                            clearInterval(fadeEffect);
                        }
                    }, 200);
                  }

                const animation = lottie.loadAnimation({
                  container: document.querySelector('.petales_animation'),
                  renderer: 'svg',
                  loop: true,
                  autoplay: true,
                  path: '/wp-content/themes/juliesauzy/js/petales.json'
                });
                  setTimeout(() => {
                    fadeOutEffect();
                  }, 800);
                  setTimeout(() => {
                    animation.stop();
                  }, 3000);

              });
            </script>

            <div class="bg-light-green inline-block p-8 mx-auto">
              <p>Votre message a bien été envoyé</p>
            </div>

            <?php else : ?>

        <form action="/#me_contacter" method="post">
          <div class="infos_contact m-10">
            <div class="infos gap-6 grid grid-cols-2 m-auto w-1/2">
              <input class="input_infos" type="text" id="nom" name="nom" placeholder="Nom" required>
              <input class="input_infos" type="text" id="prenom" name="prenom" placeholder="Prénom" required>
              <input class="input_infos" type="email" id="email" name="email" placeholder="Email" required>
              <input class="input_infos" type="telephone" id="telephone" name="telephone" placeholder="Téléphone" required>
              <input class="input_infos hidden" type="text" id="text" name="trap_for_robot">
            </div>

            <div class="message">
              <textarea class="input_infos w-1/2 p-2 justify-center items-center mt-6 m-10" rows="10" id="message" name="message" placeholder="Votre message" required></textarea>
            </div>
            <div class="message_submit mb-8">
              <button class="btn_form" type="submit">Envoyer</button>
            </div>
          </div>

        </form>
        <?php endif; ?>

      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer class="footer bg-black text-center justify-center items-center text-light-white py-5">
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
        <span>Design et développement : Julie Sauzy </span><br><span>Création de site web WordPress </span>|
        <span> Création site internet Lyon </span></p>
      </div>
    </div>
  </footer>

</main>
<?php
  get_footer(); ?>

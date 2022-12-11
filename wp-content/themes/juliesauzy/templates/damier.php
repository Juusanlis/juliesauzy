  <!-- DAMIER -->
  <section id="top" class="damier_menu container lg:min-h-[88vh] flex-col lg:flex-row flex gap-12 lg:gap-28 items-center justify-center lg:overflow-hidden">

        <div class="text leading-tight">
          <h1 class="my-5 lg:mb-5">Bienvenue !<br> Je suis Julie Sauzy,<br> <span class="text-dark-corail"> Développeur web freelance.</span></h1>
          <p class="lg:mb-20 my-8 text-lg text-neutral-500">
            En réorientation professionnelle dans le développement web suite à une<br>
            formation au Wagon <em>(bootcamp)</em>, je me forme désormais à WordPress ainsi qu'au<br>
            langage PHP.
          </p>
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/CV_2022_Julie_Sauzy.pdf" download class="btn">Télécharger mon CV <i class="fa-solid fa-download"></i></a>
        </div>

      <div id="scene"  data-relative-input="true" class="photo flex hidden bg-beige lg:block w-[470px] h-[470px] justify-center object-center rounded-full overflow-hidden">
        <div class="relative h-full w-full" data-depth="-0.06">
          <div class="absolute w-[120%] h-full bg-cover bg-center -left-[10%] -top-6 filter blur-sm opacity-85" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_flowers.jpg);"></div>
        </div>
        <div class="relative h-full w-full" data-depth="0.06">
          <img class="absolute w-full h-5/6 object-contain mt-auto mx-auto -bottom-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/JS-profil.png" alt="profil">
        </div>
      </div>
  </section>

  <!-- Contact form -->
  <section id="me_contacter" class="contact_form lg:py-6 ">
    <div class="container">
      <div class="contactez_nous text-center justify-center items-center">
        <h2 class="title_form relative inline-block lg:mt-11 my-7"
            data-aos="fade-zoom-in"
            data-aos-duration="1000"
            data-aos-delay="150"
            data-aos-once="true">
            Me contacter
          </h2>
        <p  class="lg:mb-18 lg:my-5">Un projet de site en tête ? Une question ? N'hésitez pas à me contacter par email <em>(juliesauzy@outlook.com)</em>,<br>
       ou via le formulaire de contact ci-dessous:<br><em>(* Champs requis)</em>
        </p>

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
          <div class="infos_contact  lg:mt-14 m-10">
            <div class="gap-6 grid w-full grid-cols-1 lg:grid-cols-2 infos m-auto lg:w-1/2">
              <input class="input_infos" type="text" id="nom" name="nom" placeholder="Nom*" required>
              <input class="input_infos" type="text" id="prenom" name="prenom" placeholder="Prénom*" required>
              <input class="input_infos" type="email" id="email" name="email" placeholder="Email*" required>
              <input class="input_infos" type="telephone" id="telephone" name="telephone" placeholder="Téléphone" required>
              <input class="input_infos hidden" type="text" id="text" name="trap_for_robot">
            </div>

            <div class="message">
              <textarea class="input_infos my-6 w-full lg:w-1/2 p-2 justify-center items-center mt-6 lg:m-10" rows="10" id="message" name="message" placeholder="Votre message*" required></textarea>
            </div>
            <div class="message_submit">
              <button class="btn_form" type="submit">Envoyer</button>
            </div>
          </div>

        </form>
        <?php endif; ?>

      </div>
    </div>

  </section>

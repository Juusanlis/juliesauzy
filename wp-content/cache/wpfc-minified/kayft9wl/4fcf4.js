// source --> https://juliesauzy.test/wp-content/themes/juliesauzy/js/main.js?ver=6.0.2 
document.addEventListener('DOMContentLoaded', function(){
  //  Toggle scroll animation
  AOS.init();

  toggle_flower_anim();
  toggle_parallax();
  toggle_letter_anim();
});

// parallax image damier
function toggle_parallax() {
  var scene = document.getElementById('scene');
  var parallaxInstance = new Parallax(scene);
  parallaxInstance.friction(0.2, 0.2);

  //  parallax images projects
  var image = document.getElementsByClassName('thumbnail');
  new simpleParallax(image, {
    delay: 2,
    transition: 'cubic-bezier(0,0,0,1)'
  });
}

// animations using letter anim
function toggle_letter_anim() {
  // Wrap every letter in a span
    var textWrappers = document.querySelectorAll('.letter-anim');
    for (const textWrapper of textWrappers) {
      textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

      anime.timeline({loop: true})
        .add({
          targets: '.letter-anim .letter',
          translateX: [40,0],
          translateZ: 0,
          opacity: [0,1],
          easing: "easeOutExpo",
          duration: 1200,
          delay: (el, i) => 500 + 30 * i
        }).add({
          targets: '.letter-anim .letter',
          translateX: [0,-30],
          opacity: [1,0],
          easing: "easeInExpo",
          duration: 1100,
          delay: (el, i) => 100 + 30 * i
        });
    }
}

// animations using lottie
function toggle_flower_anim() {
  const animation = lottie.loadAnimation({
    container: document.querySelector('.logo_animation'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/wp-content/themes/juliesauzy/js/flower.json'
  });

  const animation2 = lottie.loadAnimation({
    container: document.querySelector('.logo_animation_2'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: '/wp-content/themes/juliesauzy/js/flower_3.json'
  });

  setTimeout(() => {
    animation2.play();
  }, 1000);

  const animation3 = lottie.loadAnimation({
    container: document.querySelector('.logo_animation_3'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/wp-content/themes/juliesauzy/js/flower_2.json'
  });
};
document.addEventListener('DOMContentLoaded', function(){
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
    path: '/wp-content/themes/juliesauzy/js/flower_2.json'
  });

  setTimeout(() => {
    animation2.play();
  }, 1000);
});

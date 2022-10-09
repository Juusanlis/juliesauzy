document.addEventListener('DOMContentLoaded', function () {
  //  Toggle scroll animation
  AOS.init({
    disable: 'mobile',
  })

  toggle_flower_anim()
  toggle_parallax()
  toggle_letter_anim()
  toggle_tippy()
  toggle_burger_menu()
})

// parallax image damier
function toggle_parallax() {
  var scene = document.getElementById('scene')
  var parallaxInstance = new Parallax(scene)
  parallaxInstance.friction(0.2, 0.2)

  //  parallax images projects
  var image = document.getElementsByClassName('thumbnail')
  new simpleParallax(image, {
    delay: 2,
    transition: 'cubic-bezier(0,0,0,1)',
  })
}

// animations using letter anim
function toggle_letter_anim() {

  if ( window.innerWidth < 700 ) {
    return;
  }

  // Wrap every letter in a span
  var textWrappers = document.querySelectorAll('.letter-anim')
  for (const textWrapper of textWrappers) {
    textWrapper.innerHTML = textWrapper.textContent.replace(
      /\S/g,
      "<span class='letter'>$&</span>",
    )

    anime
      .timeline({ loop: true })
      .add({
        targets: '.letter-anim .letter',
        translateX: [40, 0],
        translateZ: 0,
        opacity: [0, 1],
        easing: 'easeOutExpo',
        duration: 1200,
        delay: (el, i) => 500 + 30 * i,
      })
      .add({
        targets: '.letter-anim .letter',
        translateX: [0, -30],
        opacity: [1, 0],
        easing: 'easeInExpo',
        duration: 1100,
        delay: (el, i) => 100 + 30 * i,
      })
  }
}

// animations using lottie
function toggle_flower_anim() {
  const animation = lottie.loadAnimation({
    container: document.querySelector('.logo_animation'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/wp-content/themes/juliesauzy/js/flower.json',
  })

  const animation2 = lottie.loadAnimation({
    container: document.querySelector('.logo_animation_2'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: '/wp-content/themes/juliesauzy/js/flower_3.json',
  })

  setTimeout(() => {
    animation2.play()
  }, 1000)

  const animation3 = lottie.loadAnimation({
    container: document.querySelector('.logo_animation_3'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/wp-content/themes/juliesauzy/js/flower_2.json',
  })
}

//  animation tippy on environnement img
function toggle_tippy() {
  const icons = document.querySelectorAll('.icons')
  tippy('.icons', {
    animation: 'scale-subtle',
  })
}

// burger menu animation
function toggle_burger_menu() {
  let burger = document.querySelector('.toggle_burger_menu')
  let ul = document.querySelectorAll('.header_menu li:not(.logo)')

  /* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
  burger.addEventListener('click', function (e) {
    e.preventDefault()
    for (const li of ul) {
      li.classList.toggle('hidden')
      li.classList.toggle('block')
    }
  })

  for (const li of ul) {
    li.addEventListener('click', () => {
      for (const other_li of ul) {
        other_li.classList.toggle('hidden')
        other_li.classList.toggle('block')
      }
    })
  }
}

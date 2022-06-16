/* Create the div on the main screen and add the elements and show it on the screen */
divEl.classList.add('nav')
document.querySelector('body').appendChild(divEl)


/* Show or hide button on screen */
function scrollButton() {
  if (window.scrollY > 490) {
    /* Hide button */
    document.querySelector('.nav').style.position = 'fixed'
    document.querySelector('.nav').style.top = '-10px'
    document.querySelector('.nav').style.left = '80px'

  } else {
    document.querySelector('.nav').style.position = 'relative'
    document.querySelector('.nav').style.top = '0px'
    document.querySelector('.nav').style.left = '0px'
  }

}

/* Monitor page scroll */
window.addEventListener('scroll', scrollButton)
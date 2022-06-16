/* Create the div on the main screen and add the elements and show it on the screen */
let divEl = document.createElement('div')
divEl.classList.add('scrollButtton')
divEl.addEventListener('click', topScreen)
document.querySelector('body').appendChild(divEl)

/* Up to top the page */
function topScreen() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}

/* Show or hide button on screen */
function scrollButton() {
  if (window.scrollY === 0) {
    /* Hide button */
    document.querySelector('.scrollButtton').style.display = 'none'
  } else if (window.scrollY < 1000) {
    document.querySelector('.scrollButtton').style.display = 'none'
  }
  else {
    /* show button */
    document.querySelector('.scrollButtton').style.display = 'block'
  }
}

/* Monitor page scroll */
window.addEventListener('scroll', scrollButton)
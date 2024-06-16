/**
 * Header nav menu script - loaded on all pages
 */

function toggleNav(){
  if ( this.getAttribute( 'aria-expanded' ) === 'true' ) {
    this.setAttribute( 'aria-expanded', 'false' );
  } else {
    this.setAttribute( 'aria-expanded', 'true' );
  }
}

( function(){
  const nav = document.querySelector("nav#nav");
  if (nav == null){
    return;
  }
  let toggle = nav.querySelector(".nav-toggle");
  let menu = nav.querySelector(".nav-primary");

  if (toggle == null || menu == null){
    return;
  }

  toggle.addEventListener( 'click', toggleNav.bind(toggle))
})()
window.addEventListener(("scroll"),()=>{
    document.querySelector("#bot").style.marginTop = `${window.scrollY * 1.5}px`
    document.querySelector("#bots").style.marginBottom = `${106 - window.scrollY}px`
    document.querySelector("#leftCloud").style.marginLeft = `-${window.scrollY}px`
    document.querySelector("#top").style.marginTop = `-${window.scrollY}px`
    document.querySelector("#rightCloud").style.marginRight = `-${window.scrollY}px`
})
let header = document.querySelector('.header');
let lastScrollTop = 0;

window.addEventListener('scroll', function() {
  let scrollTop = window.scrollY;
  
  if (scrollTop > lastScrollTop) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
  
  lastScrollTop = scrollTop;
});
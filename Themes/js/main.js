  //-------- Easy selector helper function -------
(function() {
  "use strict";
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }


  

  
  //--------- Easy event listener function ----------

  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  //---------- Easy on scroll event listener ---------

  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  //----------Header fixed top on scroll---------

  let selectHeader = select('#header')
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop
    let nextElement = selectHeader.nextElementSibling
    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('fixed-top')
        nextElement.classList.add('scrolled-offset')
      } else {
        selectHeader.classList.remove('fixed-top')
        nextElement.classList.remove('scrolled-offset')
      }
    }
    window.addEventListener('load', headerFixed)
    onscroll(document, headerFixed)
  }


  
  /**
   * Navbar links active state Click 
   */
   var url = window.location;
   // Custom url
   var path = window.location.pathname;
   var page = path.split("/").pop();
  if(url=='http://agilesolutions-qa.com/' || url=='https://agilesolutions-qa.com/' ){
   $('.home').addClass('active');
  }
  var element = $('.dropdown ul li a').filter(function() {
       return this.href == url;
       alert();
   }).css('color','#F6A53C').parent().parent().parent();  
     element.children('a').addClass('active');


   // End Of Navbar active



  // -------- Back to top button --------

  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  //---------- Mobile nav toggle ------------
  
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  //----------Mobile nav dropdowns activate-----------
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)


  // ----------Animation on scroll-------------

  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Portfolio details slider
   */
   new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
  


})()

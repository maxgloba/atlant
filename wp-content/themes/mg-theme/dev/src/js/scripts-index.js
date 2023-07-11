//= partials/ajaxRequest.js
//= partials/header.js
//= modules/tiny-slider.js

(function(){

  const professionalsSlider = tns({
    container: '.look__slider',
    items: 1,
    loop: true,
    speed: 1000,
    controls: true,
    controlsPosition: 'bottom',
    nav: true,
    navPosition: 'bottom',
    autoplay: false,
    swipeAngle: false,
    gutter: 26,
  })

  const bunkerBtns = document.querySelectorAll('.bunker__item__btn')
  bunkerBtns.forEach(bunkerBtn => {
    bunkerBtn.addEventListener('click', e => {
      e.preventDefault()
      if(e.target.classList.contains('active')){
        e.target.classList.remove('active')
        e.target.parentNode.classList.remove('openned')
      } else {
        bunkerBtns.forEach(el => {
          el.classList.remove('active')
          el.parentNode.classList.remove('openned')
        })
        e.target.classList.add('active')
        e.target.parentNode.classList.add('openned')
      }
    })
  })

  const mgpObjects = document.querySelectorAll('.parallax-obj')
  window.addEventListener('scroll', e => {
    e.preventDefault();
    mgpObjects.forEach(el => {
      const point = window.scrollY + window.innerHeight - el.parentNode.offsetTop
      if(window.scrollY + window.innerHeight > el.parentNode.offsetTop){
        el.style.transform = `translate3d(0px, -${point / 3}px, 0px)`
      }
    })
  })

  const openFormConsultations = document.querySelectorAll('.openFormConsultation')
  openFormConsultations.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault()
      disableScroll()
      document.querySelector('.modal__consultation').classList.add('active')
    })
  })

  const closeModal = document.querySelectorAll('.modal__close')
  closeModal.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault()
      enableScroll()
      document.querySelector('.modal').classList.remove('active')
    })
  })

  function disableScroll() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
    window.onscroll = function() {
      window.scrollTo(scrollLeft, scrollTop);
    };
  }

  function enableScroll() {
    window.onscroll = function() {};
  }

  const consSubmits = document.querySelectorAll('.consultationForm')
  consSubmits.forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault()
      let requestData = [{
        action: 'formCons',
        name: document.getElementById(`${form.dataset.id}_name`).value,
        phone: document.getElementById(`${form.dataset.id}_phone`).value,
      }]
      console.dir(requestData)
      requestAction(requestData, result => {
        let data = JSON.parse(result)
        if(data.status == 'success'){
          alert(data.msg)
          e.target.reset()
        } else if(data.status == 'error'){
          alert(data.msg)
          console.dir(data);
        } else {
          alert('OOPS! Something went wrong, please try againe later.')
          console.log('other error')
        }
      })
    })
  })

})();
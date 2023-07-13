(function(){

  document.querySelector('.openNav').addEventListener('click', e => {
    e.preventDefault();
    e.target.classList.toggle('active');
    document.querySelector('.main-header__nav').classList.toggle('active');
  });

})();
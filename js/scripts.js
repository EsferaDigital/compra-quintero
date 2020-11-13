jQuery(document).ready(function($){
  $('.site-header .menu-principal .menu').slicknav({
    label: '',
    prependTo: '.site-header',
  });

  $(window).load(function() {
    var url = window.location.href
    // si existe el simbolo ? en la url
    if (url.indexOf('?') != -1){
      // console.log('no mostrar categorias');
      $('#categorias').addClass("SlideUp");
      $('.um-member-directory-header.um-form').removeClass('con-categorias').addClass('sin-categorias');
    }else{
      $('.btn-categorias').addClass("SlideUp");
      $('.um-member-directory-header.um-form').removeClass('sin-categorias').addClass('con-categorias');
    }
  });

});
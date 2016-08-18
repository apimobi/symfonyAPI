$( document ).ready(function(){
  $(".button-collapse").sideNav();
  $('.modal-trigger').leanModal();
  
  if(showModal)
  {
      $('#modal1').openModal();
  }
})

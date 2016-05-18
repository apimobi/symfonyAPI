$( document ).ready(function(){
  $(".button-collapse").sideNav();
  $('.modal-trigger').leanModal();
  showModal = true;
  if(showModal)
  {
      $('#modal1').openModal();
  }
})

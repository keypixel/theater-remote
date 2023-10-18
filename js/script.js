// on page load - in raw javascript

var $ = function (selector, parent) { return (parent ? parent : document).querySelector(selector); };
var $$ = function (selector, parent) { return (parent ? parent : document).querySelectorAll(selector); };


window.onload = function() {


  $('.modal').addEventListener('click', function(){
    $('body').classList.remove('modal-power-on');
    
    setTimeout(() => {
      $('.modal.power').classList.remove('on');
    }, 200);
  })

  $('#power').addEventListener('click', function(){
    $('.modal.power').classList.add('on');
    setTimeout(() => {
      $('body').classList.add('modal-power-on');
    }, 10);

  })

  $('#reload').addEventListener('click', function(){
    window.location.reload(true);
 })




  // Get all elements that match the selector '#pages button'
  var $pages = $$('#pages button');


  // Add a click event listener to each element
  $pages.forEach(function($page) {
    $page.addEventListener('click', function() {
          // Your click event code here
          const cls = $page.classList;
          
          if (!cls.contains('active') ) {
            $('section.active').classList.remove('active');
            $('#pages .active').classList.remove('active');

            $(`#${cls}`).classList.add('active');
            $page.classList.add('active');
          }
      });
  });


}

var $get = function (selector, parent) { return (parent ? parent : document).querySelector(selector); };
var $$get = function (selector, parent) { return (parent ? parent : document).querySelectorAll(selector); };

function power() {
  console.log('power loaded');
  $get('.modal').addEventListener('click', function(){
    $get('body').classList.remove('modal-power-on');
    
    setTimeout(() => {
      $get('.modal.power').classList.remove('on');
    }, 200);
  })

  $get('#power').addEventListener('click', function(){
    $get('.modal.power').classList.add('on');
    setTimeout(() => {
      $get('body').classList.add('modal-power-on');
    }, 10);
  })

  $get('#reload').addEventListener('click', function(){
    window.location.reload(true);
  })
}


function tabs() {
  console.log('tabs loaded');
  // Get all elements that match the selector '#pages button'
  var $pages = $$get('#pages button');

  // Add a click event listener to each element
  $pages.forEach(function($page) {
    $page.addEventListener('click', function() {
          // Your click event code here
          const cls = $page.classList;
          
          if (!cls.contains('active') ) {
            $get('section.active').classList.remove('active');
            $get('#pages .active').classList.remove('active');

            $get(`#${cls}`).classList.add('active');
            $page.classList.add('active');
          }
      });
  });

}

window.onload = function() {
  power();
  tabs();
}

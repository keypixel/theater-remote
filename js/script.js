// on page load - in raw javascript
window.onload = function() {
  // get button element
  var $buttons = document.getElementsByTagName('button');
  // add click handler to button

// &buttons forEach button add click handler use forEach
  Array.prototype.forEach.call($buttons, function($button) {
    $button.addEventListener('click', function() {
      // alert class name
      alert($button.className);
    });
  });
}

$(document).ready(function(){
  var count = 0;
  $('.bildeboks').click(function () {
    count += 1;
    if (count == 10) {

      $(".bildeboks").attr("src", "img/easterbilde.jpg");
    }
  });
});
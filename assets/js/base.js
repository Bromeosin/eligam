$(document).ready(function() {
    // all custom jQuery will go here
    $("#toggle").click(function() {
      $(this).toggleClass("active");
      $("#overlay").toggleClass("open");

      var img1 = "images/logo.png";
      var img2 = "images/logo-light.png";
      var imgElement = document.getElementById('logo');

      imgElement.src = (imgElement.src === img1)? img2 : img1;
    });
});

$(document).ready(function(){
  var flag = 1;
  $("#toggle").click(function(){
    if(flag == 0) {
      $("#logo").attr("src","http://joanna-turner.co.uk/wp-content/themes/joanna-website/images/logo.png");
      flag = 1;
    }
    else if(flag == 1) {
      $("#logo").attr("src","http://joanna-turner.co.uk/wp-content/themes/joanna-website/images/logo-light.png");
      flag = 0;
    }
  });
});

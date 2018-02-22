$(document).ready(function() {
    // all custom jQuery will go here
    $("#toggle").click(function() {
      $(this).toggleClass("active");
      $("#overlay").toggleClass("open");
    });
});

$(document).ready(function(){
  var flag = 1;
  $("#toggle").click(function(){
    if(flag == 0) {
      $("#logo").attr("src","assets/images/logo.png");
      flag = 1;
    }
    else if(flag == 1) {
      $("#logo").attr("src","assets/images/logo.png");
      flag = 0;
    }
  });
});

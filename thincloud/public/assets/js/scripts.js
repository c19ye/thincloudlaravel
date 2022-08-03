(function (window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */

  

})(window);

$(document).ready(function () {
  $(".btnNext").click(function () {
    
    $(".nav-tabs > .nav-item").next("li").find("a")[0].click();

  });

});
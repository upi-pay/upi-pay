$(document).ready(function() {
    // Activate the first tab by default
    $("#myTab a:first").tab("show");
  
    // Change the active tab when the user clicks on a tab
    $("#myTab a").click(function(e) {
      e.preventDefault();
      $(this).tab("show");
    });
  });
  
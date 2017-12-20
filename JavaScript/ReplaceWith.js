$(function() {

  $("#btnSearch").click(function(e) {
    e.preventDefault();
    var content = $(this).html();
    $('#map').replaceWith('<div class="region">' + content + '</div>');
  });

});

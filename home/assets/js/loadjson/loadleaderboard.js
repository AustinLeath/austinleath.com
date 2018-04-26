$(function() {
  var aliases = [];
  $.getJSON('leaderboard.json', function(data) {
    $.each(data.aliases, function(i, f) {
      var tblRow = "<tr>" + "<td>" + f.name + "</td>" + "<td>" + f.placement + "</td>" + "</tr>"
      $(tblRow).appendTo("#leaderboard tbody");
    });
  });
});

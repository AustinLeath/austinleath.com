$(function() {
  var aliases = [];
  $.getJSON('tsg_lethal.json', function(data) {
    $.each(data.ncsa, function(i, f) {
      var tblRow = "<tr>" + "<td>" + f.RegionRank + "</td>" + "<td>" + f.RegionRank + "</td>" + "</tr>"
      $(tblRow).appendTo("#tsg_lethal tbody");
    });
  });
});

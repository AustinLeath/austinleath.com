$(function() {
  var platform = [];
  $.getJSON('tsg_lethal.json', function(data) {
    $.each(data.platform, function(i, f) {
      var para = f.platform
      $(para).appendTo("#userdata p");
    });
  });
});


//just incase
//$(function() {
  //var platform = [];
  //$.getJSON('tsg_lethal.json', function(data) {
    //$.each(data.platform, function(i, f) {
      //var tblRow = "<tr>" + "<td>" + f.firstName + "</td>" +
        //"<td>" + f.lastName + "</td>" + "<td>" + f.job + "</td>" + "<td>" + f.roll + "</td>" + "</tr>"
      //$(tblRow).appendTo("#userdata tbody");
    //});
  //});
//});

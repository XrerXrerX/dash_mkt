$(document).ready(function() {
    var titleText = $('title').text();
    var uppercaseText = titleText.toUpperCase();
    $('title').text(uppercaseText);
  });
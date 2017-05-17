$(document).ready(function() {
  $('.inputx').hide();
  $('.inputy').hide();
  $('#pilihjml').on('change', function(event) {
    event.preventDefault();
    $('#xdataID').html('');
    $('#ydataID').html('');
    $('.inputx').show();
    $('.inputy').show();
    var inputX = '<div class="col-md-1">'
                  + '<input id="xdata" name="xdata[]" placeholder="X" class="form-control input-md" required="" type="text">'
                  + '</div>';
    var inputY = '<div class="col-md-1">'
                  + '<input id="ydata" name="ydata[]" placeholder="Y" class="form-control input-md" required="" type="text">'
                  + '</div>';

    for (var i = 0; i < $('#pilihjml').val(); i++) {
      $('#xdataID').append(inputX);
      $('#ydataID').append(inputY);
    }

  });
});

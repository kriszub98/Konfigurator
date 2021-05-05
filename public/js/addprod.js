$(function() {
    $(document).on('click', '.btn-add', function(e) {
      e.preventDefault();
  
      var dynaForm = $('.dynamic-wrap'),
        currentEntry = $(this).parents('.entry:first'),
        newEntry = $(currentEntry.clone()).appendTo(dynaForm);
  
      newEntry.find('input').val('');
      dynaForm.find('.entry:not(:last) .btn-add')
        .removeClass('btn-add').addClass('btn-remove')
        .removeClass('btn-success').addClass('btn-danger')
        .html('<span class="fa fa-minus"></span>');
    }).on('click', '.btn-remove', function(e) {
      $(this).parents('.entry:first').remove();
  
      e.preventDefault();
      return false;
    });
  });

  $(function() {
    $(document).on('click', '.btn-add2', function(e) {
      e.preventDefault();
  
      var dynaForm = $('.dynamic-wrap2'),
        currentEntry = $(this).parents('.entry:first'),
        newEntry = $(currentEntry.clone()).appendTo(dynaForm);
  
      newEntry.find('input').val('');
      dynaForm.find('.entry:not(:last) .btn-add2')
        .removeClass('btn-add2').addClass('btn-remove')
        .removeClass('btn-success').addClass('btn-danger')
        .html('<span class="fa fa-minus"></span>');
    }).on('click', '.btn-remove', function(e) {
      $(this).parents('.entry:first').remove();
  
      e.preventDefault();
      return false;
    });
  });

var loadFile = function (event) 
{
  var output = document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () 
  {
    URL.revokeObjectURL(output.src) // free memory
  }
};
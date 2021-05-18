$("#addRow").click(function () {
  var html = '';
  html += '<div id="inputFormRow">';
  html += '<div class="input-group mb-3">';
  html += ' <input class="form-control" name="param_names[]" type="text" placeholder="Nazwa parametru" autocomplete="off" />';
  html += ' <input class="form-control" name="param_values[]" type="text" placeholder="Wartość" autocomplete="off" />';
  html += ' <select class="form-control" name="param_required[]"><option value="1">Wymagane</option><option value="0">Nie wymagane</option></select>';
  html += '<div class="input-group-append">';
  html += '<button id="removeRow" type="button" class="btn btn-danger"><span class="fa fa-minus"></span></button>';
  html += '</div>';
  html += '</div>';

  $('#newRow').append(html);
});

// remove row
$(document).on('click', '#removeRow', function () {
  $(this).closest('#inputFormRow').remove();
});

$("#addRow2").click(function () {
  var html = '';
  html += '<div id="inputFormRow2">';
  html += '<div class="input-group mb-3">';
  html += '<select class="form-control" name="requirement_type[]">@forelse ($types as $type)<option value="{{ $type->id }}">{{ $type->name }}</option>@empty<option value=""></option>@endforelse</select>';
  html += '<input class="form-control" name="requirement_names[]" type="text" placeholder="Nazwa parametru" />';
  html += '<input class="form-control" name="requirement_values[]" type="text" placeholder="Wartość" />';
  html += '<div class="input-group-append">';
  html += '<button id="removeRow2" type="button" class="btn btn-danger"><span class="fa fa-minus"></span></button>';
  html += '</div>';
  html += '</div>';

  $('#newRow2').append(html);
});

// remove row
$(document).on('click', '#removeRow2', function () {
  $(this).closest('#inputFormRow2').remove();
});
$('.delete-class').click(function(){
  var tr = $(this).closest('tr'),
      id = $(this).attr('id');

  $.ajax(
    {
    url:     "?c=addresbook&a=delete&id="+ id,
    cache:   false,
    success: function(result) {
      tr.fadeOut(1000, function(){
        $(this).remove();
      });
    }
  });
});
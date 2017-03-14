$(function(){
  var i = 2;
  $('#adduser').click(function(){
    $('#tdetails').append('<tr><td><input type="text" name="ten[' + i +'][name]"  class="form-control"/></td><td><select class="form-control" name="ten[' + i +'][gender]" ><option>male</option><option>female</option></select></td><td><input type="text" name="ten[' + i +'][age]" class="form-control" /></td><td><input type="text" name="ten[' + i +'][relation]" class="form-control" /></td></tr>');
  i++;
  });
});
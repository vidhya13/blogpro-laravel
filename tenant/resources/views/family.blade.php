<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(function(){
            var i = 2;
            $('#adduser').click(function(){
                $('#tdetails').append('<tr><td><input type="text" name="ten[' + i +'][name]"  class="form-control"/></td><td><select class="form-control" name="ten[' + i +'][gender]" ><option>male</option><option>female</option></select></td><td><input type="text" name="ten[' + i +'][age]" class="form-control" /></td><td><input type="text" name="ten[' + i +'][relation]" class="form-control" /></td></tr>');
                i++;
            });
        });
    </script>
</head>
<body>


<script type="text/javascript" src="js/adduser.js" media="all"></script>
<div id="page-wrapper">
  <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-lg-10 col-md-10 " method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="container-fluid">
      <div class="panel panel-primary">
      <div class="panel panel-header">
      <h3>Tenant information</h3>
     </div>
      <div class="panel panel-body">
      <!--  ----->
      <div class="col-lg-10 col-md-10 col-sm-10">
<div class="table-responsive col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8" >
      <table class="table table-bordered table-condensed table-highlight" >
          <thead class="tablecss" style="color:white">
              <th>Name</th>
              <th>Gender</th>
              <th>Age</th>
              <th>Relation</th>
          </thead>
          <tbody id="tdetails">
              <tr>
                  <td><input name="ten[1][name]" type="text" class="form-control"/></td>
                  <td>
                      <select name="ten[1][gender]" class="form-control">
                          <option>male</option>
                          <option>female</option>
                      </select>
                  </td>
                  <td><input type="text" name="ten[1][age]" class="form-control" /></td>
                  <td><input type="text" name="ten[1][relation]"class="form-control" /></td>
              </tr>
          </tbody>
      </table>
  </div>
  <div class="col-sm-1 col-md-1 col-lg-1">
    <p id="adduser" class="btn btn-primary">ADD</p>
  </div>
</div>
    <!--  ----->
    </div>
    </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-sm-10 col-md-10 col-lg-10">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1">
      <button type="submit" class="btn btn-info btn-md">Submit</button>
    </div>
    <br/>
    <br/>
    <br/>
    </form>
	</div>

</body>
</html>
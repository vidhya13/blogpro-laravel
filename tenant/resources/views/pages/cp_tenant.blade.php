<!doctype html>
<html>
<head>

</head>
<body>
<div class="container">
    @if(Session::has('name'))
        Welcome {{  Session::get('name') }}
    @endif
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          {{--   <a href="{{ url('') }}" class="btn btn-primary" style="margin-left:900px;">Back</a> --}}
            <a href="" style="float: right">Logout</a>
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Tenant list</h1></div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered" border="1px solid black">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Secondary Mobile</th>
                            <th>Religion</th>
                            <th></th>
                        </tr>
                        @foreach($owner as $owners)
                            <tr>
                                <td>{{$owners->name}}</td>
                                <td>{{$owners->email}}</td>
                                <td>{{$owners->mobile}}</td>
                                <td>{{$owners->secondary_mobile}}</td>
                                <td>{{$owners->religion}}</td>
                                <td><a href="{{ route('pages/tupdate', $owners->id) }}">Edit </a>||
                                    <a href="{{ route('pages/tdelete', $owners->id) }}">Delete</a></td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<!doctype html>
<html>
<head>

</head>
<body>
{!! Form::open(array( 'method' => 'post')) !!}
<h1>Tenant Updation</h1>

<div class='controls'>
    <label>Tenant Name</label>
    {!! Form::text('name',Input::old('name', $tenant->name), array('id'=> '', 'class' => 'form-control span6', 'placeholder' => 'Please Enter your name'  )) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class='controls'>
    <label>Tenant Email</label>
    {!! Form::text('email',Input::old('email', $tenant->email),array('id'=>'','class' =>'form-control span6','placeholder' => 'Please Enter Your Email' )) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class="controls">
    <label>Tenant Mobile</label>
    {!! Form::text('mobile',Input::old('mobile', $tenant->mobile), array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Mobile Number')) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class="controls">
    <label>Secondary mobile</label>
    {!! Form::text('secondary_mobile',Input::old('secondary_mobile',$tenant->secondary_mobile), array('class'=>'form-control span6', 'placeholder' => 'Please Enter Secondary Mobile')) !!}
    <p style="color: red" class="errors"></p>
</div>
<div class="controls">
    <label>Religion</label>
    {!! Form::select('religion',['Select Religion','h' => 'Hindu','m' => 'Muslim','c' => 'Cristian'],Input::old('religion',$tenant->religion), array('class' => 'form-control span6')) !!}
    <p style="color: red" class="errors"></p>
</div>

<p>{!! Form::submit('Update', array('class'=>'send-btn')) !!}</p>
{!! Form::close() !!}
</body>
</html>
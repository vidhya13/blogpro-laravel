<!doctype html>
<html>
<head>

</head>
<body>
{!! Form::open(array('url' => 'pages/cp_otform' , 'method' => 'post')) !!}
<h1>Owner Registration</h1>

<div class='controls'>
    <label>Owner Name</label>
    {!! Form::text('oname','',array('id'=> '', 'class' => 'form-control span6', 'placeholder' => 'Please Enter your name')) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class='controls'>
    <label>Owner Email</label>
    {!! Form::text('oemail','',array('id'=>'','class' =>'form-control span6','placeholder' => 'Please Enter Your Email')) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class="controls">
    <label>Owner Mobile</label>
    {!! Form::text('omobile','', array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Mobile Number')) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class="controls">
    <label>Secondary mobile</label>
    {!! Form::text('osecondary_mobile','', array('class'=>'form-control span6', 'placeholder' => 'Please Enter Secondary Mobile')) !!}
    <p style="color: red" class="errors"></p>
</div>
<div class="controls">
    <label>Religion</label>
    {!! Form::select('oreligion',['Select Religion','h' => 'Hindu','m' => 'Muslim','c' => 'Cristian'], array('class' => 'form-control span6')) !!}
    <p style="color: red" class="errors"></p>
</div>
<h1>Tenant Registration</h1>

<div class='controls'>
    <label>Tenant Name</label>
    {!! Form::text('name','',array('id'=> '', 'class' => 'form-control span6', 'placeholder' => 'Please Enter your name')) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class='controls'>
    <label>Tenant Email</label>
    {!! Form::text('email','',array('id'=>'','class' =>'form-control span6','placeholder' => 'Please Enter Your Email')) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class="controls">
    <label>Tenant Mobile</label>
    {!! Form::text('mobile','', array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Mobile Number')) !!}
    <p style="color:red" class="errors"></p>
</div>
<div class="controls">
    <label>Secondary mobile</label>
    {!! Form::text('secondary_mobile','', array('class'=>'form-control span6', 'placeholder' => 'Please Enter Secondary Mobile')) !!}
    <p style="color: red" class="errors"></p>
</div>
<div class="controls">
    <label>Religion</label>
    {!! Form::select('religion',['Select Religion','h' => 'Hindu','m' => 'Muslim','c' => 'Cristian'], array('class' => 'form-control span6')) !!}
    <p style="color: red" class="errors"></p>
</div>

<h1>Occupant details</h1>

    <label>Occupant Name</label>
    {!! Form::text('oname','',array('id'=> '', 'class' => 'form-control span6', 'placeholder' => 'Please Enter your name')) !!}
    <p style="color:red" class="errors"></p>

    <label>Occupant Email</label>
    {!! Form::text('oemail','',array('id'=>'','class' =>'form-control span6','placeholder' => 'Please Enter Your Email')) !!}
    <p style="color:red" class="errors"></p>
    <label>Occupant Mobile</label>
    {!! Form::text('omobile','', array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Mobile Number')) !!}
    <p style="color:red" class="errors"></p>

<p>{!! Form::submit('Register', array('class'=>'send-btn')) !!}</p>
{!! Form::close() !!}
Image::make();
</body>
</html>
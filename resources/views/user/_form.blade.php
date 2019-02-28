
 <div class="col-md-12" style="padding: 0px">
    <center>
        <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;">
        <input id="inputimage" type="file" name="imageup" accept="images/*" >
    </center>
 </div>  
<!-- Name Form Input -->
<div class="form-group @if ($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
</div>

<!-- email Form Input -->
<div class="form-group @if ($errors->has('email')) has-error @endif">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
</div>
<div class="col-md-6" style="padding: 0px">
    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
    <div class="col-sm-12">
        {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
    </div>
</div>
<div class="col-md-6" style="padding: 0px">
    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
    <div class="col-sm-12">
        {!! Form::email('email',null, ['class' => 'form-control','required']) !!}
    </div>
</div>
<div class="col-md-6" style="padding: 0px">
    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
    <div class="col-sm-12">
        {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
    </div>
</div>
<div class="col-md-6" style="padding: 0px">
    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('pays','Pays*') !!}</label>
    <div class="col-sm-12">
        {!! Form::text('pays',null, ['class' => 'form-control','required']) !!}
    </div>
</div>
<div class="col-md-6" style="padding: 0px">
    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
    <div class="col-sm-12">
        {!! Form::text('ville',null, ['class' => 'form-control','required']) !!}
    </div>
</div>
<div class="col-md-6" style="padding: 0px">
    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('type',"Type de compte:") !!}</label>
    <div class="col-sm-12">
        <select name="type" class="form-control">
          <option value="Agent">Agent</option>
            <option value="Client">Client</option>
          </select>
     </div>
</div>

<!-- password Form Input -->
<div class="form-group @if ($errors->has('password')) has-error @endif">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
</div>




<!-- Permissions -->
@if(isset($user))
    @include('shared._permissions', ['closed' => 'true', 'model' => $user ])
@endif
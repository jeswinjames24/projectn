@extends('layouts.prelogin')
@section('content')
<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Sign in to your account</h3>
				<p>
					Please enter your email and password to log in.
				</p>
        {{ Form::open(array('url'=>'users/signin', 'class'=>'form-login')) }}
        <div class="form-group">
          <div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
							<span class="input-icon">
                {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
								<i class="fa fa-user"></i> </span>
					
        	<div class="form-group form-actions">
							<span class="input-icon">
                  {{ Form::password('password', array('class'=>'form-control password', 'placeholder'=>'Password')) }}
								<i class="fa fa-lock"></i>
								<a class="forgot" href="#">
									I forgot my password
								</a> </span>
						</div>
      	    <div class="form-actions">
							<label for="remember" class="checkbox-inline">
								<input type="checkbox" class="grey remember" id="remember" name="remember">
								Keep me signed in
							</label>
              
               {{ Form::submit('Login', array('class'=>'btn btn-bricky pull-right'))}}					
						</div>
           	<div class="new-account">
							Don't have an account yet?
							<a href="#" class="register">
								Create an account
							</a>
						</div>
          </fieldset>
        {{ Form::close() }}
			</div>
			<!-- end: LOGIN BOX -->
        
@stop
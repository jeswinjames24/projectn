@extends('layouts.prelogin')
@section('content')
<!-- start: REGISTER BOX -->
			<div class="box-login">
				<h3>Sign Up</h3>
				<p>
					Enter your personal details below:
				</p>
        {{ Form::open(array('url'=>'users/com-register', 'class'=>'form-register')) }}
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
						<div class="form-group">
              {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'First Name', 'name'=>'first_name')) }}
						</div>
						<div class="form-group">
							{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Last Name', 'name'=>'last_name')) }}
						</div>
						<div class="form-group">
              {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Company Domain Name (ex. www.abc.com)', 'name'=>'company_domain')) }}
						</div>
						<p>
							Enter your account details below:
						</p>
						<div class="form-group">
							<span class="input-icon">
                 {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email (ex. you@yourcompanymail.com)', 'name'=>'company_email')) }}
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
                {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Password', 'name'=>'password')) }}
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
                 {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Password Again', 'name'=>'password_again')) }}
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<div>
								<label for="agree" class="checkbox-inline">
									<input type="checkbox" class="grey agree" id="agree" name="agree">
									I agree to the Terms of Service and Privacy Policy
								</label>
							</div>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Back
							</a>
							  {{ Form::submit('Submit', array('class'=>'btn btn-bricky pull-right'))}}	
						</div>
					</fieldset>
			  {{ Form::close() }}
			</div>
			<!-- end: REGISTER BOX -->
@stop
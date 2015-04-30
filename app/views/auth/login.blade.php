
				 @if($errors->has('login'))
					<div class="alert alert-info">
						 {{ $errors->first('login', ':message') }}
					</div>
				@endif
					 {{ Form::open(array('action' => array('AuthController@postLogin'),  'method' => 'POST'))}}
						<fieldset>
							<div class="input-prepend" title="Email" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="email" id="email" type="text" value="admin" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="admin123456" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					 {{ Form::close() }}
	

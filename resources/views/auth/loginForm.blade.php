@include('auth.header')
<!-- Start wrapper-->
<div id="wrapper">
   <div class="card card-authentication1 mx-auto my-5 animated zoomIn">
      <div class="card-body">
         <div class="card-content p-2">
            <div class="text-center">
               <img src="public/assets/images/logo-icon.png"/>
            </div>
            <div class="card-title text-uppercase text-center py-2">{{ __('Login') }}</div>
            <form method="POST" action="{{ route('login') }}">
               @csrf
               <div class="form-group">
                  <div class="position-relative has-icon-left">
                     <label for="username" class="sr-only">{{ __('Username') }}</label>
                     <input type="text" id="username" required class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="username">

                     @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                     @endif

                     <div class="form-control-position">
                        <i class="icon-user"></i>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="position-relative has-icon-left">
                     <label for="password" class="sr-only">{{ __('Password') }}</label>
                     <input type="password" id="password" required class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password">

                     @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                     @endif

                     <div class="form-control-position">
                        <i class="icon-lock"></i>
                     </div>
                  </div>
               </div>
               <div class="form-row mr-0 ml-0">
                  <div class="form-group col-6">
                     <div class="demo-checkbox">
                        <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }} class="filled-in chk-col-success" name="checkbox" />
                        <label for="remember">{{ __('Remember Me') }}</label>
                     </div>
                  </div>
                  <div class="form-group col-6 text-right">
                     <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                  </div>
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-info shadow-info btn-block waves-effect waves-light">{{ __('Login') }}</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   <!--End Back To Top Button-->
</div>
@include('auth.footer')
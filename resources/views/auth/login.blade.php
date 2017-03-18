@extends('auth.main')

@section('content')
            <form class="form-login" role="form" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autofocus>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                                <span class="pull-right">
                                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                                </span>
                            </div>
                    </div>
                    
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>
                    
                    <div class="login-social-link centered">
                    <p>or you can sign in via your social network</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-qq"></i> Tencent </button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-wechat"></i> Wechat</button>
                    </div>
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a class="" href="#">
                            Create an account
                        </a>
                    </div>
        
                </div>
        
                  <!-- Modal -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Forgot Password ?</h4>
                              </div>
                              <div class="modal-body">
                                  <p>Enter your e-mail address below to reset your password.</p>
                                  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
        
                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                  <button class="btn btn-theme" type="button">Submit</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- modal -->
        
              </form>       
@stop

@extends('layouts.app')

@section('content')
  @php
    use App\Categories;
    use App\User;
  @endphp
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Admin Dashboard</h2></div>

                <div class="panel-body" style="color:#262626;">
                    <h2>Welcome Administrator!</h2>
                    <hr />
                    <h3>Add An Employee</h3>
                    <form class="" action="" method="post">
                      @php
                        User::getAllUsers('userTest');
                      @endphp
                    </form>
                    <button type="button" data-toggle="collapse" data-target="#addnewuser" aria-expanded="false" aria-controls="addnewuser" class="btn btn-primary">Add a new user</button>
                    <div class="collapse" id="addnewuser">
                      <div class="well">
                          <form class="form-horizontal" role="form" method="POST">
                              {{ csrf_field() }}

                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                  <label for="name" class="col-md-4 control-label">Name</label>

                                  <div class="col-md-6">
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                      @if ($errors->has('name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label for="password" class="col-md-4 control-label">Password</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control" name="password" required>

                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                          Register
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                    </div>
                    <hr />
                    <h3>Add A New Vehicle</h3>
                    <form class="" action="" method="post">
                      @php
                        Categories::makeSelectorCat('testSelect');
                      @endphp
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

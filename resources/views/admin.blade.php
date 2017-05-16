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
                    <form class="" action="{{ route('admaddnew') }}" method="post">
                      {{ csrf_field() }}
                      @php
                        User::getAllUsers("userslist");
                      @endphp
                      <div class="form-group">
                        <input type="submit" name="subBtn" value="Add User" class="btn btn-primary">
                      </div>
                    </form>
                    <hr />
                    <h3>Add A New Vehicle</h3>
                    <form class="" action="" method="post">
                      {{ csrf_field() }}
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

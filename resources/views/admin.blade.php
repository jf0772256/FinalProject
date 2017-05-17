@extends('layouts.app')

@section('content')
  @php
    use App\Categories;
    use App\Products;
    use App\Model_Partial;
    use App\User;
    use App\Http\Controllers\ProductsController;
  @endphp
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Admin Dashboard</h2></div>

                <div class="panel-body" style="color:#839496;">
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
                        Categories::makeSelectorCat('categories');
                        Products::getAllMakes('makes','makesSelected');
                      @endphp
                      <label for="model">Select a Model:
                        <select class="" name="model"  id="modelsavail">
                          <option value=""></option>
                        </select>
                      </label>
                      <div class="form-group">
                        <button type="button" name="collapseBtn" class="btn btn-primary" data-target="#addmodel" data-toggle="collapse" aria-expanded="false" aria-controlls="addmodel">Add New Model</button>
                      </div>
                  </form>
                  <div class="collapse" id="addmodel">
                    <div class="well">
                      <form action="{{ route('admnewmdl') }}" method="post">
                          {{ csrf_field() }}
                          <input type="text" name="newModelName" value="">
                          @php
                            Products::getAllMakes('nmMake', 'addMaleModel');
                          @endphp
                          <input type="submit" name="subBtn1" class="btn btn-primary" value="Create New Model">
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

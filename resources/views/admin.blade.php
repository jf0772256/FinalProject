@extends('layouts.app')

@section('content')
  @php
    use App\Categories;
  @endphp
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    Welcome Administrator

                    @php
                      Categories::getCategories();
                    @endphp
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

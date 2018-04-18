@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Category 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Material 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Users All 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Users Today 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-primary mb-3">Create Category</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Category First</h4>
                    <p class="list-group-item-text">
                        How much Categories
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-primary mb-3">Create Material</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Material First</h4>
                    <p class="list-group-item-text">
                        How much Materials
                    </p>
                </a>
            </div>
        </div>

    </div>
@endsection
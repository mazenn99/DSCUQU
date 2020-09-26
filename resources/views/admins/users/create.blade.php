@extends('admins.template.master')
@section('title' , 'Add new Admins')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">Add new Sub-Admin</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Add admin</h3>
                                </div>
                                <hr>
                                <form action="{{route('admins.store')}}" method="POST" novalidate="novalidate">
                                    @csrf
                                    @include('admins._partial.success')
                                    <div class="form-group">
                                        <label for="name" class="control-label mb-1">name</label>
                                        <input id="name" name="name" type="text" class="form-control"
                                               placeholder="Enter name"
                                               value="{{old('name')}}" required>
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="email" class="control-label mb-1">email</label>
                                        <input id="email" name="email" type="email" class="form-control"
                                               placeholder="Enter name"
                                               value="{{old('email')}}" required>
                                        @error('email')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label mb-1">password</label>
                                        <input id="password" name="password" type="password" class="form-control"
                                               placeholder="Enter password"
                                               aria-required="true" aria-invalid="false" required>
                                        @error('password')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation" class="control-label mb-1">re-write password</label>
                                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                                               placeholder="Enter password again"
                                               aria-required="true" aria-invalid="false" required>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Register</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                @include('includes.stat')
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modifier un utilisateur</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active">Utilisateurs</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Modifier un utilisateur</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="{{ url('users/'.$user->id) }}" method="post">
                                @csrf
                                @method('put')
                                    <div class="card-body">
                                    <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <label for="exampleInputEmail1">Email d'utilisateur</label>
                                                    <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <label for="exampleInputEmail1">Num tèl d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->numtel }}" name="numtel" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <label for="exampleInputEmail1">adresse d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->adresse }}" name="adresse" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <label for="exampleInputEmail1">date de recrutement d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->date_recrutement }}" name="date_recrutement" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <label for="exampleInputEmail1">Grade d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->grade }}" name="grade" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
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

@extends('layouts.master')

<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper">
            <!-- insérer un formualaire à travers le template  -->
            <!-- ajouter les classes
            contentcontainer row col-md-6 -->
            <div class="content">
                <div class="container">
                @include('includes.stat')
                    <div class="row">
                        <div class="col-md-12">
                            <!-- le formulaire   -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Ajouter congé</h3>
                                </div>
                                <form action="{{ url('conges') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Date debut</label>
                                                    </div>
                                                    <div class="col-md-8">

                                                        <input type="date" class="form-control" value="{{ old('date_debut') }}"    name="date_debut">

                                                        @error('date_debut')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Date de reprise</label>
                                                    </div>
                                                    <div class="col-md-8">

                                                        <input type="date" class="form-control" value="{{ old('date_retour') }}"  name="date_retour">
                                                        @error('date_retour')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Cause</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" value="{{ old('cause') }}"  name="cause"></textarea>
                                                        @error('date_retour')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- -->
                                    <!-- -->


                                    </div>
                                    <!-- /.card-body -->
                                    <!--  -->
                                    <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-default">Annuler</button>
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                        </div>
                                        </div>
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

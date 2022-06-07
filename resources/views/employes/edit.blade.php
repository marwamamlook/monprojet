<!-- copier le formulaite de creation
ensuite on va faire le traitement  -->
@extends('layouts.master')

<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper">
            <!--  -->
            <!---->
            <!-- -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">modifier un employé</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('employes/'.$employe->cin) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <!-- -->
                                    <div class="card-body">
                                    <!-- -->
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">CIN d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ $employe->cin }}"  placeholder="Saisir le cin" name="cin">

                                                        @error('cin')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Nom d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->name }}"  placeholder="Saisir le nom d'employé" name="name">
                                                        @error('name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Email d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->email }}"  placeholder="Saisir l'email d'employé" name="email">
                                                        @error('email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Mot de passe</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->password }}"  placeholder="Saisir le mot de passe" name="password">
                                                        @error('password')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Num Tèl</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->numtel }}"  placeholder="Saisir le numéro de téléphone" name="numtel">
                                                        @error('numtel')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Adresse</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->adresse }}"  placeholder="Saisir le'adresse" name="adresse">
                                                        @error('adresse')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Date de recrutement</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->date_recrutement }}"   name="date_recrutement">
                                                        @error('date_recrutement')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="">Grade d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="grade">
                                                            <option value="agent administratif" @if($employe->grade == "agent administratif") selected @endif>Agent administraytif</option>
                                                            <option value="employé" @if($employe->grade == "employé") selected @endif>Employé</option>
                                                        </select>
                                                        @error('grade')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Etat</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ $employe->etat }}"   name="etat" placeholder="Saisit l'état d'employé">
                                                        @error('etat')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Solde</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ $employe->solde }}"   name="solde" placeholder="Saisit le solde d'employé">
                                                        @error('solde')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Profession</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control"  value="{{ $employe->profession }}"  name="profession" placeholder="Saisit la profession d'employé">
                                                        @error('profession')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.card-body -->
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

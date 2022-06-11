<!-- créer master   -->
@extends('layouts.master')

<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <!-- -->
        <div class="content-wrapper">
        <!-- Pour afficher la message eon doit utiliser la fonction @session() dans blade -->
            @if(session('edit-message'))
            <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-info"></i> Alert!</h5>
                  {{ session('edit-message') }}
                </div>

            @endif
            @if(session('delete-message'))
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  {{ session('delete-message') }}
                </div>
            @endif
            @if(session('retraite-message'))
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  {{ session('retraite-message') }}
                </div>
            @endif

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des employés</h1>
                    </div>
                    <!-- -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <!-- On va faire des inputs pour les filtrages  -->
                                    <div class="d-flex justify-content-start">
                                        <form action="{{ url('employes/filtrer') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="text" name="solde" class="form-control" placeholder="Saisir solde">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="profession" class="form-control" placeholder="Saisir profession">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="etat" class="form-control" placeholder="Saisir etat">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="submit" class="btn btn-default" value="Filtrer">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--   -->
                                </div>
                                <div class="col-md-2">
                                <div class="d-flex justify-content-end">

                                    <a href="{{ url('employes/create') }}">
                                    <!-- -->
                                        <input type="button" class="btn btn-primary" value="Ajouter">
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
              <div class="col-sm-12 col-md-6">
              </div>
              <div class="col-sm-12 col-md-6"></div></div>
              <div class="row">
              <div class="col-sm-12">
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <!-- Tchamps de la table users  -->
                    <th class="text-center">CIN</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">Etat</th>
                    <th class="text-center">Solde</th>
                    <th class="text-center">Profession</th>
                    <th class="text-center">type contrat</th>
                    <th>action</th>
                    <!-- -->
                </thead>
                <tbody>
                @foreach($employes as $employe)
                <tr role="row" class="odd">
                        <td>{{ $employe->cin }}</td>
                        <!-- -->
                        <td>{{ DB::table('users')->where('id', $employe->user_id)->first()->name }}</td>
                        <td>{{ DB::table('users')->where('id', $employe->user_id)->first()->email }}</td>
                        <td>{{ $employe->etat }}</td>
                        <!--  -->
                        <td>{{ $employe->solde }}</td>
                        <td>{{ $employe->profession }}</td>
                        <td>{{ $employe->type_contrat }}</td>
                        <td>
                        <!---->
                        <div class="row">
                            <div class="col-md-4">
                            <!--  -->
                                <a href="{{ url('employes/'.$employe->cin.'/edit') }}">
                                <i class="fas fa-user-edit" style="color: blue; transform:scale(1.5)"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                            <!-- -->
                                <form action="{{ url('employes/'.$employe->cin)  }}" method="post">
                                    @csrf <!-- clé kil 3ada  -->
                                    @method('delete')
                                    <!--
                                    -->
                                    <button type="submit" style=" background: none; border: none">
                                        <i class="fas fa-trash-alt"  style="color: red; transform:scale(1.5);"></i>
                                    </button>
                                </form>
                            </div>
                            <!---->
                            <div class="col-md-4">
                                <form action="{{ url('employe/'.$employe->cin.'/retraite') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-primary">
                                        Retraite
                                    </button>
                                </form>

                            </div>
                        </div>

                        </td>
                </tr>
                    @endforeach
                <tfoot>
                    <th></th>
                </tfoot>
                <!--
                 -->
                    <th class="text-center">CIN</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">etat</th>
                    <th class="text-center">solde</th>
                    <th class="text-center">profession</th>
                    <th class="text-center">type contrat</th>
                    <th>action</th>
                </tbody>

              </table>
              </div>
              </div>
              </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

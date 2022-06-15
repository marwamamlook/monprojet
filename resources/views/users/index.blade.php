@extends('layouts.master')

@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')

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
            <section class="content-header">
                <div class="container-fluid">
                    @include('includes.stat')
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des utilisateurs</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
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
                    <th class="text-center">ID</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">numtel</th>
                    <th class="text-center">adresse</th>
                    <th class="text-center">grade</th>
                    <th>action</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr role="row" class="odd">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->numtel }}</td>
                        <td>{{ $user->adresse }}</td>
                        <td>{{ $user->grade }}</td>
                        <td>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ url('users/'.$user->id.'/edit ') }}">
                                <i class="fas fa-user-edit" style="color: blue; transform:scale(1.5)"></i>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ url('users/'.$user->id)  }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" style=" background: none; border: none">
                                        <i class="fas fa-trash-alt"  style="color: red; transform:scale(1.5);"></i>
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
                    <th class="text-center">ID</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">numtel</th>
                    <th class="text-center">adresse</th>
                    <th class="text-center">grade</th>
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

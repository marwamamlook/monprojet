<!-- make here design of the table  -->
<!-- We need to set the links of bootstrap files to use it  -->
<!-- create new views like layouts.balde.php -->
<!-- we will import here the layouts file  -->
@extends('layouts')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Num tel</th>
                        <th scope="col">adresse</th>
                        <th scope="col">date de recrutement</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- We will display now here the result of the function index using the variable users  -->
                    <!-- We must to go through an array and display its values  -->
                    <!---->
                    @foreach($users as $user)
                    <!--  -->
                    <!--   -->

                        <tr>
                        <!-- -->
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->numtel }}</td>
                            <td>{{ $user->adresse }}</td>
                            <td>{{ $user->date_recrutement }}</td>
                        </tr>
                    @endforeach
                    </tbody> <!--  -->
                </table>

            </div>
        </div>
    </div>
@endsection

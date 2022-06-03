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

                    @foreach($users as $user)

                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->numtel }}</td>
                            <td>{{ $user->adresse }}</td>
                            <td>{{ $user->date_recrutement }}</td>
                        </tr>
                    @endforeach
                    </tbody>

            </div>
        </div>
    </div>
@endsection

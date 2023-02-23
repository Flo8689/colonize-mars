@extends('main')

@section('content')


<h2 class="text-white">Liste de minerais</h2>
<div>
    <table class="table table-dark table-striped text-white mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($minerals as $mineral)

            <tr>
                <td scope="col">{{ $mineral->id }}</td>
                <td scope="col">{{ $mineral->name }}</td>
                <td scope="col">{{ $mineral->desc }}</td>
            </tr>
                
            @endforeach
            
        </tbody>
    </table>
    <a href="/mineral/create" class="btn btn-primary">AJOUTER UN MINERAI</a>
</div>


@endsection
@extends('main')

@section('content')

    <h2 class="text-white">Ajouter un minerai</h2>     
    <form id="form" action="/mineral/create" method="post" class="pt-3">
        @csrf
        <div class="form-floating mb-3">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" 
                placeholder="Entrez le nom du minerai" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" name="desc" class="form-control" 
                placeholder="Entrez la desciption du minerai" required>
            </div>             
        <button type="submit" class="btn btn-success btn-lg mt-3">Valider</button>
    </form>

@endsection
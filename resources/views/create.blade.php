
@extends('main')

@section('content')  

    <h2 class="text-white">Ajouter une zone dangereuse</h2>
           
    <form id="form" action="/create" method="post" class="pt-3">
        @csrf
        <div class="form-floating mb-3">
            <div class="form-group">
                <label for="">Type de minerai</label>
                <select name="minerals" id="minerals" class="form-select" required>
                    @foreach ($minerals as $mineral)
                    <option value={{ $mineral->id }}>{{ $mineral->name  }}</option>
                    @endforeach
                </select>    
            </div>    
            <div class="form-group">
                <label for="location_lat">Latitude</label>
                <input type="number" name="location_lat" class="form-control" id="location_lat"
                placeholder="Entrez la latitude" min="1" max="12" required>
            </div>
            <div class="form-group">
                <label for="location_long">Longitude</label>
                <input type="number" name="location_long" class="form-control" id="location_long"
                placeholder="Entrez la longitude" min="1" max="12" required>
            </div>
            <div class="form-group">
            <label for="danger_lvl">Niveau de dangerosité</label>
            <input type="number" name="danger_lvl" class="form-control" id="danger_lvl"
                placeholder="Entrez le niveau de danger" min="1" max="10" required>
            </div>
            <div class="form-group">
                <label for="reported_on">Date de découverte</label>
                <input type="date" name="reported_on" class="form-control" id="reported_on"
                placeholder="Entrez la date" required>
            </div>
        </div>
        
        <button type="submit" class="btn btn-success btn-lg mt-3">Valider</button>
    </form>

@endsection


{{-- <style>
    .zone {
    width: 50px!important;
    height: 50px;
    background-color: white;
    border: solid 2px #000000;
    color: #000000;
}
</style> --}}



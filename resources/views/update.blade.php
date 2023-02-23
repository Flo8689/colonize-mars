@extends('main')
    
@section('content')  

<h2 class="text-white">Modifier une zone dangereuse</h2>

    <form id="form" action="/update/{{$zone->id}}" method="post" class="pt-3">
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
                <input value="{{ $zone->location_lat }}" type="number" name="location_lat" class="form-control" id="location_lat"
                min="1" max="12" required>
            </div>
            <div class="form-group">
                <label for="location_long">Longitude</label>
                <input value="{{ $zone->location_long }}" type="number" name="location_long" class="form-control" id="location_long"
                min="1" max="12" required>
            </div>
            <div class="form-group">
            <label for="danger_lvl">Niveau de dangerosité</label>
            <input value="{{ $zone->danger_lvl }}" type="number" name="danger_lvl" class="form-control" id="danger_lvl"
                min="1" max="10" required>
            </div>
            <div class="form-group">
                <label for="reported_on">Date de découverte</label>
                <input value="{{ $zone->reported_on }}" type="date" name="reported_on" class="form-control" id="reported_on"
                required>
            </div>
        </div>
        
        <button type="submit" class="btn btn-success btn-lg mt-3">Valider</button>
    </form>


@endsection
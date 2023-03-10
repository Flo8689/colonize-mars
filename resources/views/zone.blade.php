   

@extends('main')

@section('content')  


<h2 class="text-white">Zones dangereuses reportées</h2>
<table id="tbl"class="table table-dark table-striped text-white mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Minerai</th> 
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">Niveau de danger</th>
        <th scope="col">Date</th>
        <th scope="col">Modifier</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($zones as $zone)  

        <tr>
          <td scope="col">{{$zone->id}}</td>
          <td scope="col">{{$zone->minerals[0]->name  ?? 'None'}}</td>
          {{-- <td scope="col">{{$zone->minerals[0]->desc  ?? 'None'}}</td> --}}
          <td class="latitude" scope="col">{{$zone->location_lat}}</td>
          <td class="longitude" scope="col">{{$zone->location_long}}</td>
          <td scope="col">{{$zone->danger_lvl}}</td>
          <td scope="col">{{$zone->reported_on}}</td>
          <td scope="col">
            <div class="d-flex justify-content-end">
              <div class="d-flex justify-content-end">
                <a href="/update/{{$zone->id}}" class="text-white p-2">
                  <i class="fa-solid fa-pen-to-square" style="color:white" ></i>
                </a>
                <a href="/{{$zone->id}}" class="text-white p-2">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </div>
            </div>
          </td>
        </tr>

      @endforeach
      
    </tbody>
</table> 
<a href="/create" class="btn btn-danger btn-circle btn-lg mb-5 w-100">AJOUTER UNE ZONE</a>


@endsection


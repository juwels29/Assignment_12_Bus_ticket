@extends('layouts.app')

@section('content')


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Journey Date</th>
      <th scope="col">Destination</th>
      <th scope="col">Phone Number</th>
      
    </tr>


    @foreach ($tickets as $key => $data)
    <tr>    
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->journey_date}}</td>
      <td>{{$data->destination}}</td>
      <td>{{$data->phone_number}}</td>
                    

      


    </tr>
    @endforeach
    
  </thead>





  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Samsung</td>
      <td></td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>


@endsection
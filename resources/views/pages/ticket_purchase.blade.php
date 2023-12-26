@extends('layouts.app')

@section('content')


<a href="{{route ('admin.ticket.dashboard') }}" class="btn btn-success m-2">Back</a>
<div class="bg-secondary rounded h-100 p-4">
                            
                <form method="post" action="{{ route ('admin.ticket.store')}}" id="tripForm">
                    @csrf

                    <label for="departure_date">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>

                    <label for="destination">Destination: </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" name="destination" for="inputGroupSelect01">Options</label>
                                        </div>
                                            <select class="custom-select" id="inputGroupSelect01" name="destination">
                                                <option selected>Choose...</option>
                                                <option value="Dhaka to Comilla">Dhaka to Comilla</option>
                                                <option value="Dhaka to Chittagong">Dhaka to Chittagong</option>
                                                <option value="Dhaka to Cox's Bazaar">Dhaka to Cox's Bazaar</option>
                                            </select>
                                        </div>
                    <!-- <input type="text" name="destination" id="destination" class="form-control" required> -->



        <label for="departure_date">Journey Date:</label>
        <input type="text" name="journey_date" id="departure_date" class="form-control datepicker" autocomplete="off" required>


                    <label for="departure_date">Phone Number:</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" autocomplete="off" required>

                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                        </div>

         
         



@endsection
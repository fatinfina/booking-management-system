@extends('layouts.layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Booking</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard.index')}}">Home</a></li>
          <li class="breadcrumb-item">Booking</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Form</h5>

                <!-- Vertical Form -->
                @foreach ($book_data as $data)
                    
                <form class="row g-3" id="editBooking" method="POST" action="{{route('booking.update',['id'=> $data->id])}}">
                  @csrf
                    <div class="col-12">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$data->book_name}}" required>
                    </div>
                    <div class="col-12">
                    <label for="phone" class="form-label">Telephone No.</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$data->book_phone}}" required>
                    </div>
                    <div class="col-6">
                    <label for="people" class="form-label">No. of people</label>
                    <input type="text" class="form-control" id="people" name="people" value="{{$data->book_people}}">
                    </div>
                    
                    
                    <div class="col-6">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$data->book_date}}" required>
                    </div>
                    <div class="col-6">
                    <label for="start" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="start" name="start" value="{{$data->book_timestart}}" required>
                    </div>
                    <div class="col-6">
                    <label for="end" class="form-label">End Time</label>
                    <input type="time" class="form-control" id="end" name="end" value="{{$data->book_timeend}}">
                    </div>
                    <div class="col-12">
                        <label for="venue" class="col-sm-2 col-form-label">Venue</label>
                        <select class="form-select" id="venue" name="venue" form="editBooking" aria-label="Select" required>
                            <option value="{{$data->book_venue}}" selected>{{$data->book_venue}}</option>
                            @foreach ($venue_data as $data)
                            <option value="{{$data->venue_name}}">{{$data->venue_name}}</option>   
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="cancel" class="btn btn-danger" {{ route('booking.index') }}>Cancel</button>
                    </div>
                </form><!-- Vertical Form -->
                @endforeach
                </div>
            </div>
        </div>
        
    </section>
  </main><!-- End #main -->

@endsection
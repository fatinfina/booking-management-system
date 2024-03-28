@extends('layouts.layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>New Booking</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard.index')}}">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Form</h5>

                <!-- Vertical Form -->
                <form class="row g-3" id="addBooking" method="POST" action="{{route('booking.store')}}">
                  @csrf
                    <div class="col-12">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-12">
                    <label for="phone" class="form-label">Telephone No.</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-12">
                    <label for="venue" class="col-sm-2 col-form-label">Venue</label>
                    <select class="form-select" id="venue" name="venue" form="addBooking" aria-label="Select" required>
                        <option selected>Select</option>
                        @foreach ($venue_data as $data)
                        <option value="{{$data->venue_name}}">{{$data->venue_name}}</option>   
                        @endforeach
                    </select>
                    </div>
                    <div class="col-6">
                    <label for="people" class="form-label">No. of people</label>
                    <input type="text" class="form-control" id="people" name="people" required>
                    </div>
                    <div class="col-6">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="col-6">
                    <label for="start" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="start" name="start" required>
                    </div>
                    <div class="col-6">
                    <label for="end" class="form-label">End Time</label>
                    <input type="time" class="form-control" id="end" name="end">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
        
    </section>
  </main><!-- End #main -->

@endsection
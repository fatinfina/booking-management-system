@extends('layouts.layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Venue</h1>
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
                <form class="row g-3" id="addVenue" method="POST" action="{{route('venue.store')}}">
                  @csrf
                    <div class="col-12">
                    <label for="name" class="form-label">Venue Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-12">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Level 2, Menara Weststar">
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
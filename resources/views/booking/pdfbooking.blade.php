@extends('layouts.layout')

@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index')}}">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>

            <!-- Table with stripped rows -->
            <a href="{{ route('booking.add')}}"><button type="button" class="btn btn-secondary"><i class="bi bi-plus-circle me-1"></i>New Booking</button></a>

            <table class="table datatable" id="venue_datatable">
              <thead>
                <tr>
                  <th>No.</th>
                </tr>
                <tr>
                    <th>By</th>
                </tr>
                <tr>
                    <th>Venue</th>
                </tr>
                <tr>
                    <th>Date</th>
                </tr>
                <tr>
                    <th>Time</th>
                </tr>
               
              </thead>
              <tbody>
                @foreach ($book_data as $data)
                  <tr>
                    <td>{{$data->book_name}}</td>
                    <td>{{$data->book_venue}}</td>
                    <td>{{$data->book_date}}</td>
                    <td>{{$data->book_timestart}}</td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

@endsection
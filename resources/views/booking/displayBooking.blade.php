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
                  <th>By</th>
                  <th>Venue</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($book_data as $data)
                  <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->book_name}}</td>
                    <td>{{$data->book_venue}}</td>
                    <td>{{date("d F Y", strtotime($data->book_date))}}</td>
                    <td>{{date("h:i a", strtotime($data->book_timestart))}}</td>
                    <td>
                      <a href={{ route('booking.edit', ['id'=> $data->id]) }}><button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></button></a>
                      <a href={{ route('booking.delete', ['id'=> $data->id]) }}><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></a>
                    </td>
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
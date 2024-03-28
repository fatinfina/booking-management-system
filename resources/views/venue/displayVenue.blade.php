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
            <a href="{{ route('venue.add')}}"><button type="button" class="btn btn-secondary"><i class="bi bi-plus-circle me-1"></i>Add Venue</button></a>

            <table class="table datatable" id="venue_datatable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($venue_data as $data)
                  <tr>
                    <td>{{$data->venue_id}}</td>
                    <td>{{$data->venue_name}}</td>
                    <td>{{$data->location}}</td>
                    <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></button>
                      <a href={{ route('venue.delete', ['id'=> $data->venue_id]) }}><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></a>
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
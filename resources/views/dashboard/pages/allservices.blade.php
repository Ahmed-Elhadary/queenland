@extends('dashboard.layouts.app')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<br><br>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Services</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
            <a class="btn btn-primary " href="{{ route('services.create') }}">Add New</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Arabic Name</th>
                    <th>English Name</th>
                    <th>Arabic Details</th>
                    <th>English Details</th>
                    <th>Icon</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->ar_name }}</td>
                        <td>{{ $service->en_name }}</td>
                        <td>{{ $service->ar_details }}</td>
                        <td>{{ $service->en_details }}</td>
                        <td><i class="{{ $service->icon }}"></i></td>
                       <td>
                        <form action="{{route('services.destroy',$service)}}" method="post" >
                            @csrf
                            @method('delete')
                  <button  class="delete_ancor btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
                        </form>

                  <a  href="{{route('services.edit',$service->id)}}" class="edit_ancor btn btn-warning">
                    <i class="fa fa-edit"></i>
                  </a>

                       </td>

                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
</div>
</div>
    <!-- /.container-fluid -->
  </section>
@endsection

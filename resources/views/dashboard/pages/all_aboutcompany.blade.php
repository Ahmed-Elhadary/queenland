@extends('dashboard.layouts.app')
@section('content')
<br><br>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All About Company</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Arabic Year</th>
                    <th>English Year</th>
                    <th>Arabic Company Name</th>
                    <th>English Company Name</th>
                    <th>English Details</th>
                    <th>Arabic Details</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                
                    @foreach($about_company as $company)
                    <tr>
                         <td>
                            <img src={{ asset('images/About/'.$company->image)}} width="70px" height="70px">
                        </td>
                        <td>{{ $company->ar_year }}</td>
                        <td>{{ $company->en_year }}</td>
                        <td>{{ $company->ar_company_name }}</td>
                        <td>{{ $company->en_company_name }}</td>
                        <td>{{ $company->en_details}}</td>
                        <td>{{ $company->ar_details}}</td>

                       <td>
                        <form action="{{route('aboutcompany.destroy',$company)}}" method="post" >
                            @csrf
                            @method('delete')
                  <button  class="delete_ancor btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
                        </form>

                  <a  href="{{route('aboutcompany.edit',$company->id)}}" class="edit_ancor btn btn-warning">
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

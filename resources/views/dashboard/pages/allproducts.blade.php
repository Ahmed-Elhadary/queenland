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
              <h3 class="card-title">All Products</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
            <a class="btn btn-primary " href="{{ route('products.create') }}">Add New</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Arabic Name</th>
                    <th>English Name</th>
                    <th>Arabic Details</th>
                    <th>English Details</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->ar_name }}</td>
                        <td>{{ $product->en_name }}</td>
                        <td>{{ $product->ar_details }}</td>
                        <td>{{ $product->en_details }}</td>
                        <td>
                            <img src={{ asset('images/Product/'.$product->image)}} width="70px" height="70px">
                        </td>
                       <td>
                        <form action="{{route('products.destroy',$product)}}" method="post" >
                            @csrf
                            @method('delete')
                  <button  class="delete_ancor btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
                        </form>

                  <a  href="{{route('products.edit',$product->id)}}" class="edit_ancor btn btn-warning">
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
    <!-- /.container-fluid -->
  </section>

@endsection

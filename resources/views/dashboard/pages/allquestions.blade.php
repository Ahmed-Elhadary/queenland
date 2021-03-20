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
              <h3 class="card-title">All Questions</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
            <a class="btn btn-primary " href="{{ route('questions.create') }}">Add New</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>English Qustion</th>
                    <th>Arabic Qustion</th>
                    <th>English Answer</th>
                    <th>Arabic Answer</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($questions as $question)
                    <tr>
                        <td>{{ $question->en_question }}</td>
                        <td>{{ $question->ar_question }}</td>
                        <td>{{ $question->en_answer }}</td>
                        <td>{{ $question->ar_answer }}</td>
                       <td>
                        <form action="{{route('questions.destroy',$question)}}" method="post" >
                            @csrf
                            @method('delete')
                  <button  class="delete_ancor btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
                        </form>

                  <a  href="{{route('questions.edit',$question->id)}}" class="edit_ancor btn btn-warning">
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

@extends('backend/Layout.base')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of animals</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-8">List of animals</div>
                  <div class="col-sm-4" style="text-align: right;"><a href="{{route('Animals.create')}}"><button class="btn btn-info"><i class="fas fa-plus"> Add new animal</i></button></a></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Local name</th>
                    <th>Aspect</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($Animals as $Animal)
                       <tr>
                        <td>{{$Animal->Nom}}</td>
                        <td>{{$Animal->Nom_locaux}}</td>
                        <td>{{$Animal->Aspect}}</td>
                        <td>{{$Animal->Couleur}}</td>
                        <td>{{$Animal->Taille}}</td>
                        <td>{{$Animal->Description}}</td>
                        <td>{{$Animal->Picture}}</td>
                        <td><a href="{{route('Animals.edit', $Animal->id)}}">
                          <button class="btn btn-info"><i class="fas fa-edit"></i></button>
                        </a></td>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
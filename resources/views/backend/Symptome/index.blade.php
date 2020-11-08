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
              <li class="breadcrumb-item active">List of symptoms</li>
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
                  <div class="col-sm-8">List of symptoms</div>
                  <div class="col-sm-4" style="text-align: right;"></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Symptom</th>
                    <th>Daparition</th>
                    <th>Animal</th>
                    <th>Sickness</th>
                    <th>Probability</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($Symptomes as $Symptome)
                       <tr>
                        <td>{{$Symptome->Symptome}}</td>
                        <td>{{$Symptome->Daparition}}</td>
                        <td>{{$Symptome->NomAn}}</td>
                        <td>{{$Symptome->Nom}}</td>
                        <td>{{$Symptome->Probabilite}}</td>
                        <td><a href="{{route('Symptomes.edit', $Symptome->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i></button></a></td>
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
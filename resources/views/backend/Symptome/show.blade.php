@extends('Layout.base')
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
              <li class="breadcrumb-item active">List of debarquements</li>
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
                  <div class="col-sm-8">LISTE DU DEBARQUEMENTS</div>
                  <div class="col-sm-4" style="text-align: right;"><a href="{{route('Debarquements.create')}}"><button class="btn btn-info"><i class="fas fa-plus">Add new debarquement</i></button></a></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Poisson</th>
                    <th>Debarquement</th>
                    <th>Quantite</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($Prises as $Prise)
                       <tr>
                        <td>{{$Prise->Poisson_id}}</td>
                        <td>{{$Prise->Debarquement_id}}</td>
                        <td>{{$Prise->Quantite}}</td>
                        <td></td>
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
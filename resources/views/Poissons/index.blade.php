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
              <li class="breadcrumb-item active">List of poissons</li>
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
                  <div class="col-sm-8">LISTE DES POISSONS</div>
                  <div class="col-sm-4" style="text-align: right;"><a href="{{route('Poissons.create')}}"><button class="btn btn-info"><i class="fas fa-plus">Add New Poisson</i></button></a></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>Nom</th>
                    <th>Espece</th>
                    <th>Noms locaux</th>
                    <th>Aspect</th>
                    <th>Couleur</th>
                    <th>Taille</th>
                    <th>Description</th>
                    <th>Picture</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($Poissons as $Poisson)
                       <tr>
                        <td>{{$Poisson->Nom}}</td>
                        <td>{{$Poisson->Espece_id}}</td>
                        <td>{{$Poisson->Nom_locaux}}</td>
                        <td>{{$Poisson->Aspect}}</td>
                        <td>{{$Poisson->Couleur}}</td>
                        <td>{{$Poisson->Taille}}</td>
                        <td>{{$Poisson->Description}}</td>
                        <td>{{$Poisson->Picture}}</td>
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
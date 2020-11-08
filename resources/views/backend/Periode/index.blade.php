@extends('Layout.base')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <button type="button" class="btn btn-success swalDefaultSuccess">
                  Launch Success Toas</button> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of speces</li>
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
                  <div class="col-sm-8"></div>
                  <div class="col-sm-4" style="text-align: right;"><a href="{{route('Especes.create')}}"><button class="btn btn-info"><i class="fas fa-plus">Add New spece</i></button></a></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Caracteristique_distinctifs</th>
                    <th>Taille(cm)</th>
                    <th>Nutrition</th>
                    <th>Comportement</th>
                    <th>Notes</th>
                    <th>Nom</th>
                    <th>Picture</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($Especes as $Espece)
                       <tr>
                        <td>{{$Espece->Caracteristique_distinctifs}}</td>
                        <td>{{$Espece->Taille}}</td>
                        <td>{{$Espece->Nutrition}}</td>
                        <td>{{$Espece->Comportement}}</td>
                        <td>{{$Espece->Notes}}</td>
                        <td>{{$Espece->Nom}}</td>
                        <td>{{$Espece->Picture}}</td>
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
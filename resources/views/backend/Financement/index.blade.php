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
              <li class="breadcrumb-item active">List of fundings</li>
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
                  <div class="col-sm-8">Fundings list</div>
                  <div class="col-sm-4" style="text-align: right;"><a href="{{route('Financements.create')}}"><button class="btn btn-info"><i class="fas fa-plus">Add New Funding</i></button></a></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>Entitled</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Funder</th>
                    <th>Area of ​​expertise</th>
                    <th>Attachment one</th>
                    <th>Attachment two</th>
                    <th>Attachment three</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($Financements as $Financement)
                       <tr>
                        <td>{{$Financement->Intitule}}</td>
                        <td>{{$Financement->Montant}}</td>
                        <td>{{$Financement->Description}}</td>
                        <td>{{$Financement->Bailleur_id}}</td>
                        <td>{{$Financement->Domaine_expertise}}</td>
                        <td>{{$Financement->Piece_jointe1}}</td>
                        <td>{{$Financement->Piece_jointe2}}</td>
                        <td>{{$Financement->Piece_jointe3}}</td>
                        <td><a href="{{route('Financements.edit', $Financement->id)}}">
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
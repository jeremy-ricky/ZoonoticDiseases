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
                  <div class="col-sm-4" style="text-align: right;"><button class="btn btn-info" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus">Add new symptom</i></button></div>
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
                        <td>{{$Symptome->Probabilite}} % </td>
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

  <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Fill in the information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{route('Symptomes.store')}}">
                {{ csrf_field() }}
                  <div class="card-body">
                    <div class="row">
                      <div style="display: none;" class="col-md-6">
                        <div class="form-group">
                          <label>ID *</label>
                            <input type="text" name="Maladie_id" class="form-control" value="{{$id}}">
                          {!! $errors->first('Maladie_id', '<span class="error">:message</span>') !!}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Symptom *</label>
                            <input type="text" name="Symptome" class="form-control">
                          {!! $errors->first('Symptome', '<span class="error">:message</span>') !!}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Appearance *</label>
                            <input type="text" name="Daparition" class="form-control">
                          {!! $errors->first('Daparition', '<span class="error">:message</span>') !!}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Animal *</label>
                          <select name="Animal_id" class="form-control select2" style="width: 100%;">
                            @foreach($Animals as $Animal)
                              <option value="{{$Animal->id}}">{{$Animal->Nom}}</option>
                            @endforeach
                          </select>
                          {!! $errors->first('Animal_id', '<span class="error">:message</span>') !!}
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                          <div class="form-group">
                          <label>Probability *</label>
                            <input type="text" class="form-control" name="Probabilite" >
                            {!! $errors->first('Probabilite', '<span class="error">:message</span>') !!}
                        </div>
                      </div>
                      
                      <!-- /.col -->

                      <div class="col-md-6">
                        <div class="card-footer">
                          <button type="submit" class="btn btn-success swalDefaultSuccess"><i class="fas fa-save"></i> Register</button>
                          <button type="submit" class="btn btn-danger swalDefaultError"><i class="fas fa-undo"></i> Cancel</button>
                        </div>
                      </div>

                    </div>
                  </div>

              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

@endsection
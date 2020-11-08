@extends('backend/Layout.base')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Disease Registration</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <form method="POST" action="{{route('Maladies.store')}}">
             {{ csrf_field() }}
            @include('backend/Maladie._Form')
            <button type="submit" class="btn btn-success swalDefaultSuccess"><i class="fas fa-save"></i> Register</button>
          </form>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<!-- ./wrapper -->
@endsection



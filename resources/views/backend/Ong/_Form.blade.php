   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Name *</label>
                  <input type="text" class="form-control" name="Nom" value="{{ old('Nom') ?: $Ong->Nom }}">
                  {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->
              </div>
              <div class="col-md-6">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Area of ​​expertise *</label>
                  <input type="text" class="form-control" name="Domaine_expertise" value="{{ old('Domaine_expertise') ?: $Ong->Domaine_expertise }}">
                  {!! $errors->first('Domaine_expertise', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->
              </div>
              <div class="col-md-6">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>E-mail *</label>
                  <input type="email" class="form-control" name="Email" value="{{ old('Email') ?: $Ong->Email }}">
                  {!! $errors->first('Email', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->
              </div>
              <div class="col-md-6">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Phone *</label>
                  <input type="text" class="form-control" name="Telephone" value="{{ old('Telephone') ?: $Ong->Telephone }}">
                  {!! $errors->first('Telephone', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->
              </div>
              <div class="col-md-6">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Address *</label>
                  <input type="text" class="form-control" name="Adresse" value="{{ old('Adresse') ?: $Ong->Adresse }}">
                  {!! $errors->first('Adresse', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->
              </div>
              <!-- /.col -->
            </div>

            <div class="card-footer">
                  <button type="submit" class="btn btn-success swalDefaultSuccess"><i class="fas fa-save"></i> Register</button>
                  <button type="submit" class="btn btn-danger swalDefaultError"><i class="fas fa-undo"></i> Cancel</button>
                  <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Update</button>
                </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
</div>

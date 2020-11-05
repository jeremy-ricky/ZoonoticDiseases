   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nom *</label>
                  <input type="text" class="form-control" name="Nom" value="{{ old('Nom') ?: $Agent->Nom }}">
                  {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
              
                <div class="form-group">
                    <label for="exampleInputPassword1">Sexe *</label>
                    <select class="form-control" name="Sexe">
                      <option></option>
                      <option value="HOMME">HOMME</option>
                      <option value="FEMME">FEMME</option>
                    </select>
                  </div>

                  {!! $errors->first('Sexe', '<span class="error">:message</span>') !!}
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label>Telephone *</label>
                  <input type="text" class="form-control" name="Telephone" value="{{ old('Telephone') ?: $Agent->Telephone }}">
                  {!! $errors->first('Telephone', '<span class="error">:message</span>') !!}
                </div>
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Email </label>
                  <input type="email" class="form-control" name="Email" value="{{ old('Email') ?: $Agent->Email }}">
                  {!! $errors->first('Email', '<span class="error">:message</span>') !!}
                </div>
              </div>
            </div>

            <div class="card-footer">
                  <button type="submit" class="btn btn-success swalDefaultSuccess"><i class="fas fa-save"></i> Register</button>
                  <button type="submit" class="btn btn-danger swalDefaultError"><i class="fas fa-undo"></i> Cancel</button>
                  <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Update</button>
                </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
</div>

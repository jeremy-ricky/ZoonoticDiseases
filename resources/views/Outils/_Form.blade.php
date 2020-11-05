   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Nom *</label>
                  <input type="text" class="form-control" name="Nom" value="{{ old('Nom') ?: $Outil->Nom }}">
                  {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Description *</label>
                    <textarea class="form-control" name="Description" >{{ old('Description') ?: $Outil->Description }}</textarea>
                    {!! $errors->first('Description', '<span class="error">:message</span>') !!}
                  </div>
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
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
</div>

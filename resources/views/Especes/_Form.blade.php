   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Caracteristique_distinctifs *</label>
                    <textarea class="form-control" name="Caracteristique">{{ old('Caracteristique') ?: $Espece->Caracteristique_distinctifs }}</textarea>
                    {!! $errors->first('Caracteristique', '<span class="error">:message</span>') !!}
                  </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Comportement *</label>
                    <textarea class="form-control" name="Comportement" >{{ old('Comportement') ?: $Espece->Comportement }}</textarea>
                    {!! $errors->first('Comportement', '<span class="error">:message</span>') !!}
                  </div>
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nutrition *</label>
                    <textarea class="form-control" name="Nutrition">{{ old('Nutrition') ?: $Espece->Nutrition }}</textarea>
                    {!! $errors->first('Nutrition', '<span class="error">:message</span>') !!}
                </div>
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Habitat *</label>
                  <input type="text" class="form-control" name="Habitat" value="{{ old('Habitat') ?: $Espece->Habitat }}">
                  {!! $errors->first('Habitat', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->

                <!-- Color Picker -->
                <div class="form-group">
                  <label>Nom *</label>
                  <input type="text" class="form-control" name="Nom" value="{{ old('Nom') ?: $Espece->Nom }}">
                  {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->

                <!-- time Picker -->
                <div class="form-group">
                  <label>Note *</label>
                  <input type="text" class="form-control" name="Note" value="{{ old('Note') ?: $Espece->Note }}">
                  {!! $errors->first('Note', '<span class="error">:message</span>') !!}
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Taille (cm) *</label>
                  <input type="number" class="form-control" name="Taille" min="0" value="{{ old('Taille') ?: $Espece->Taille }}">
                  {!! $errors->first('Taille', '<span class="error">:message</span>') !!}
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="Picture" value="{{ old('Picture') ?: $Espece->Picture }}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        {!! $errors->first('Picture', '<span class="error">:message</span>') !!}
                      </div>
                    </div>
                  </div>
                <!-- /.form group -->
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

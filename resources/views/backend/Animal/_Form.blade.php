   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nom *</label>
                  <input type="text" class="form-control" name="Nom" value="{{ old('Nom') ?: $Animal->Nom }}">
                  {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
              
                <div class="form-group">
                  <label>Nom local *</label>
                  <input type="text" class="form-control" name="Nom_locaux" value="{{ old('Nom_locaux') ?: $Animal->Nom_locaux }}">
                  {!! $errors->first('Nom_locaux', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label>Aspect *</label>
                  <input type="text" class="form-control" name="Aspect" value="{{ old('Aspect') ?: $Animal->Aspect }}">
                  {!! $errors->first('Aspect', '<span class="error">:message</span>') !!}
                </div>
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Couleur *</label>
                  <input type="text" class="form-control" name="Couleur" value="{{ old('Couleur') ?: $Animal->Couleur }}">
                  {!! $errors->first('Couleur', '<span class="error">:message</span>') !!}
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Taille *</label>
                  <input type="text" class="form-control" name="Taille" value="{{ old('Taille') ?: $Animal->Taille }}">
                  {!! $errors->first('Taille', '<span class="error">:message</span>') !!}
                </div>
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Picture </label>
                  <input type="file" class="form-control" name="Picture">
                  {!! $errors->first('Picture', '<span class="error">:message</span>') !!}
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="Description">{{ old('Description') ?: $Animal->Description }}</textarea>
                </div>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-success swalDefaultSuccess"><i class="fas fa-save"></i> Register</button>
                  <button type="submit" class="btn btn-danger swalDefaultError"><i class="fas fa-undo"></i> Cancel</button>
                </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
</div>

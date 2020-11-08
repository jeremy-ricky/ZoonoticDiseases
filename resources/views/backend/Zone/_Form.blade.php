   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nom *</label>
                  <input type="text" class="form-control" name="Nom" value="{{ old('Nom') ?: $Zone->Nom }}">
                  {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->

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

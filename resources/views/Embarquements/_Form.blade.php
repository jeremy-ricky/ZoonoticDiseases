   
          <div class="card-body">
            <div class="row">
              
              <div class="col-md-6">
               
                <div class="form-group">
                  <label>Campagne *</label>
                  
                  <select class="form-control select2" name="Campagne">
                       <option value="1">Campagne</option>
                  </select>
                  {!! $errors->first('Campagne', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->

                <!-- Color Picker -->
                <div class="form-group">
                  <label>Port *</label>
                  <select class="form-control select2" name="Port">
                       <option value="1">Port</option>
                  </select>
                  {!! $errors->first('Port', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->
               </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date Emb. *</label>
                  <input type="date" class="form-control" name="DateE" value="{{ old('DateE')}}">
                  {!! $errors->first('DateE', '<span class="error">:message</span>') !!}
                </div>

                <div class="form-group">
                  <label>Heure Emb. *</label>
                  <input type="time" class="form-control" name="HeureE" value="{{ old('HeureE') }}">
                  {!! $errors->first('HeureE', '<span class="error">:message</span>') !!}
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

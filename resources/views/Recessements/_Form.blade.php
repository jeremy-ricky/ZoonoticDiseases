   
          <div class="card-body">
            <div class="row">
              
              <div class="col-md-6">
               
                <div class="form-group">
                  <label>Poisson *</label>
                  
                  <select class="form-control select2" name="Poisson">
                       <option value="1">Poisson</option>
                  </select>
                  {!! $errors->first('Poisson', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->

                <!-- Color Picker -->
                <div class="form-group">
                  <label>Agent *</label>
                  <select class="form-control select2" name="Agent">
                       <option></option>
                       @foreach($AgentRessencements as $AgentRessencement)
                          <option value="{{$AgentRessencement->id}}">{{$AgentRessencement->Nom}}</option>
                       @endforeach
                  </select>
                  {!! $errors->first('Agent', '<span class="error">:message</span>') !!}
                </div>
                <!-- /.form group -->

                <!-- time Picker -->
                <div class="form-group">
                  <label>Campagne *</label>
                  <select class="form-control select2" name="Campagne">
                       <option value="1">Campagne 1</option>
                       
                  </select>
                  {!! $errors->first('Campagne', '<span class="error">:message</span>') !!}
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Quantite *</label>
                  <input type="number" class="form-control" name="Quantite" min="0" value="{{ old('Quantite') ?: $Recessement->Quantite }}">
                  {!! $errors->first('Quantite', '<span class="error">:message</span>') !!}
                </div>

                <div class="form-group">
                  <label>Date Rec. *</label>
                  <input type="date" class="form-control" name="DateR" min="0" value="{{ old('DateR') ?: $Recessement->Date_ressencement }}">
                  {!! $errors->first('DateR', '<span class="error">:message</span>') !!}
                </div>

                <div class="form-group">
                  <label>Quota *</label>
                  <input type="number" class="form-control" name="Quota" min="0" value="{{ old('Quota') ?: $Recessement->Quota }}">
                  {!! $errors->first('Quota', '<span class="error">:message</span>') !!}
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

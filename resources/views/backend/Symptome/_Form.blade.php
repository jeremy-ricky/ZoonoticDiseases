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
                            <input type="text" name="Symptome" class="form-control" value="{{$Symptome->Symptome}}">
                          {!! $errors->first('Symptome', '<span class="error">:message</span>') !!}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Appearance *</label>
                            <input type="text" name="Daparition" class="form-control" value="{{$Symptome->Daparition}}">
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
                            <input type="text" class="form-control" name="Probabilite" value="{{$Symptome->Probabilite}}">
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

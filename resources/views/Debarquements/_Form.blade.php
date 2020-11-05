   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Embarquement *</label>
                  <select name="Embarqm" class="form-control" style="width: 100%;">
                    <option value="1">Alaska</option>
                    <option value="1">Kulaska</option>
                  </select>
                  {!! $errors->first('Embarqm', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Date debarquement *</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="dateDebarqm" >
                    {!! $errors->first('dateDebarqm', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                  <div class="form-group">
                  <label>Heure debarquement *</label>
                    <input type="time" class="form-control" id="exampleInputEmail1" name="heureDebarqm" >
                    {!! $errors->first('heureDebarqm', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Port *</label>
                  <select name="Port" class="form-control" style="width: 100%;">
                    <option value="1">Gatumba</option>
                    <option value="1">Kalemi</option>
                  </select>
                  {!! $errors->first('Port', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                <div class="card-footer">
                  <button type="submit" class="btn btn-success swalDefaultSuccess"><i class="fas fa-save"></i> Register</button>
                  <button type="submit" class="btn btn-danger swalDefaultError"><i class="fas fa-undo"></i> Cancel</button>
                  <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Update</button>
                </div>
              </div>

            </div>
          </div>

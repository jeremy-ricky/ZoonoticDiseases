   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Date debit *</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="dateDebit" >
                    {!! $errors->first('dateDebit', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                  <div class="form-group">
                  <label>Date fin *</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="dateFin" >
                    {!! $errors->first('dateFin', '<span class="error">:message</span>') !!}
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

   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Name *</label>
                    <input type="text" class="form-control" name="Nom" placeholder="Enter an name" value="{{ old('Nom') ?: $Mentor->Nom }}" >
                    {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Zoned *</label>
                  <select name="Zone_id" class="form-control" style="width: 100%;">
                    <option value="1">Gitega</option>
                    <option value="2">Ngozi</option>
                  </select>
                  {!! $errors->first('Zone_id', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Phone *</label>
                    <input type="text" class="form-control" name="Telephone" placeholder="Enter your phone number" value="{{ old('Telephone') ?: $Mentor->Telephone }}" >
                    {!! $errors->first('Telephone', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>E-mail *</label>
                    <input type="email" class="form-control" name="Email" placeholder="Enter your email" value="{{ old('Email') ?: $Mentor->Email }}" >
                    {!! $errors->first('Email', '<span class="error">:message</span>') !!}
                </div>
              </div>

               <div class="col-md-6">
                  <div class="form-group">
                  <label>Expertise Erea *</label>
                    <input type="text" class="form-control" name="Domaine_expertise" placeholder="Enter your Domaine of expertise" value="{{ old('Domaine_expertise') ?: $Mentor->Domaine_expertise }}" >
                    {!! $errors->first('Domaine_expertise', '<span class="error">:message</span>') !!}
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

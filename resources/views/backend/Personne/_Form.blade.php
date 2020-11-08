   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Name *</label>
                    <input type="text" class="form-control" name="Nom" placeholder="Enter an name" value="{{ old('Nom') ?: $Personne->Nom }}" >
                    {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Zoned *</label>
                  <select name="Zone_id" class="form-control" style="width: 100%;">
                    @foreach($Zones as $Zone)
                    <option value="{{$Zone->id}}">{{$Zone->Nom}}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('Zone_id', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Phone *</label>
                    <input type="text" class="form-control" name="Telephone" placeholder="Enter your phone number" value="{{ old('Telephone') ?: $Personne->Telephone }}" >
                    {!! $errors->first('Telephone', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>E-mail *</label>
                    <input type="email" class="form-control" name="Email" placeholder="Enter your email" value="{{ old('Email') ?: $Personne->Email }}" >
                    {!! $errors->first('Email', '<span class="error">:message</span>') !!}
                </div>
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

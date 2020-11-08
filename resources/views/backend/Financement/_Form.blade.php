   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Entitled *</label>
                    <input type="text" class="form-control" name="Intitule" placeholder="Enter an entitled" value="{{ old('Intitule') ?: $Financement->Intitule }}" >
                    {!! $errors->first('Intitule', '<span class="error">:message</span>') !!}
                </div>
              </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Amount *</label>
                    <input type="text" class="form-control" name="Montant" placeholder="Enter amount" value="{{ old('Montant') ?: $Financement->Montant }}" >
                    {!! $errors->first('Montant', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Funder *</label>
                  <select name="Bailleur_id" class="form-control" style="width: 100%;">
                    <option value="1">Alaska</option>
                    <option value="2">PNUD RDC</option>
                  </select>
                  {!! $errors->first('Bailleur_id', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Area of ​​expertise *</label>
                    <input type="text" class="form-control" name="Domaine_expertise" placeholder="Enter area of ​​expertise" value="{{ old('Domaine_expertise') ?: $Financement->Domaine_expertise }}" >
                    {!! $errors->first('Domaine_expertise', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Attachment one </label>
                  <input type="file" class="form-control" name="Piece_jointe1">
                  {!! $errors->first('Piece_jointe1', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Attachment two </label>
                  <input type="file" class="form-control" name="Piece_jointe2">
                  {!! $errors->first('Piece_jointe2', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Attachment three </label>
                  <input type="file" class="form-control" name="Piece_jointe3">
                  {!! $errors->first('Piece_jointe3', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Description</label>
                    <textarea name="Description" class="form-control" >{{ old('Description') ?: $Financement->Description }}</textarea>
                    {!! $errors->first('Description', '<span class="error">:message</span>') !!}
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

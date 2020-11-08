   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Entitled *</label>
                    <input type="text" class="form-control" name="Intitule" placeholder="Enter an entitled" value="{{old('Intitule') ?: $Projet->Intitule}}">
                    {!! $errors->first('Intitule', '<span class="error">:message</span>') !!}
                </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                  <label>Attachment one </label>
                  <input type="file" class="form-control" name="Piece_jointe1" value="{{old('Piece_jointe1') ?: $Projet->Piece_jointe1}}">
                  {!! $errors->first('Piece_jointe1', '<span class="error">:message</span>') !!}
                </div>
              </div>

                <div class="col-md-6">
                  <div class="form-group">
                  <label>Amount *</label>
                    <input type="text" class="form-control" name="Montant" placeholder="Enter amount" value="{{old('Montant') ?: $Projet->Montant}}">
                    {!! $errors->first('Montant', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->
              
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Attachment two </label>
                  <input type="file" class="form-control" name="Piece_jointe2" value="{{old('Piece_jointe2') ?: $Projet->Piece_jointe2}}">
                  {!! $errors->first('Piece_jointe2', '<span class="error">:message</span>') !!}
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Ngo *</label>
                  <select name="Ong_id" class="form-control select2" style="width: 100%;">
                    @foreach($Ongs as $Ong)
                    <option value="{{$Ong->id}}">{{$Ong->Nom}}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('Bailleur_id', '<span class="error">:message</span>') !!}
                </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                  <label>Attachment three </label>
                  <input type="file" class="form-control" name="Piece_jointe3" value="{{old('Piece_jointe3') ?: $Projet->Piece_jointe3}}">
                  {!! $errors->first('Piece_jointe3', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Description</label>
                    <textarea name="Description" class="form-control">{{old('Description') ?: $Projet->Description}}</textarea>
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

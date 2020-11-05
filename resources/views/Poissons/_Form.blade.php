   
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Nom *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Nom" placeholder="Saisir un nom" >
                    {!! $errors->first('Nom', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Espece *</label>
                  <select name="Espece" class="form-control" style="width: 100%;">
                    <option value="1">Alaska</option>
                  </select>
                  {!! $errors->first('Espece', '<span class="error">:message</span>') !!}
                </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                  <label>Nom locaux *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nomLocaux" placeholder="Saisir Nom locaux" >
                    {!! $errors->first('nomLocaux', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Aspect *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Aspect" placeholder="Saisir Aspect" >
                    {!! $errors->first('Aspect', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <!-- Color Picker -->
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Couleur *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Couleur" placeholder="Saisir une couleur" >
                    {!! $errors->first('Couleur', '<span class="error">:message</span>') !!}
                </div>
              </div>
                <!-- /.form group -->
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Taille(centimetre) *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Taille" placeholder="Saisir une taille" >
                    {!! $errors->first('Taille', '<span class="error">:message</span>') !!}
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="File" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose picture</label>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label>Description</label>
                    <textarea name="Description" class="form-control"></textarea>
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

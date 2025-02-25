<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario publicar Vehiculo</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculo</li>
          <li class="breadcrumb-item"><a href="#">Publicar Vehiculo</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="col-form-label" for="nummatricula">Numero de matricula</label>
                        <input class="form-control" type="text" name="nummatricula" placeholder="Numero matricula">
                   </div>
                   <div class="form-group">
                    <label for="nommodelo">Modelo</label>
                    <select class="form-control" name="nommodelo">
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                        <label class="col-form-label" for="kvehiculo">Kilometraje vehiculo</label>
                        <input class="form-control" type="text" name="kvehiculo" placeholder="Kilometraje vehiculo">
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="cvehiculo">Color Vehiculo</label>
                        <input class="form-control" type="text" name="cvehiculo" placeholder="Color">
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="evehiculo">Estado vehiculo</label>
                        <input class="form-control" type="text" name="evehiculo" placeholder="Estado">
                   </div>
                  <div class="form-group ">
                  <label class="col-form-label" for="subimg">Subir Imagen</label>
                  <div action="/file-upload" class="dropzone" id="myDrop">
                        <div class="fallback">
                            <input name="file" type="file"  />
                        </div>
                        </div>
                        
                      </div>
                
                  </div>
                </form>
              </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include ("includes/footer.php")?>

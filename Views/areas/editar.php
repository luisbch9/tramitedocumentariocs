 <h2 class="text-center">Editar área</h2>
 
 <form role="form" class="form-horizontal container">
  
  <div class="form-group">

    <label for="area" class="col-sm-2 control-label">Area:</label>
    <div class="col-sm-10"> 
      <input name="area" type="text" class="form-control" id="area">
    </div>

  </div>
  
  <div class="form-group">

    <label for="person" class="col-sm-2 control-label">Jefe de área:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="person">
    </div>

  </div>

   <div class="form-group">
    
    <label for="descrip" class="col-sm-2 control-label" required placeholder="Ingrese descripción acerca de la nueva área">Descripción del área:</label>
    <div class="col-sm-10" >
    <textarea class="form-control" rows="3" id="descrip"></textarea>
    </div>
   </div>

  <div class="form-group row container">
    <div class="col-sm-offset-2 col-sm-10">
      
      <button type="submit" class="btn btn-default">Guardar</button>
    </div>
  </div>

</form>
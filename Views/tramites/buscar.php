	<!--............................. VER ESTADO .............................. !-->
<h2 class="text-center">Buscar trámite</h2>
<form class="form-horizontal container" method="get" action="<?php echo URLM ?>tramites/buscar" >
	<div class="form-group" >
		<label for="buscar" class="col-sm-2 control-label">Buscar por </label>
		<div class="col-sm-10" >
			<label class="radio-inline"><input required type="radio" name="bus" id="buscar" value="1" >Apellidos</label>			
			<label class="radio-inline"><input type="radio" name="bus" id="buscar" value="0" >DNI</label>
		</div>		
	</div>

	
	<div class="form-group">
  		<label for="dato" class="col-sm-2 control-label" ></label>
  		<div class="col-sm-10" >
  			<input name="dat" type="text" class="form-control" id="dato" required placeholder=" Ingrese dato a buscar">
  		</div>
  	</div>

  	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default">Buscar Trámite</button>
    	</div>
  	</div>

	
</form>

			<!--.............................FIN VER ESTADO .............................. !-->	

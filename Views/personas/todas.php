
<h2 class="text-center">Todas las personas</h2>
<div class="container">
  <table class="table table-striped">
  <thead>
      <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <!--<th><li><a href="<?php echo URLM ?>empleados/crear">Registar</a></li></th>!-->
        <th><span class="glyphicon glyphicon-user"></span>Ver Perfil</th>
        <th><span class="glyphicon glyphicon-pencil"></span>Editar</th>
      </tr>
    </thead>
  
    <tbody>      
      <script type="text/javascript">
        var nuevo,tamanio;
        //nuevo=data[0];
        tamanio=data.length; 
        for(var i=0; i<tamanio;i++){
          nuevo=data[i];
          document.write("<tr><td>"+nuevo[0]+"</td>");
          document.write("<td>"+nuevo[1]+"</td>");
          document.write("<td>"+nuevo[2]+"</td>");
          document.write("<td>"+nuevo[3]+"</td>");
          document.write("<td><a href='<?php echo URLM ?>empleados/crear'><span class='glyphicon glyphicon-user'></span></a>"+"</td>");
          document.write("<td><a href='<?php echo URLM ?>empleados/crear'><span class='glyphicon glyphicon-pencil'></span></a>"+"</td></tr>");
        }

      </script>
    </tbody>
  </table>
</div>
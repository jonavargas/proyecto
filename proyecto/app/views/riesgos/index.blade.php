<?php
    if (Auth::check()) {
?>      
        <h2 class="titulos"><strong>Riesgos</strong></h2>     
        <div class="create">{{link_to("riesgos/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?>


<table class="table table-bordered table-hover">
    <tr class="tr">
        <th class="th">Nombre Riesgo</th>
        <th class="th">Descripción</th>
        <th class="th">Solución</th>
        <th class="th">Proyecto</th>

        <?php
            if (Auth::check()) {                
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';                    
            }
        ?>

    </tr>
    @foreach($riesgos as $riesgo)
        <tr>
            <td ALIGN=center>{{ $riesgo->nombre }}</td>   
            <td ALIGN=center>{{ $riesgo->descripcion }}</td>    
            <td ALIGN=center>{{ $riesgo->solucion }}</td>
            @foreach($proyectos as $proyecto)
                <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            @endforeach           
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='riesgos/$riesgo->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='riesgos/$riesgo->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 

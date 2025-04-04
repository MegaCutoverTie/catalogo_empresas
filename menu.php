<?php
?>
<div class="row mb-3 mt-3">
    <div class="col-sm-10 ">
        <div class="btn-group">
            <button id="btn1" type="button" class="btn btn-primary"onClick="crear()">Crear Usuario</button>
            <button id="btn2" type="button" class="btn btn-primary"onClick="modificar()">Modificar Usuario</button>
            <button id="btn3" type="button" class="btn btn-primary"onClick="eliminar()">Eliminar Usuario</button>
            <button  type="button" class="btn btn-dark" onclick="window.location.href = 'pdf.php';">Checar PDF</button>
            <button  type="button" class="btn btn-dark" onclick="window.location.href = 'excel.php';">Descargar EXCEL</button>
        </div>
    </div>
    <div class="col-sm-2 text-end">
        <button type="button" class="btn btn-dark" onClick="salir()">salir</button>
    </div>
</div>
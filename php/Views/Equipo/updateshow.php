<h2 class="titulo">Actualizar Equipo</h2>
<div class="container form">
    <form action="?controller=equipo&&action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $equipo->getId() ?>">
        <table>
            <tr>
                <td>
                    <label for="text">Nombre</label>
                </td>
                <td>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $equipo->getNombre() ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text">Descripción</label>
                </td>
                <td>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $equipo->getDescripcion(); ?>">
                </td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
</div>
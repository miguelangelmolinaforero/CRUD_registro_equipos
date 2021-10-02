<h2 class="titulo">Registro de Equipo</h2>
<div class="container form">
    <form action="?controller=equipo&&action=save" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nombre">Nombre de Equipo</label>
                </td>
                <td>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="descripcion">Descripción</label>
                </td>
                <td>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese la descripcion">
                </td>
            </tr>
        </table>
        <button type="submit">Guardar</button>
    </form>
</div>
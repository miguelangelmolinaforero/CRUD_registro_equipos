<div class="container">
    <h2 class="titulo">Filtra tu equipo</h2>
    <form class="form" action="?controller=equipo&action=search" method="post">
        <div class="">
            <input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"> </span> Buscar</button>
        </div>
    </form>
    <h2 class="titulo">Lista Equipos</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Accion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaEquipos as $equipo) {?>
            <tr>
                <td>
                    <a href="?controller=equipo&&action=updateshow&&idequipo=<?php  echo $equipo->getId()?>">
                        <?php echo $equipo->getId(); ?>
                    </a>
                </td>
                <td>
                    <?php echo $equipo->getNombre(); ?>
                </td>
                <td>
                    <?php echo $equipo->getDescripcion(); ?>
                </td>
                <td><a href="?controller=equipo&&action=delete&&id=<?php echo $equipo->getId() ?>">Eliminar</a> </td>
                <td><a href="?controller=equipo&&action=updateshow&&idequipo=<?php echo $equipo->getId() ?>">Editar</a> </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>

</div>
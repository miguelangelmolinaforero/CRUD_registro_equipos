CREATE TABLE `crud_registro_equipos`.`equipos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre_equipo` VARCHAR(30) NOT NULL,
    `descripcion` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
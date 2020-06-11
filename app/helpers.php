<?php
// Para cargar este archivo es necesario que el composer tenga configurado en la seccion
// autoload-files en nombre de este archivo. Ir a composer y verificar esto.
// Si se incluye la linea para configurar esta carga se debe ejecutar en consola el sig
// comando: composer dumpautoload.
// Tambien se debe ejecutar ese comando cada ves que se realice un cambio en este archivo.

function setActive($nombreRuta){

	return request()->routeIs($nombreRuta) ? 'active' : '';

}
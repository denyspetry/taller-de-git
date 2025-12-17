<?php
    // Autor: Denys Petrychenko <denyspetrychenko@gmail.com>
    // El nombre por defecto es Mundo
    print "Introduce tu nombre:";
    $nombre = trim(fgets(STDIN));
    @print "Hola, {$nombre}\n";
?>
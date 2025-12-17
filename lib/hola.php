<?php
    // Autor: Denys Petrychenko <denyspetrychenko@gmail.com>
    require('HolaMundo.php');
    
    print "Introduce tu nombre:";
    $nombre = trim(fgets(STDIN));
    print new HolaMundo($nombre);

?>
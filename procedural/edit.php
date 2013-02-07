<?php

include "include/connection.php";


echo $q = mysql_query("update tabela set
		coluna1 = 'teste teste teste teste teste teste teste teste teste teste teste teste',
		coluna2 = 'teste teste teste teste teste teste teste teste teste teste teste teste.
    													  Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
    													  Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et
    													  netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede.
    													  teste teste teste teste teste teste. Suspendisse dui purus, scelerisque
    													  at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.
    													  Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit
    													  feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia
    													  nulla nisl eget sapien.',
		coluna3 = '1234567890'
		where id = 4;		
		") or die(mysql_error());


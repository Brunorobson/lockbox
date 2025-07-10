<?php

//$_SESSION['auth'];

session_destroy();
return redirect('/login');
exit();

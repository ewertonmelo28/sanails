<!-- Validação de logout -->
<?php
session_start();
session_destroy();
header('Location: ../index.php?menuop=login');
exit();

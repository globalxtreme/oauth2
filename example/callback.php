<?php
include('../index.php');

use GlobalXtreme\OAuth2\GXOAuth;

$employee = GXOAuth::employee();
echo json_encode($employee->toArray());

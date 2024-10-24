<?php 
require_once 'models/role_model.php';
session_start();

if (isset($_GET['modul'])) {
  $modul = $_GET['modul'];
}else{
  $modul = 'dashboard';
}

switch ($modul) {
  case 'dashboard':
    include 'view/kosong.php';
    break;
  case 'role':
    $obj_modelRole = new modelRole();

    if (isset($_GET['fitur'])) {
      $fitur = $_GET['fitur'];
    }else{
      $fitur = null;
    }
    switch ($fitur) {
      case 'add':
        $role_name = $_POST['role_name'];
        $role_desc = $_POST['role_description'];
        $role_status = $_POST['role_status'];
        $obj_modelRole->addRole($role_name, $role_desc, $role_status);
        header('location: index.php?modul=role');
        break;
      default:
        $obj_role = $obj_modelRole->getAllRoles();
        include 'view/role_list.php';
    }
    break;
}
?>

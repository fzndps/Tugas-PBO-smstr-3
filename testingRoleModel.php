<?php
session_start();
session_destroy();
require_once 'models/role_model.php';

echo "== default data role =="."<br>";

$obj_role = new ModelRole();

foreach($obj_role->getAllRoles() as $role) {
  echo "role ID : ".$role->role_id."<br>";
  echo "role Name : ".$role->role_name."<br>";
  echo "role Description : ".$role->role_description."<br>";
  echo "role Status : ".$role->role_status."<br>"."<br>";

}

// echo "== testing add new =="."<br>";

// $obj_role->addRole('new role', 'testing role', 0);
// $obj_role->addRole('new role 2', 'testing new role', 1);
// foreach($obj_role->getAllRoles() as $role) {
//   echo 'role ID : '.$role->role_id.'<br>';
//   echo 'role Name : '.$role->role_name.'<br>';
//   echo 'role Description : '.$role->role_description.'<br>';
//   echo 'role status : '.$role->role_status.'<br>'.'<br>';
// }

// echo "== update data role == "."<br>";
// $obj_role->updateRole(1, "test update", "role desc", 1);
// foreach( $obj_role->getAllRoles() as $role) {
//   echo "role ID : ".$role->role_id."<br>";
//   echo "role Name : ".$role->role_name."<br>";
//   echo "role Description : ".$role->role_description."<br>";
//   echo "role Status : ".$role->role_status."<br>"."<br>";
// }


echo "== after delete data role =="."<br>";
$obj_role_id_delete = 1;
$obj_role->deleteRole( $obj_role_id_delete );
foreach($obj_role->getAllRoles() as $role) {
  echo "role Id : ".$role->role_id."<br>";
  echo "role Name : ".$role->role_name."<br>";
  echo "role Description : ".$role->role_description."<br>";
  echo "role status : ".$role->role_status."<br>"."<br>";
}

?>
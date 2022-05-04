<?php  error_reporting(1);
require_once('db_connect.php');
require_once('functions.php');
include('./phpqrcode/qrlib.php');
date_default_timezone_set("Europe/Tallinn");

$first_name = "";
$last_name = "";
$department = "";
$temp_check = "";
$employee_id=0;
$phone="";
$isVisitor = 0;


session_start(); /* Starts the session */

if (isset($_POST['save'])){
# Get data from form
$first_name = filter_input(INPUT_POST,'first_name');
$last_name =  filter_input(INPUT_POST,'last_name');
$department = filter_input(INPUT_POST,'department');
$temp_check = filter_input(INPUT_POST,'temp_check');
$isVisitor = filter_input(INPUT_POST,'isVisitor');
$phone = filter_input(INPUT_POST,'phone');

# Create timestamp for check in time
$date_in = date('Y-m-d H:i:s');

# Verify that everything has bee entered (should not be required as validation is done in HTML intput form with bootstrap validation classes)
if($first_name == null || $last_name == null ){
# Print an error if values aren't entered
$err_msg = "All values not entered<br>";
include('db_error.php');

# Validate Data with Regular Expressions
# Regular Expressions are codes used to match patterns
# Check if first name contains only characters with a max of 30
} elseif(!preg_match("/[a-zA-Z]{3,30}$/", $first_name)){
  $_SESSION['message']='First name not valid<br>Expecting only alphabetical letters between 3 to 30 characters long<br>';
  $_SESSION['msg_type']='warning';
#include('db_error.php');
} elseif(!preg_match("/[a-zA-Z]{3,30}$/", $last_name)){
  $_SESSION['message'] = "Last name not valid<br>Expecting only alphabetical letters between 3 to 30 characters long<br>";
  $_SESSION['msg_type']='warning';
#include('db_error.php');
} elseif(!preg_match("/^$|[a-zA-Z]{1,30}$/", $department)){
  $_SESSION['message']= "Department not valid<br>Expecting only alphabetical letters between 0 to 30 characters long<br>";
  $_SESSION['msg_type']='warning';
#include('db_error.php');
} else { 
  if (!($temp_check==1)) {
# if temperature is not 'Y' go home.
$temp_ok='NOK';
$employee_msg = "Your temperature exceeds 38°C<br> you should return home.<br>";
} else{
$temp_ok='OK';
$employee_msg = "You can proceed into the building.<br> Remember to checkout when you leave.<br>";
  }
  if ($isVisitor){
createVisitorBadge(574,354, $first_name, $last_name, $department,$phone,$temp_ok,$location,$checkin,$date_in);
  shell_exec("brother_ql -b pyusb -m QL-700 -p usb://0x04F9:0x2042/000J2Z462429 print -l 62 label.png");
  // delete label after print
unlink('label.png');
}

# Create your query using : to add parameters to the statement
$query_employee_create = 'INSERT INTO employees (first_name, last_name ,department, checkin, last_updated, employee_id, temp_check, isVisitor, phone) 
VALUES (:first_name, :last_name,:department, :checkin, :last_updated, :employee_id, :temp_check, :isVisitor, :phone)';

# Create a PDOStatement object
$employee_create_statement = $db->prepare($query_employee_create);

# Bind values to parameters in the prepared statement
$employee_create_statement->bindValue(':first_name',$first_name);
$employee_create_statement->bindValue(':last_name',$last_name);
$employee_create_statement->bindValue(':temp_check',$temp_ok);
$employee_create_statement->bindValue(':checkin',$date_in);
$employee_create_statement->bindValue(':last_updated',$date_in);
$employee_create_statement->bindValue(':department',$department);
$employee_create_statement->bindValue(':employee_id',null,PDO::PARAM_INT);
$employee_create_statement->bindValue(':isVisitor',$isVisitor);
$employee_create_statement->bindValue(':phone',$phone);

# Execute the query and store true or false based on success
$execute_create_success = $employee_create_statement->execute();
$employee_create_statement->closeCursor();

if (!$execute_create_success){
# If an error occurred print the error 
print_r($employee_create_statement->errInfo()[2]);
$_SESSION['message']='Record has not been saved due to an error!<br>';
$_SESSION['msg_type']='danger';
} else{
  $_SESSION['message']='Record has been saved!<br>' . $employee_msg;
  if ($temp_ok=='OK'){
  $_SESSION['msg_type']='success';
  } else {
    $_SESSION['msg_type']='danger';
  }
}
}
header("location: index.php");
}


# Delete button is pressed
if(isset($_GET['delete'])){
$employee_id = $_GET['delete'];
$query_employee_delete = 'DELETE FROM employees WHERE employee_id=:employee_id';

# Create a PDO statement object
$employee_delete_statement = $db->prepare($query_employee_delete);

# Bind values to parameters in the prepared statement
$employee_delete_statement->bindValue(':employee_id',$employee_id,PDO::PARAM_INT);

# Execute the query and store true or false based on success
$execute_delete_success = $employee_delete_statement->execute();
$employee_delete_statement->closeCursor();

if (!$execute_delete_success){
  print_r($employee_delete_statement->errInfo()[2]);
  $_SESSION['message']='Record was not deleted due to an error!';
  $_SESSION['msg_type']='danger';
} else {
  $_SESSION['message']='Record has been deleted!';
  $_SESSION['msg_type']='danger';
}
header("location: index.php");
}

# Edit button is pressed (update record)
if(isset($_GET['edit'])){

  # show edit form

  $employee_id = $_GET['edit'];
  $query_employee_edit = 'SELECT * FROM employees WHERE employee_id=:employee_id';
  
  # Create a PDO statement object
  $employee_edit_statement = $db->prepare($query_employee_edit);
  
  # Bind values to parameters in the prepared statement
  $employee_edit_statement->bindValue(':employee_id',$employee_id,PDO::PARAM_INT);
  
  # Execute the query and store true or false based on success
  $execute_edit_success = $employee_edit_statement->execute();

  if (!$execute_edit_success){
    print_r($employee_edit_statement->errInfo()[2]);
  } else{
    $employee_edit = $employee_edit_statement->fetchAll();
    $first_name = $employee_edit[0]['first_name'];
    $last_name = $employee_edit[0]['last_name'];
    $department = $employee_edit[0]['department'];
    $temp_check = $employee_edit[0]['temp_check'];
    $isVisitor = $employee_edit[0]['isVisitor'];
    $phone = $employee_edit[0]['phone'];
    }
    $employee_edit_statement->closeCursor();
  }
  

  # Update button is pressed (update record)
if(isset($_POST['update'])){

  $employee_id = $_POST['employee_id'];
  $first_name = filter_input(INPUT_POST,'first_name');
  $last_name =  filter_input(INPUT_POST,'last_name');
  $department = filter_input(INPUT_POST,'department');
  $temp_check = filter_input(INPUT_POST,'temp_check');
  $date_updated = date('Y-m-d H:i:s');
  $isVisitor = filter_input(INPUT_POST, 'isVisitor');
  $phone = filter_input(INPUT_POST,'phone');
  

  if (!($temp_check==1)) {
    # if temperature is not 'Y' go home.
    $temp_ok='NOK';
    $employee_msg = "You should check out now<br> and return home.<br>";
    } else{
    $temp_ok='OK';
    $employee_msg = "You can proceed into the building.<br> Remember to checkout when you leave.<br>";
    }

    $query_employee_update = 'UPDATE employees
                              SET first_name = :first_name, last_name=:last_name,
                              department=:department, temp_check=:temp_check, last_updated=:last_updated,phone=:phone
                              WHERE employee_id=:employee_id';
                              

  
  # Create a PDO statement object
  $employee_update_statement = $db->prepare($query_employee_update);

  # Bind values to parameters in the prepared statement
$employee_update_statement->bindValue(':first_name',$first_name);
$employee_update_statement->bindValue(':last_name',$last_name);
$employee_update_statement->bindValue(':temp_check',$temp_ok);
$employee_update_statement->bindValue(':last_updated',$date_updated);
$employee_update_statement->bindValue(':department',$department);
$employee_update_statement->bindValue(':employee_id',$employee_id,PDO::PARAM_INT);
$employee_update_statement->bindValue(':phone',$phone);

  # Execute the query and store true or false based on success
  $execute_update_success = $employee_update_statement->execute();
  $employee_update_statement->closeCursor();
  if (!$execute_update_success){
    print_r($employee_update_statement->errInfo()[2]);
    $_SESSION['message']='Record has not been updated due to an error!';
    $_SESSION['msg_type']='danger';
  } else{
    $_SESSION['message']='Record was updated!';
    $_SESSION['msg_type']='warning';
  }
  header('location:index.php');
}

# Checkout button is pressed (check out employee)
if(isset($_GET['checkout'])){

  # Create timestamp for check out time
$date_out = date('Y-m-d H:i:s');

  $employee_id = $_GET['checkout'];
  $query_employee_checkout = 'UPDATE employees
                              SET checkout=:date_out WHERE employee_id=:employee_id';
  
  # Create a PDO statement object
  $employee_checkout_statement = $db->prepare($query_employee_checkout);
  
  # Bind values to parameters in the prepared statement
  $employee_checkout_statement->bindValue(':employee_id',$employee_id,PDO::PARAM_INT);
  $employee_checkout_statement->bindValue(':date_out',$date_out);
  
  # Execute the query and store true or false based on success
  $execute_checkout_success = $employee_checkout_statement->execute();

  if (!$execute_checkout_success){
    print_r($employee_checkout_statement->errInfo()[2]);
    $_SESSION['message']='An error occured!';
    $_SESSION['msg_type']='danger';
  } else{
    $_SESSION['message']='You have successfully checked out!';
    $_SESSION['msg_type']='success';
  }
  header('location:index.php');
  }

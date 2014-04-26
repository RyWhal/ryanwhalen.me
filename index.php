<?php
error_reporting(E_ALL);

// default action; use example.com/script.php?action=blah to control which function to call
$action = 'index';
if (isset($_GET['action']))
{
 $action = $_GET['action'];
}

// create the controller and call the requested action if possible
$controller = new Controller();
if (is_callable(array($controller, $action )))
{
 $controller->$action();
}
else
{
 print "Invalid action ($action)";
}
exit; // and we're done

// helper function
function site_url()
{
 return $_SERVER['SCRIPT_NAME'];
}

/**
 * basic controller class, any public method will be accessible via script.php?action=method
 */
class Controller
{
 private $model;

 function __construct()
 {
  // create an instance of any models used
  $this->model = new Model();
 }

 public function index()
 {
  include "views/header.php";
  // the template will have to know we create the $message variable here
  require "views/index.php";
  include "views/footer.php";
 }

 public function resume()
 {
  include "views/header.php";
  require "views/resume.php";
  include "views/footer.php";
 }
 public function home()
 {
  include "views/header.php";
  require "views/home.php";
  include "views/footer.php";
 }
public function Experience()
 {
  include "views/header.php";
  require "views/experience.php";
  include "views/footer.php";
 }
public function Projects()
 {
  include "views/header.php";
  require "views/projects.php";
  include "views/footer.php";
 }
public function contact()
 {
  include "views/header.php";
  require "views/contact.php";
  include "views/footer.php";
 }
public function about()
 {
  include "views/header.php";
  require "views/about.php";
  include "views/footer.php";
 }
public function artwork()
 {
  include "views/header.php";
  require "views/artwork.php";
  include "views/footer.php";
 }
}


/**
 * simple model class, handles getting data for the controller
 * This could use database connections, or other methods
 */
class Model
{
 public function get_message()
 {
  return;
 }
}
?>

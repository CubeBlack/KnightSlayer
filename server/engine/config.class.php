<?php
$DBL_prefixo = "Eddy";

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "lima";

session_save_path('');

$error_show = true;

class Config{
  public function __construct(){
    //--------- Error
    $this->show_error = true;
    //--------- banco de dados
    $this->dbl_index = "dblIndex";

    $this->db_host = "localhost";
    $this->db_user = "root";
    $this->db_password = "";
    $this->db_name = "cubeblack";
    //------------

  }
}

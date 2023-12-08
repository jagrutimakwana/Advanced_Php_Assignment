<?php
class model
{
public $conn="";
function __construct()
  {
  $this->conn=new Mysqli('localhost','root','','booking_room');
  }
  
  function select($tbl)
  {
       echo $sel="select * from $tbl";   //query
       $res=$this->conn->query($sel);    //run
       
       while ($fetch=$res->fetch_object())   //fetch all data from database
       {
        $arr[]=$fetch;
       }
       if(!empty($arr))
       {
        return $arr;
       }
       
  }
  
    

	//$arr=array("name"=>"jagruti","email"=>"jagruti@gmail.com","password"=>"1234");
  
   function insert($tbl,$arr)
   {
	   $key_arr=array_keys($arr);  //key find of arr array ("0"=>"name","1"=>"email","2"=>"password")
	   $col_str=implode(",",$key_arr); //array to string (name,email,password)
	   
	   $value_arr=array_values($arr);
	   $value_str=implode("','",$value_arr);  // ('jagruti','jagruti@gmail.com','1234')
	   
	   echo $ins="insert into $tbl($col_str)values('$value_str')";   //query
	   $res=$this->conn->query($ins);   //run
	   return $res;
   }
   
   
$obj=new model;

?>
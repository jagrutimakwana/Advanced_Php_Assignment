<?php

include_once('model.php'); //step 1 load model

class control extends model // step 2 extends
{
	// magic function that call automatically when you declare class object
	 function __construct()
	 {
		 
		 session_start();
		 
		 model::__construct();// step 3 call model __construct
		 
		 date_default_timezone_set('asia/calcutta');
		 
		 $url=$_SERVER['PATH_INFO'];
		 switch($url)
		 {
			 case '/signup':
			 $types_arr=$this->select('types');
			 if(isset($_REQUEST['submit']))
			 {
				 $name=$_REQUEST['name'];
				 $ch_indate=$_REQUEST['ch_indate'];
				 $ch_outdate=$_REQUEST['ch_outdate'];
				 
				 $type_id=$_REQUEST['type_id'];
				 
				 $created_at=date("Y-m-d H:i:s");
				 $updated_at=date("Y-m-d H:i:s");
				
				 
				 $arr=array("name"=>$name,"ch_indate"=>$ch_indate,"ch_outdate"=>$ch_outdate,"type_id"=>$type_id,"created_at"=>$created_at,"updated_at"=>$updated_at);
				 
				 $res=$this->insert('bookings',$arr);
				 if($res)
				 {
					 echo "<script>
					     alert('Booking registered success');
						 </script>";
			     }
				 else
			     {
					 echo "<script>
					      alert('failed');
						  </script>";
				 }
			 }
			 include_once('signup.php');
			 break;
			 
			 default:
			 include_once('pagenotfound.php');
			 break;
		 }
	 }
}
$obj=new control;
?>
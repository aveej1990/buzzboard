 <?php
 ini_set('display_errors',1);
 error_reporting(E_ALL);
 include 'Curd.php';

 $curd = new Curd(); // Object Creation for calss Curd 
 
 $id=isset($_REQUEST['id']) ? $_REQUEST['id'] :1;

  $mob=isset($_REQUEST['mob']) ? $_REQUEST['mob'] :7207522946;

 echo $sql="update user set user_mobile=$mob where user_id=$id ";
 $res=$curd->insup($sql);

 if($res)
 {
      $r= json_decode($res);
      echo $r->msg;
 }
 else
 {
    echo "error";
 }

 $sql='SELECT e.first_name,e.last_name,e.Empid as Emp_id,r.Empid FROM employee e JOIN roseindia r  on e.Empid= r.Empid';

 $result=$curd->excecute($sql);


 $data=json_decode($result);
 $result=$data;

  echo "<pre>";
 print_r($result);


 foreach ($result->result->data as $key => $value) {
   # code...

   // if(!empty($value['first_name']))
        echo  $key.".........".(isset($value->first_name)? $value->first_name :'no data to display')."<br>";
 }


 ?>
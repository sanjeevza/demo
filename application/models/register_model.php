<?php
class register_model extends CI_Model{
    
    //insert into users table
    function saverecords($name,$email,$class){
        $query="Select email from users where email='$email'";
        $data = $this->db->query($query);
        if($data->num_rows()== 1){
            echo "User is already registered with this mailid";
        }
        else{
            $query="INSERT into users values('','$class','$email','$name','')";
            $this->db->query($query);
        }
    }
    function get(){
        $query="select * from users";
        return $this->db->query($query);

    }
}

?>
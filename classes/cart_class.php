<?php
include_once (dirname(__DIR__,1) . '/settings/db_class.php');



class Cart_class extends db_connection{

    //Insert method
    public function insert_cart($product_id,$user_id, $quantity, $ip) {

        //formulate insert query
        $sql = "INSERT INTO cart(p_id,c_id,qty,ip_add) VALUES('$product_id','$user_id','$quantity','$ip')";

        if($this->select_cart($product_id, $user_id)){
            return array(false, "Product already in cart. Increse quantity instead.");
        }
        //execute query
        $run= $this->db_query($sql);

        if($run){
            return array(true, "Product added to cart");
        }else{
            return array(false, "Product not added to cart");
        }
    }


    //Select method
    public function select_cart($productid,$customerid) {

        //formulate select query
        $sql = "SELECT * FROM cart where p_id= '$productid' and c_id= '$customerid'";
        //$result = $this->db_fetch($sql);

        //execute query
        return $this->db_fetch_all($sql);

        if($this->db_count() < 1){
            return false;
        }else{
            return true;
        }

    }


    //Delete model
    public function cart_delete($productid,$customerid) {

        //formulate delete query
        $sql = "DELETE FROM cart WHERE p_id='$productid' AND c_id='$customerid'";

        //execute query
        return $this->db_query($sql);
    }



    //Update model
    public function quant_update($customerid, $quantity, $productid) {

        //formulate update query
        $sql = "UPDATE cart SET qty = '$quantity' WHERE c_id = '$customerid' AND p_id='$productid'";

        //execute query
        return $this->db_query($sql);
    }

    public function select_all_cart($customerid){
        $sql = "SELECT p_id, qty FROM cart where c_id= $customerid";
        return $this->db_fetch_all($sql);
    }
    

    public function countCart($id){
         $sql= "SELECT COUNT(*) FROM cart WHERE c_id='$id'";
            return $this->db_fetch_one($sql)['COUNT(*)'];

    }

}


?>
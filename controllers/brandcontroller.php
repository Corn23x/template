<?php 
    //model
include("../classes/product_class.php");

    function brand_add($brand) {
        //model class instance
        $product_brand = new Brand_class();

        //run insert model method
        $run_brand = $product_brand->insert_brand($brand);

        if ($run_brand) {
            return true;
        }
        else{
            return false;
        }
    }

    function brand_select() {
        //model class instance
        $brandview = new Brand_class();

        //run select phone model method
        $run_brand = $brandview->select_brand();
        //create array
        // print_r($run_brand);
        return $run_brand;
        // if ($run_brand) {
        //     $view_all = array();
        //     //loop through fetch array
        //     while ($onebrand=$brandview->db_fetch()) {
        //         //append record to array
        //         $view_all[]=$onebrand;
        //         //$view_all[$onebrand['brand_id']] = $onebrand['brand_name'];
        //     }
        //     return $view_all;
        // }
        // else{
        //     return false;
        // }
    }

    function delete_brand($brandid) {
        //model class instance
        $branddel = new Brand_class();

        //run select phone model method
        $run_delete = $branddel->brand_delete($brandid);
        if ($run_delete) {
            
            return true;
        }
        else{
            return false;
        }
    }

    function update_brand($brandname, $brandid) {
        //model class instance 
        $brupdate = new Brand_class();

        //run select phone model method
        $run_update = $brupdate->brand_update($brandname, $brandid);
        if ($run_update) {
            return true;
        }
        else {
            return false;
        }
    }
?>
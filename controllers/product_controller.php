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


    
    // Category controllers

    function cat_insert($catname) {
        //model class instance
        $product_cat = new Category_class();

        //run insert phone model method
        $run_cat = $product_cat->insert_cat($catname);

        if ($run_cat) {
            return true;
        }
        else{
            return false;
        }
    }

    function cat_select() {
        //model class instance
        $catview = new Category_class();

        //run select phone model method
        $run_cat = $catview->select_cat();
        return $run_cat;
      
    }
    
    function cat_delete($catid) {
        //model class instance
        $catdel = new Category_class();

        //run select phone model method
        $run_delete = $catdel->delete_cat($catid);
        if ($run_delete) {
            
            return true;
        }
        else{
            return false;
        }
    }

    function cat_update($catname, $catid) {
        //model class instance 
        $catupdate = new Category_class();

        //run select phone model method
        $run_update = $catupdate->update_cat($catname, $catid);
        if ($run_update) {
            return true;
        }
        else {
            return false;
        }
    }
?>

<!-- End of Category Function -->
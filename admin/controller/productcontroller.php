<?php 
    //model
    require('../Admin/model/productmodel.php');

    function insert_product($cat, $brand, $title, $price, $desc, $image, $keywords) {
        //model class instance
        $product_add = new Product_class();

        //run insert phone model method
        $run_product = $product_add->product_insert($cat, $brand, $title, $price, $desc, $image, $keywords);

        if ($run_product) {
            return true;
        }
        else{
            return false;
        }
    }

    function select_product($sql) {
        //model class instance
        $productview = new Product_class();

        //run select phone model method
        $run_product = $productview->product_select();
        //create array
        if ($run_product) {
            $view_all = array();
            //loop through fetch array
            while ($oneproduct=$productview->db_fetch_one($sql)) {
                //append record to array
                $view_all[]=$oneproduct;
            }
            return $view_all;
        }
        else{
            return false;
        }
    }
    function delete_product($productid) {
        //model class instance
        $prodel = new Product_class();

        //run select phone model method
        $run_delete = $prodel->product_delete($productid);
        if ($run_delete) {
            
            return true;
        }
        else{
            return false;
        }
    }

    function update_product($productcat, $productbrand, $producttitle, $productprice, $productdesc,
    $productimage, $productkeywords, $prodid) {
        //model class instance 
        $proupdate = new Product_class();

        //run select phone model method
        $run_update = $proupdate->product_update($productcat, $productbrand, $producttitle, $productprice, 
        $productdesc, $productimage, $productkeywords, $prodid);
        if ($run_update) {
            return true;
        }
        else {
            return false;
        }
    }

    function cat_select($sql) {
        //model class instance
        $catview = new Product_class();

        //run select phone model method
        $run_cat = $catview->select_cat();
        //create array
        if ($run_cat) {
            $view_all = array();
            //loop through fetch array
            while ($onecat=$catview->db_fetch_one($sql)) {
                //append record to array
                $view_all[]=$onecat;
            }
            return $view_all;
        }
        else{
            return false;
        }
    }

    function brand_select($sql) {
        //model class instance
        $brandview = new Product_class();

        //run select phone model method
        $run_brand = $brandview->select_brand();
        //create array
        if ($run_brand) {
            $view_all = array();
            //loop through fetch array
            while ($onebrand=$brandview->db_fetch_one($sql)) {
                //append record to array
                $view_all[]=$onebrand;
                //$view_all[$onebrand['brand_id']] = $onebrand['brand_name'];
            }
            return $view_all;
        }
        else{
            return false;
        }
    }
?>
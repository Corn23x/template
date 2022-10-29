<?php 
    //model
    require('../Admin/model/categorymodel.php');

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
        //create array
        if ($run_cat) {
            $view_all = array();
            //loop through fetch array
            while ($onecat=$catview->db_fetch()) {
                //append record to array
                $view_all[]=$onecat;
            }
            return $view_all;
        }
        else{
            return false;
        }
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
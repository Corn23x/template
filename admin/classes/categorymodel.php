<?php
    //database credentials
    require('../Admin/settings/db_class.php');

    class Category_class extends db_connection {

        //Insert method
        public function insert_cat($catname) {

            //formulate insert query
            $sql = "INSERT INTO categories(cat_name) VALUES('$catname')";

            //execute query
            return $this->db_query($sql);
        }

        //Select method
        public function select_cat()  {

            //formulate select query
            $sql = "SELECT * FROM categories";
            //$result = $this->db_fetch($sql);

            //execute query
            return $this->db_query($sql);;
        }

        //Delete model
        public function delete_cat($catid) {

            //formulate delete query
            $sql = "DELETE FROM categories WHERE cat_id='$catid'";

            //execute query
            return $this->db_query($sql);
        }

        //Update model
        public function update_cat($catname, $catid) {

            //formulate update query
            $sql = "UPDATE categories SET cat_name = '$catname' WHERE cat_id = '$catid'";

            //execute query
            return $this->db_query($sql);
        }

    }


    
?>
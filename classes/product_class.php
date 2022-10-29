<?php
    //database credentials
    include('../settings/db_class.php');

    class Brand_class extends db_connection {

        //Insert method
        public function insert_brand($brandname) {

            //formulate insert query
            $sql = "INSERT INTO brands(brand_name) VALUES('$brandname')";

            //execute query
            return $this->db_query($sql);
        }

        //Select method
        public function select_brand() {

            //formulate select query
            $sql = "SELECT * FROM brands";
            //$result = $this->db_fetch($sql);

            //execute query
            return $this->db_fetch_all($sql);;
        }

        //Delete model
        public function brand_delete($brandid) {

            //formulate delete query
            $sql = "DELETE FROM brands WHERE brand_id='$brandid'";

            //execute query
            return $this->db_query($sql);
        }

        //Update model
        public function brand_update($brandname, $brandid) {

            //formulate update query
            $sql = "UPDATE brands SET brand_name = '$brandname' WHERE brand_id = '$brandid'";

            //execute query
            return $this->db_query($sql);
        }

    }


    
?>
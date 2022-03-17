<?php

require_once('dbconfig.php');
     $db = new dbconfig();
     
    class operations extends dbconfig{
        public function rows_post() {
                global $db;
            $query  = "select * from product";
            $result = mysqli_query($db->connection,$query) or die('error');
                
            return $result;
        }

        public function exist_value() {
            global $db;
            $sku = $_POST['sku'];
        $query  = "select * from product where sku='$sku'";
        $result = mysqli_query($db->connection,$query) or die('error');
            $row = mysqli_num_rows($result);
        return $row;
    }

        public function view_post(){  
           global $db;
           $num_per_page=12;
           if(isset($_GET["page"])){
            $page = $_GET["page"];
           }else{
               $page=1;
           }
           
           $start_from = ($page-1)*12;
           $query  = "select * from product order by id desc limit $start_from,$num_per_page";
           $result = mysqli_query($db->connection,$query) or die('error');
           
           return $result;

        }

        public function Stored_Var(){
            global $db;
            if(isset($_POST['submit'])){
                    $sku = $db->check($_POST['sku']);
                    $name = $db->check($_POST['name']);
                    $price = $db->check($_POST['price']);
                    $size = $db->check($_POST['size']);
                    $height = $db->check($_POST['height']);
                    $width = $db->check($_POST['width']);
                    $length = $db->check($_POST['length']);
                    $weight = $db->check($_POST['weight']);

                    if($height==!'' && $width==!'' && $length==!''){
                    $dimensions = $height.'x'.$width.'x'.$length;
                    }else{
                        $dimensions = '';
                    }
                    if($this->exist_value()==0){
                    $this->insert_post($sku,$name,$price,$size,$weight,$dimensions);
                  
                }else{
                    echo "<div class='alert alert-danger' role='alert'>This sku exist in our database</div><script>setTimeout(() => {window.location.href='index.php'}, 1000);</script>";
                }   
            }
        }
        public function insert_post($a,$b,$c,$d,$e,$f){    
            global $db;
           
            $query = "insert into product (sku,name,price,size,weight,dimensions) values('$a','$b','$c','$d','$e','$f')";
             $result = mysqli_query($db->connection,$query);
             
             if($result)
             {
                return true;
             }else{
                 return false;
             }
           
            
        }
        public function delete_post(){
            global $db;
            if(isset($_POST['deletebtn'])){
                $list_ids = $_POST['delete'];
                $extract_id = implode(',',$list_ids);

                $query = "DELETE FROM product WHERE id IN($extract_id)";
                $result = mysqli_query($db->connection,$query);
                if($result){
                    echo "<script>window.location.href='./'</script> ";
                }
                
            }
        }
    
    }
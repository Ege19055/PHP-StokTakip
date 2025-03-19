<?php 
include "database.php";


function addToCart($urun_item){

    if(isset($_SESSION["sepet"])){

        $sepet =  $_SESSION["sepet"];
        $urunler = $sepet["urunler"];

    }else{
        $urunler = array();
    }


    if(array_key_exists($urun_item->urun_id,$urunler)){
        $urunler[$urun_item->urun_id]->count++;
    }else{
        $urunler[$urun_item->urun_id] = $urun_item;
    }


    $total_price = 0.0;
    $total_count = 0;

    foreach($urunler as $urun){

        $urun->total_price = $urun->count * $urun->urun_fiyat;
        $total_price = $total_price + $urun->total_price;
        $total_count += $urun->count;
    }

    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;

    $_SESSION["sepet"]["urunler"] = $urunler;
    $_SESSION["sepet"]["summary"] = $summary;

    return $total_count;

}
function removeFromCart($urun_id){

    if(isset($_SESSION["sepet"])){

        $sepet =  $_SESSION["sepet"];
        $urunler = $sepet["urunler"];

        if(array_key_exists($urun_id,$urunler)){
            unset($urunler[$urun_id]);
        }

        $total_price = 0.0;
        $total_count = 0;

        foreach($urunler as $urun){

            $urun->total_price = $urun->count * $urun->price;
            $total_price = $total_price + $urun->total_price;
            $total_count += $urun->count;
        }

        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count; 

        $_SESSION["sepet"]["urunler"] = $urunler;
        $_SESSION["sepet"]["summary"] = $summary;

        return true;

    }

}
function incCount($urun_id){

    if(isset($_SESSION["sepet"])){

        $sepet =  $_SESSION["sepet"];
        $urunler = $sepet["urunler"];

        if(array_key_exists($urun_id,$urunler)){
            $urunler[$urun_id]->count++;
        }
        $total_price = 0.0;
        $total_count = 0;
    
        foreach($urunler as $urun){
    
            $urun->total_price = $urun->count * $urun->price;
            $total_price = $total_price + $urun->total_price;
            $total_count += $urun->count;
        }
    
        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;
    
        $_SESSION["sepet"]["urunler"] = $urunler;
        $_SESSION["sepet"]["summary"] = $summary;
    
        return true;

    }


   


}
function decCount($urun_id){

    if(isset($_SESSION["sepet"])){

        $sepet =  $_SESSION["sepet"];
        $urunler = $sepet["urunler"];

        if(array_key_exists($urun_id,$urunler)){
            $urunler[$urun_id]->count--;
            if($urunler[$urun_id]->count == 0){
                unset($urunler[$urun_id]);
            }
        }
       
       $total_price = 0.0;
        $total_count = 0;
    
        foreach($urunler as $urun){
    
            $urun->total_price = $urun->count * $urun->price;
            $total_price = $total_price + $urun->total_price;
            $total_count += $urun->count;
        }
    
        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;
    
        $_SESSION["sepet"]["urunler"] = $urunler;
        $_SESSION["sepet"]["summary"] = $summary;
    
        return true;

    }

}

if(isset($_POST["p"])){
    
    $islem = $_POST["p"];

    if($islem == "addToCart"){

        $id = $_POST["urun_id"];

        $urun = $db->query("SELECT * FROM urunler WHERE urun_id={$id}", PDO::FETCH_OBJ)->fetch();
        $urun->count = 1;

        echo addToCart($urun);

    
    
    }else if($islem == "removeFromCart"){

        $id = $_POST["urun_id"];
        echo removeFromCart($id);
    }

}


if(isset($_GET["p"])){
    
    $islem = $_GET["p"];

    if($islem == "incCount"){

        $id = $_GET["urun_id"];

        if(incCount($id)){
            header("location:../shopping-cart.php");
        }
        
    
    }else if($islem == "decCount"){

        $id = $_GET["urun_id"];
        if(decCount($id)){
            header("location:../shopping-cart.php");
        }
       
    }

}

?>
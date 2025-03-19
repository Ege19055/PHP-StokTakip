
   
$(document).ready(function(){
    $(".addToCartBtn").click(function(){
        var urunID = $(this).attr("urun-id"); 
        addToCart(urunID);
    });

    function addToCart(urunID) {

        $.ajax({
            type: "POST",
            url: "sepet.php", 
            data: {urunID: urunID},
            success: function(response) {
                alert("Ürün sepete eklendi!");
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    $(".removeFromCartBtn").click(function(){
        
        var url = "http://localhost/stok_takip/include/cart_db.php";
        var data = {
            p : "removeFromCart",  
            urun_id : $(this).attr("urun-id")
        }

        $.post(url,data,function(response){
           
            window.location.reload();
        });

    });
}); 

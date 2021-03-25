
class Panier{

    addOne(btn){
        let prix = btn.dataset.price;
        let products = btn.dataset.product;

        document.cookie = "panier=["products+","+prix+"]";
        console.log(document.cookie );
        
        

    }
    setcookie(){

        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();


    }
    deleteCookie(){
        
    
    }
}

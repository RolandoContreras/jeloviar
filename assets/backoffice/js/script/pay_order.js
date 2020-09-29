function update_order(id){
    var qty = document.getElementById("qty").value;
    if(qty > 0){
        $.ajax({
            type: "post",
            url: site + "catalogo/pay_order/update_cart",
            dataType: "json",
            data: {id: id,
                   qty: qty},

            success:function(data){            
                if(data.status == "true"){
                    document.getElementById("quantity_error").style.display = "none";
                    document.getElementById("quantity_success").style.display = "block";
                    location.reload();
                }
            }            
        });
    }else{
        document.getElementById("quantity_error").style.display = "block";
    }
}
function delete_order(id){
        $.ajax({
            type: "post",
            url: site + "backoffice/order/delete_cart",
            dataType: "json",
            data: {id: id},
            success:function(data){            
                if(data.status == "true"){
                    location.reload();
                }
            }            
        });
}
function process_pay_invoice(){
        $.ajax({
            type: "post",
            url: site + "catalogo/pay_order/process_pay_invoice",
            dataType: "json",
            data: {},
            success:function(data){            
                if(data.status == "true"){
                    document.getElementById("pay_success_2").style.display = "block";
                    document.getElementById("exampleModal").showModal();
                }
            }            
        });
}
function add_cart(course_id,price,name){
        $.ajax({
            type: "post",
            url: site + "backoffice/order/add_cart",
            dataType: "json",
            data: {course_id: course_id,
                   price: price,
                   name: name},

            success:function(data){            
                if(data.status == "true"){
                    swal("Producto Agregado", "", "success");
                    window.setTimeout(function(){location.reload()},1000);
                }else{
                    swal("Hubo un error!", "No se pudo agregar el producto!", "error");
                }
            }            
        });
}
function add_cart_home(course_id,price,name,img){
        $.ajax({
            type: "post",
            url: site + "backoffice/order/add_cart",
            dataType: "json",
            data: {course_id: course_id,
                   price: price,
                   name: name},

            success:function(data){            
                if(data.status == "true"){
                   swal("Producto Agregado", "", "success");
                    window.setTimeout(function(){location.reload()},1000)
                }else{
                    swal("Hubo un error!", "No se pudo agregar el producto!", "error");
                }
            }            
        });
}
function show_stripe(){
    var stripe = document.getElementById("stripe");
    var bank = document.getElementById("bank");
    var eth = document.getElementById("eth");
      if (stripe.style.display === "none") {
        stripe.style.display = "block";
        bank.style.display = "none";
        eth.style.display = "none";
        //agregar clase
        $("#stripe_style").addClass("active");
        $("#bank_style").removeClass("active");
        $("#eth_style").removeClass("active");
      } 
}
function show_eth(){
    var eth = document.getElementById("eth");
    var stripe = document.getElementById("stripe");
    var bank = document.getElementById("bank");
      if (eth.style.display === "none") {
        eth.style.display = "block";
        bank.style.display = "none";
        stripe.style.display = "none";
        //agregar clase
        $("#eth_style").addClass("active");
        $("#stripe_style").removeClass("active");
        $("#bank_style").removeClass("active");
      } 
}

function show_bank(){
    var bank = document.getElementById("bank");
    var stripe = document.getElementById("stripe");
    var eth = document.getElementById("eth");
      if (bank.style.display === "none") {
        bank.style.display = "block";
        stripe.style.display = "none";
        eth.style.display = "none";
        //agregar clase
        $("#bank_style").addClass("active");
        $("#eth_style").removeClass("active");
        $("#stripe_style").removeClass("active");
      }
}




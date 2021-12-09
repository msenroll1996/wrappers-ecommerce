$(document).on('change', '#category', function () {
    var id = $(this).val();
    $.ajax({
        type: "get",
        url: "/admin/product/getSubCategory",
        data: { id: id},
        dataType:'json',
        success: function (response) {
            $('#sub_category').empty();
            $.each(response.results,function(index,value){
                
                $("#sub_category").append(
                    '<option value="'+value.id+'">'+value.name+'</option>'
            );
            });
        }
    })
    
});

//generate slug

function add_to_cart(id) {
    var button = $("#" + id);
    // if (button.prop('disabled')) {
    //     alert('Not in stock');
    // }
    button.prop('disabled',true);
    var route = button.attr('route');
    var qtyToIncreaseBy = $("#qtyValue"+id).val() ?? 1;
   $.ajax({
       type: "get",
       url: route,
       data: { id: id,qtyToIncreaseBy:qtyToIncreaseBy},
       dataType:'json',
       success:function(response){
        var jsonObject = response.cart.items;
        var keyCount  = Object.keys(jsonObject).length;
        $( "#keyCount" ).text('There are ' + keyCount + ' items in your cart');
        
        $("#totalPrice").text('Rs ' + response.cart.totalPrice);
        // console.log(Object.keys(jsonObject)[0]);
        // $("#cartProduct").attr("src",response.img_src);
        // $('#popupAddcart').modal("show");
        
        window.location.href = response.url;
        //    $( "#totalQty" ).show();
        //    $( "#totalQty" ).text(response.cart.keyCount);
           button.prop('disabled',false);
       },
       error:function(result)
       {
           alert('Error occur!Please try again.');
           button.prop('disabled',false);
           return false;
       }
   });
   return false;

   

}

function reduceByOne(id) {
    var button = $("#"+id);
    button.prop('disabled',true);
    var route = button.attr('route');
   $.ajax({
       type: "get",
       url: route,
       data: { id: id},
       dataType:'json',
       success:function(response){
        if(response.route){
            window.location.href = response.route;
        }
        else{
            $("#itemPrice"+id).text('Rs '+response.price);
            $("#cartQty"+id).text(response.qty);
            $("#cartSubTotalPrice").text('Rs '+response.totalPrice);
            $("#cartTotalPrice").text('Rs '+response.totalPrice);
        }
        //    var jsonObject = response.cart.items;
        //    console.log(Object.keys(jsonObject)[0]['qty']);
        // var jsonObject = response.cart.items;
        // var keyCount  = Object.keys(jsonObject).length;
        // $( "#keyCount" ).text('There are ' + keyCount + ' items in your cart');
        
        // $("#totalPrice").text('Rs ' + response.cart.totalPrice);
        // console.log(jsonObject);
        // console.log(Object.keys(jsonObject)[0]);
        // $("#cartProduct").attr("src",response.img_src);
        // $('#popupAddcart').modal("show");
        
        // // window.location.href = response.url;
        //    $( "#totalQty" ).show();
        //    $( "#totalQty" ).text(response.cart.keyCount);
            button.prop('disabled',false);
       },
       error:function(result)
       {
           alert('Error occur!Please try again.');
           button.prop('disabled',false);
           return false;
       }
   });
   return false;
}

function addByOne(id) {
    var button = $("#add"+id);
    button.prop('disabled',true);
    var route = button.attr('route');
   $.ajax({
       type: "get",
       url: route,
       data: { id: id},
       dataType:'json',
       success: function (response) {
        if(response.route){
            window.location.href = response.route;
        }
        $("#itemPrice"+id).text('Rs '+response.price);
        $("#cartQty"+id).text(response.qty);
        $("#cartSubTotalPrice").text('Rs '+response.totalPrice);
        $("#cartTotalPrice").text('Rs '+response.totalPrice);
            
        //    var jsonObject = response.cart.items;
        //    console.log(Object.keys(jsonObject)[0]['qty']);
        // var jsonObject = response.cart.items;
        // var keyCount  = Object.keys(jsonObject).length;
        // $( "#keyCount" ).text('There are ' + keyCount + ' items in your cart');
        
        // $("#totalPrice").text('Rs ' + response.cart.totalPrice);
        // console.log(jsonObject);
        // console.log(Object.keys(jsonObject)[0]);
        // $("#cartProduct").attr("src",response.img_src);
        // $('#popupAddcart').modal("show");
        
        // // window.location.href = response.url;
        //    $( "#totalQty" ).show();
        //    $( "#totalQty" ).text(response.cart.keyCount);
            button.prop('disabled',false);
       },
       error:function(result)
       {
           alert('Error occur!Please try again.');
           button.prop('disabled', false);
           
           return false;
       }
   });
   return false;
}

function removeItem(id) {
    var button = $("#remove"+id);
    button.prop('disabled',true);
    var route = button.attr('route');
    $.ajax({
        type: "get",
        url: route,
        data: { id: id},
        dataType:'json',
        success: function (response) {
             window.location.href = response.route;
     
             button.prop('disabled',false);
        },
        error:function(result)
        {
            alert('Error occur!Please try again.');
            button.prop('disabled', false);
            
            return false;
        }
    });
    return false;

    
    
}
function confirmDelete(id) {
    var result = confirm("Are you sure to decline this order?");
    if (result) {
        var button = $("#decline"+id);
        button.prop('disabled',true);
        var route = button.attr('route');
        window.location.href = route;
        button.prop('disabled',false);
    }
    
}
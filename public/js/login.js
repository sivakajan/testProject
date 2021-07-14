

$(document).ready(function(){
    $("#pack1").on("input", function(){
         var str = $("#pack1").val()*250;
        // alert(str)
        $("#packsub1").val(str);

        total();

    });
});

$(document).ready(function(){
    $("#pack2").on("input", function(){
         var str = $("#pack2").val()*350;
        // alert(str)
        $("#packsub2").val(str);
       total();
        // alert(str)
    });
});

$(document).ready(function(){
    $("#pack3").on("input", function(){
         var str = $("#pack3").val()*500;
        // alert(str)
        $("#packsub3").val(str);
         total();
        // alert(str)
    });
});


function total(){
    // alert("hi total")
    var str1 =parseInt( $("#packsub1").val() );
    var str2 = parseInt( $("#packsub2").val() );
    var str3 = parseInt( $("#packsub3").val() );

    var  to=str1+str2+str3;
     // alert(to )
    $("#total").val(to);
}

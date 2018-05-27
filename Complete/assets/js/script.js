$(document).ready(function() {
 $('#insert_form').on('submit',function(event){
    event.preventDefault();
    if($('#account').val()=="")
    {
      alert("Please fill in the form");
    }
    else if ($('#optradio').val()=="") {
      alert("Please fill in the form");
    }
    else if ($('#stockSymbol').val()=="") {
      alert("Please fill in the form");
    }
    else if ($('#price').val()=="") {
      alert("Please fill in the form");
    }
    else if ($('#volume').val()=="") {
      alert("Please fill in the form");
    }
    else if ($('#pincode').val()=="") {
      alert("Please fill in the form");
    }
    else {
      $.ajax({
        url:"insert_order.php",
        method:"POST",
        data:$('#insert_form').serialize(),
        success:function(data){
          if(data=="failed"){
            /*alert("Wrong PINCODE");*/
           $('#submit_message').html("Your PINCODE is wrong.");
          }
          else if (data=="failedSell") {
            //$('#submit_message').html(data);
            alert("You cannot sell this stock because you don't have it yet.");
          }
          else if (data=="failedMinus") {
            alert("You cannot sell this stock because you don't have enough stock.");
          }
          else {
            $('#submit_message').html(data);
            $('#loginModal').hide();
            location.reload();
          }
        }
    });
  }
});
});

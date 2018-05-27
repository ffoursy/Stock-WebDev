<script>
function updateStock(market_type)
{
  var countNum = <?php echo $i;?>;
  var stockArr = <?php echo json_encode($stockSym)?>;
  var lastArr = <?php echo json_encode($lastclose)?>;
  var marketType = market_type;
  /*document.getElementById("test").innerHTML = stockArr[1];*/
  for (var i = 0; i < countNum; i++) {
    var stockSym = stockArr[i];
    var lastclose = lastArr[i];
    /*document.getElementById("mySidenav").innerHTML = stock;*/
    $.ajax({
      url:"updateStockdata.php",
      method:"POST",
      data:{stockSym:stockSym,lastclose:lastclose,marketType:marketType},
      dataType: "text",
      success:function(strMessage){
        document.getElementById("test").innerHTML = "hi";
        //$('#test').text(strMessage);
        //document.getElementById("test").innerHTML = stockArr[i];
      }
    });
  }
}

function getStockdata(market_type)
{
  var countNum = <?php echo $i;?>;
  var stockArr = <?php echo json_encode($stockSym)?>;
  var lastArr = <?php echo json_encode($lastclose)?>;
  var marketType = market_type;
  for (var i = 0; i < countNum; i++) {
    var stockSym = stockArr[i];
    var lastclose = lastArr[i];
    //var numI = i;
    /*$('#stockTable').load("getStockdata.php",{
      {countNum:numI,stockSym:stockSym}
    });*/
    $.ajax({
      url:"getStockdata.php",
      method:"POST",
      data:{stockSym:stockSym,marketType:marketType},
      dataType: "JSON",
      success:function(data){
        $('#'+i).children('td[data-target=data1]').val(data.stock_symbol);
        $('#'+i).children('td[data-target=data2]').val(data.bid_price);
        $('#'+i).children('td[data-target=data3]').val(data.bid_volume);
        $('#'+i).children('td[data-target=data4]').val(data.offer_price);
        $('#'+i).children('td[data-target=data5]').val(data.offer_volume);
        $('#'+i).children('td[data-target=data6]').val(data.last_price);
        $('#'+i).children('td[data-target=data7]').val(data.change_value);
        $('#'+i).children('td[data-target=data8]').val(data.percent_change);
        $('#'+i).children('td[data-target=data9]').val(data.lastest_close_price);
        $('#'+i).children('td[data-target=data10]').val(data.ceiling_price);
        $('#'+i).children('td[data-target=data11]').val(data.flooring_price);
        $('#'+i).children('td[data-target=data12]').val(data.high_price);
        $('#'+i).children('td[data-target=data13]').val(data.low_price);
        $('#'+i).children('td[data-target=data14]').val(data.total_volume);
        $('#'+i).children('td[data-target=data15]').val(data.total_value);
        //location.reload();
        /*$('#data1').val(data.stock_symbol);
        $('#data2').val(data.bid_price);
        $('#data3').val(data.bid_volume);
        $('#data4').val(data.offer_price);
        $('#data5').val(data.offer_volume);
        $('#data6').val(data.last_price);
        $('#data7').val(data.change_value);
        $('#data8').val(data.percent_change);
        $('#data9').val(data.lastest_close_price);
        $('#data10').val(data.ceiling_price);
        $('#data11').val(data.flooring_price);
        $('#data12').val(data.high_price);
        $('#data13').val(data.low_price);
        $('#data14').val(data.total_volume);
        $('#data15').val(data.total_value);*/
        //document.getElementById("test").innerHTML = stockArr[0];
        document.getElementById("test").innerHTML = data.stock_symbol;
        }
      });
  }
}
function showtext(){
  alert("hello ja");
}
</script>

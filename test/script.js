  function call() {
 
    var dataString = $('#register').serialize();
     
    $.ajax({
      type: "POST",
      url: "register.php",
      data: dataString,
      success: function (data) {
          $('#result').html(data);
        },
      error: function(xhr , str , data){
          console.log("Возникла ошибка : " + xhr.responceCode);
         $('#result').html(data);
      }  
    });
    // e.preventDefault();
  }
// });


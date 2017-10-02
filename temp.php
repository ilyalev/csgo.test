 $(".user-item").on('click', function() {
      $(this).fadeOut( "slow", function(){
       $(".deposit-inventory").append($(this));
        $(this).fadeIn( "slow");
      });
    });
    
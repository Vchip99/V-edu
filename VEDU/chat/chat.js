$(document).on('click', '.panel-heading span.icon_minim', 
    function (e) {
      var $this = $(this);
      if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
      } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
      }
    });

  $(document).ready(function () {
    $('.panel-heading span.icon_minim').click();
    $('.panel div.clickable').click();
  });
  $(function(){
    $(".addChat").click(function () {
      $('#qnimate').addClass('popup-box-on');
    });

    $("#removeClass").click(function () {
      $('#qnimate').removeClass('popup-box-on');
    });
  })
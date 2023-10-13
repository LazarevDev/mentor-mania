$(document).ready(function () {
    $(".profileApplications").hide();
         $(".btnProfile").addClass('active');
         
    $(".btnApplications").click(function () {
        $(".profileFormBlock").hide();
        $(".profileApplications").show();

        $('.btnProfile').removeClass('active');
        $(this).addClass('active');

    });
    
    $(".btnProfile").click(function () {
        $(".profileApplications").hide();
        $(".profileFormBlock").show()

        $('.btnApplications').removeClass('active');
        $(this).addClass('active');
     });
  });
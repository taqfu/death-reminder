$(document).ready(function () {

    $(document).on('click', '#welcome-title', function(event){

        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
            if ($("#welcome-about").hasClass("hidden")){
                $("#welcome-about").removeClass('hidden');

            } else {
                $("#welcome-about").addClass('hidden');

            }
        }
    });
});

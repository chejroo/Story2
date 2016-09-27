$('document').ready(function () {
        $('#submit').addClass('disabled');
        $('#submit').attr("disabled", true);
        $('.b1').addClass('disabled');
        $('.b1').attr("disabled", true);
        // id = 3;
        // $('.q5').load("showAuthors.php", {id_story : id });

    $('#word').keyup(function () {
        var value = $(this).val();
        if( value.length == 0 || value.length > 10 ){
            $('#submit').addClass('disabled');
            $('#submit').attr("disabled", true);
        }else{
            $('#submit').removeClass('disabled');
            $('#submit').attr("disabled", false);
        }
    })

    $('#authorName').keyup(function () {
        var value = $(this).val();
        if( value.length == 0 || value.length > 10 ){
            $('.b1').addClass('disabled');
            $('.b1').attr("disabled", true);
        }else{
            $('.b1').removeClass('disabled');
            $('.b1').attr("disabled", false);
        }
    })

    $('.w1').click(function () {
        $(this).fadeOut('slow',null,function () {
            $('.w2').fadeIn('slow');
        });
    })

    $('.sendBtn').click(function () {
        var url = window.location.href;
        var word = $('#word').val();
        $.post( "new.php", { word: word, url : url})
            .done(function( data ) {
                $('.q4').load("storyText.php",{ url: url });
            });
    })
})
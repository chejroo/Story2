/**
 * Created by Hubert on 2016-09-27.
 */
$(document).ready(function () {
        $('#q4').load("showAuthors.php li",{id_story : 1},function () {
            var li = $('#q4 li').length;
            if(li >= 4){
                $('.q4').load("storyText.php", { id : 1 });
            }else {
                $('#q35').load("loader.php",{count : li});
            }
        });
});

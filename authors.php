<input type="submit" id="start" value="Start">
<input type="submit" id="join" value="Join">

<script src="css/jquery-3.1.0.min.js"></script>

<div id="authors">

</div>

<script>
    $(document).ready(function () {
        id = 3;
        $('#start').click(function () {
            $('#authors').load("showAuthors.php", {id_story : id });
        })

        $('#join').click(function () {
            var name = "Johnn";
            var maxLi = $('li').length;
            if(maxLi < 4){
                $.post("newAuthor.php",{id_story: id , name: name}).done(function () {
                    $('#authors').load("showAuthors.php", {id_story : id });
                });
            }else{
                alert("Story is full of authors");
            }
        })
    })
</script>

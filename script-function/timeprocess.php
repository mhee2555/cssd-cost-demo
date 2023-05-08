<script>
    $(function() {

        $("#headType1").css("background", "");



    });


    function showMenu(text){

        if(text == 'A'){
            $("#rowDirty").show(300);
            $("#rowClean").show(300);
            $("#rowSterile").show(300);
        }
        if(text == 'D'){
            $("#rowDirty").show(300);
            $("#rowClean").hide(300);
            $("#rowSterile").hide(300);
        }
        if(text == 'C'){
            $("#rowDirty").hide(300);
            $("#rowClean").show(300);
            $("#rowSterile").hide(300);
        }
        if(text == 'S'){
            $("#rowDirty").hide(300);
            $("#rowClean").hide(300);
            $("#rowSterile").show(300);
        }

    }
</script>
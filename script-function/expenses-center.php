<script>
    $("#trDetail1").hide();
    $("#hidedetail1").hide(300);

    function showDetail(check){
        if(check == 1){
            $("#trDetail1").show(300);
            $("#hidedetail1").show();
            $("#showdetail1").hide();
        }else{
            $("#trDetail1").hide(300);
            $("#hidedetail1").hide();
            $("#showdetail1").show();
        }
    }
</script>

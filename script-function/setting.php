<script>
    $(function() {
      
        $(".tabhiden").hide();
        $("#headType").css("background", "");

        $("#clickhidden").click(function() {
            $(".tabhiden").show(1000);
        });

           
        getSizeAll();
        getAllProcessType();

        $("#bt_AddSize").click(function(){
            $("#txtNameTypeSize").val("");
            setTimeout(function() {
                document.getElementById("txtNameTypeSize").focus();
            }, 500);
           
        });
    
    });

    function getSizeAll(){
        
        var Url = '<?= $Url ?>';
        $.ajax({
            url: Url+"/size/getSizeAll",
            type: 'POST',
            // data: {
            // },
            success: function(result) {
                var StrTR = "" ;
                for(i=0;i<result.data.length;i++){

                var SizeName ='';
                var Size_S ='';
                var Size_M ='';
                var Size_L ='';
                var Size_XL ='';
                var Size_XXL ='';

                if(result.data[i].SizeS == 0 && result.data[i].SizeM == 0 && result.data[i].SizeL == 0 && result.data[i].SizeXL == 0 && result.data[i].SizeXXL == 0){
                    SizeName = 'ยังไม่ได้ผูก Size';
                }else{
                    if(result.data[i].SizeS == 1){
                        Size_S = 'checked';
                        SizeName = 'Level 1, ';
                    }
                    if(result.data[i].SizeM == 1){
                        Size_M = 'checked';
                        SizeName += 'Level 2, ';
                    }
                    if(result.data[i].SizeL == 1){
                        Size_L = 'checked';
                        SizeName += 'Level 3, ';
                    }
                    if(result.data[i].SizeXL == 1){
                        Size_XL = 'checked';
                        SizeName += 'Level 4, ';
                    }
                    if(result.data[i].SizeXXL == 1){
                        Size_XXL = 'checked';
                        SizeName += 'Level 5, ';
                    }

                    
                }
 
      
                    StrTR += "<tr>" +
                            "<td>" + (i+1) + "</td>" +
                            "<td>" + result.data[i].Name + "</td>" +
 
                            "<td> <li class='nav-item dropdown ' style='list-style-type: none;'>"+
                                "<a style='text-align: center;' class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
                                    "<span class=' mr-2 d-none d-lg-inline text-gray-600 ' style='color:black;'>"+SizeName+"</span>"+
                                "</a>"+
                                "<div class='dropdown-menu' aria-labelledby='userDropdown' style='margin-left: 105px;'>"+
                                    "<a class='dropdown-item' href='#' data-toggle='modal' data-target='#logoutModal'>"+
                                        "<i class='mr-2 text-gray-400'></i> เลือกไซส์"+
                                    "</a>"+
                                    "<div class='dropdown-divider'></div>";

                                        StrTR += "<a class='dropdown-item' href='#'>"+
                                        "<div class='form-check'>"+
                                        "<input class='form-check-input mr-2 ' type='checkbox' value='S' id='chk_size_S_" + result.data[i].ID + "' "+Size_S+" onchange='SaveSize(\"" + result.data[i].ID + "\",\"" + "chk_size_S_" + "\",\"" + "S" + "\",\"" + 1 + "\");'>"+
                                        "<label class='form-check-label mt-1' style='margin-bottom: 15px;' for='flexCheckDefault'>Level 1</label>"+
                                        "</div>"+
                                        "</a>"+

                                        "<a class='dropdown-item' href='#'>"+
                                        "<div class='form-check'>"+
                                        "<input class='form-check-input mr-2' type='checkbox' value='M' id='chk_size_M_" + result.data[i].ID + "' "+Size_M+" onchange='SaveSize(\"" + result.data[i].ID + "\",\"" + "chk_size_M_" + "\",\"" + "M" + "\",\"" + 2 + "\");'>"+
                                        "<label class='form-check-label mt-1' style='margin-bottom: 15px;' for='flexCheckDefault'>Level 2</label>"+
                                        "</div>"+
                                        "</a>"+

                                        "<a class='dropdown-item' href='#'>"+
                                        "<div class='form-check'>"+
                                        "<input class='form-check-input mr-2' type='checkbox' value='L' id='chk_size_L_" + result.data[i].ID + "' "+Size_L+" onchange='SaveSize(\"" + result.data[i].ID + "\",\"" + "chk_size_L_" + "\",\"" + "L" + "\",\"" + 3 + "\");'>"+
                                        "<label class='form-check-label mt-1' style='margin-bottom: 15px;' for='flexCheckDefault'>Level 3</label>"+
                                        "</div>"+
                                        "</a>"+

                                        "<a class='dropdown-item' href='#'>"+
                                        "<div class='form-check'>"+
                                        "<input class='form-check-input mr-2' type='checkbox' value='XL' id='chk_size_XL_" + result.data[i].ID + "' "+Size_XL+" onchange='SaveSize(\"" + result.data[i].ID + "\",\"" + "chk_size_XL_" + "\",\"" + "XL" + "\",\"" + 4 + "\");'>"+
                                        "<label class='form-check-label mt-1' style='margin-bottom: 15px;' for='flexCheckDefault'>Level 4</label>"+
                                        "</div>"+
                                        "</a>"+

                                        "<a class='dropdown-item' href='#'>"+
                                        "<div class='form-check'>"+
                                        "<input class='form-check-input mr-2' type='checkbox' value='XXL' id='chk_size_XXL_" + result.data[i].ID + "' "+Size_XXL+" onchange='SaveSize(\"" + result.data[i].ID + "\",\"" + "chk_size_XXL_" + "\",\"" + "XXL" + "\",\"" + 5 + "\");'>"+
                                        "<label class='form-check-label mt-1' style='margin-bottom: 15px;' for='flexCheckDefault'>Level 5</label>"+
                                        "</div>"+
                                        "</a>";
                                  
                                   
                                    StrTR +=  "<div class='dropdown-divider'></div>"+
                                                "<a class='ml-2' href='javascript:void(0)'>"+
                                                    "<button class='btn btn-primary'  onclick='getSizeAll();' style='width: 90%;'>ตกลง</button>"+
                                                "</a>"+
                                "</div>"+
                            "</li></td>"+
                            
                           "</tr>";
                    console.log(result.data[i]);  
                }
                $('#table_sizeControl tbody').html(StrTR);
            }
        });
    }

    function getAllProcessType(){
        var Url = '<?= $Url ?>';
        $.ajax({
            url: Url+"/ProcessType/getAllProcessType",
            type: 'POST',
            // data: {
            // },
            success: function(result) {
                var StrTR = "" ;
                for(i=0;i<result.data.length;i++){
                    
                    if(result.data[i].IsStatus=='1'){
                        var styleStatus = "style='color: green;'" ;
                        var checked ='checked';
                        var label ='เปิดใช้งาน';
                    }else{
                        var styleStatus = "style='color: red;'" ;
                        var checked ='';
                        var label ='ปิดใช้งาน';
                    }

                    var onchangeSaveStatus = "onchange='SaveStatus(\"" + result.data[i].RowID + "\");'";
      
                    StrTR += "<tr>" +
                            "<td>" + (i+1) + "</td>" +
                            "<td>" + result.data[i].NameProcessType + "</td>" +
 
                            "<td>" +               
                                "<div class='custom-control custom-switch'>" +  
                                    "<input type='checkbox' class='custom-control-input' id='switchOpenProcess"+result.data[i].RowID+"' "+checked+" "+onchangeSaveStatus+">" +  
                                    "<label class='custom-control-label' for='switchOpenProcess"+result.data[i].RowID+"' "+styleStatus+" id='labelSwitchProcess"+result.data[i].RowID+"'>"+label+"</label>" +  
                                " </div>" +            
                            "</td>"+
                            "<td>" +               
                                "<select name='' id='selectShowProcess"+result.data[i].RowID+"' class='form-control'>" +  
                                    "<option value='1'>1</option>" +  
                                    "</select>" +           
                            "</td>";     
                           "</tr>";
                    // console.log(result.data[i]);  
                }
                $('#table_ProcessType tbody').html(StrTR);
            }
        });
    }

    function CreateSizeControl(){
        var Url = '<?= $Url ?>';
        var txtNameTypeSize =  $("#txtNameTypeSize").val();
        if(txtNameTypeSize == ""){
            swal({
                title: "กรุณาเลือกกรอกชื่อประเภท",
                text: "",
                type: "info",
                showConfirmButton: false,
                timer: 2000,
              });
            return;
        }
        $.ajax({
            url: Url+"/size/CreateSizeControl",
            type: 'POST',
            data: {
                'Name': txtNameTypeSize
            },
            success: function(result) {

                $('#ModalSizeControl').modal('toggle');

                swal({
                      title:'Success',
                      text: 'บันทึกข้อมูล เรียบร้อยแล้ว',
                      type: 'success',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      timer: 1500,
                      confirmButtonText: 'Ok',
                      showConfirmButton: false
                  });   

                  getSizeAll();

            }
        });
    }

    function CreateProcessType(){
        var Url = '<?= $Url ?>';
        var txtNameProcessType =  $("#NameProcessType").val();
        if(txtNameProcessType == ""){
            swal({
                title: "กรุณาเลือกกรอกชื่อประเภท",
                text: "",
                type: "info",
                showConfirmButton: false,
                timer: 2000,
              });
            return;
        }
        $.ajax({
            url: Url+"/ProcessType/CreateProcessType",
            type: 'POST',
            data: {
                'NameProcessType': txtNameProcessType,
                'IDProcessTypeCssd': ''
            },
            success: function(result) {

                $('#ModalProcessType').modal('toggle');

                swal({
                      title:'Success',
                      text: 'บันทึกข้อมูล เรียบร้อยแล้ว',
                      type: 'success',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      timer: 1500,
                      confirmButtonText: 'Ok',
                      showConfirmButton: false
                  });   

                  getAllProcessType();

            }
        });
    }

    function SaveStatus(RowID){
        var Url = '<?= $Url ?>';
        var chk_Status =  $("#switchOpenProcess"+RowID+":checked").val();

        if(chk_Status == undefined){
            var Status = 0;
        }else{
            var Status = 1;
        }

        // alert(Status);
        $.ajax({
            url: Url+"/ProcessType/SaveStatus",
            type: 'POST',
            data: {
                'Status': Status,
                'RowID': RowID
            },
            success: function(result) {

                getAllProcessType();

            }
        });
    }

    

    function SaveSize(ID,ID_ChkBox,Size,Rownumber){
        var Url = '<?= $Url ?>';
        var chk_size =  $("#"+ID_ChkBox+ID+":checked").val();

        // alert(ID+"|"+chk_size);
        if(chk_size == undefined){
            $.ajax({
                url: Url+"/size/DeleteSize",
                type: 'POST',
                data: {
                    'SizeControlid': ID,
                    'NameSize': Size
                },
                success: function(result) {
                }
            });
        }else{
            $.ajax({
                url: Url+"/size/CreateSize",
                type: 'POST',
                data: {
                    'SizeControlid': ID,
                    'NameSize': chk_size
                },
                success: function(result) {
                }
            });
        }

       
    }

</script>
<script>
    var DefaultTable = {
        language: {
            emptyTable: "Data not found"
        },
        info: false,
        scrollX: false,
        scrollCollapse: true,
        visible: false,
        searching: false,
        lengthChange: false,
        fixedHeader: true,
        "order": [
            [0, "desc"]
        ]
    };



    const ctx = document.getElementById('myChart');


    // new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['1-25', '26-50', '51-75', '76-100', '101-125', '126-150', '151-175', '176-200', '201-225', '226-250', '251-275', '276-300', '301-325', '326-350'],
    //         datasets: [{
    //             label: '# of Votes',
    //             data: [3778, 10, 75, 20, 5, 50, 36, 24, 20, 1, 0, 0, 0, 0],
    //             borderWidth: 1,
    //             backgroundColor: "#FF0000",
    //             borderColor: "#FF0000",
    //             pointStyle: 'circle',
    //             pointRadius: 3,
    //             pointHoverRadius: 5
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         },
    //         responsive: true,
    //         plugins: {
    //             title: {
    //                 display: true
    //             }
    //         },


    //     }
    // });

    $(function() {

        $('.numonly').on('input', function() {
            this.value = this.value.replace(/[^0-9.]/g, ''); //<-- replace all other than given set of values
        });

        table_itemSize = $('#table_itemSize').DataTable(DefaultTable);

        $("#selectSizeS_end").keyup(function() {
            $("#selectSizeM_start").val(parseInt($("#selectSizeS_end").val()) + 1);
        });

        $("#selectSizeM_end").keyup(function() {
            var IDSizeControl = $("#selectSizeControl").val();

            $("#selectSizeL_start").val(parseInt($("#selectSizeM_end").val()) + 1);
            if (IDSizeControl == "1") {
                $("#selectSizeL_end").val("เป็นต้นไป");
                $('#selectSizeL_end').prop('disabled', true);
            }
        });

        $("#selectSizeL_end").keyup(function() {
            var IDSizeControl = $("#selectSizeControl").val();
            $("#selectSizeXL_start").val(parseInt($("#selectSizeL_end").val()) + 1);

            if (IDSizeControl == "2") {
                $("#selectSizeXL_end").val("เป็นต้นไป");
                $('#selectSizeXL_end').prop('disabled', true);
            }
        });

        $("#selectSizeXL_end").keyup(function() {
            var IDSizeControl = $("#selectSizeControl").val();
            $("#selectSizeXXL_start").val(parseInt($("#selectSizeL_end").val()) + 1);

            if (IDSizeControl == "3") {
                $("#selectSizeXXL_end").val("เป็นต้นไป");
                $('#selectSizeXXL_end').prop('disabled', true);
            }
        });

        $("#selectSizeXL_end").keyup(function() {
            $("#selectSizeXXL_start").val(parseInt($("#selectSizeXL_end").val()) + 1);
        });

        $("#text_SetOrSingle").val('set');
        $('#checkRadioSet_Graph').val(1);

        getSizeControl();

        setTimeout(function() {
            getSelectSize();
            getGraphCountItem();
        }, 500);

        // setTimeout(function() {
        //     getItemSizeAll('-');
        // }, 200);


        $("#text_Size").val("-");


        $("#rowSingle").hide();


        $("#myChart").css('display', 'none');

        setTimeout(() => {
            $("#bodyChart").hide();
            $("#divSizeSearch").hide();

        }, 100);




    });



    var langQty = [];

    function getGraphCountItem() {
        var Url = '<?= $Url ?>';
        var IsChkGraphSet = $('#checkRadioSet_Graph').val();
        // alert("sd");
        $.ajax({
            url: Url + "/itemSize/getGraphCountItem",
            type: 'POST',
            data: {
                'IsChkGraphSet': IsChkGraphSet
            },
            success: function(result) {
                var Qtyitem = [];
                $('#chart_1').empty();

                $('#chart_1').append('<canvas id="myChart" width="500" height="520"></canvas>');
                const ctx = document.getElementById('myChart');

                Qtyitem.push(result.Qty1_25,
                    result.Qty26_50,
                    result.Qty51_75,
                    result.Qty76_100,
                    result.Qty101_125,
                    result.Qty126_150,
                    result.Qty151_175,
                    result.Qty176_200,
                    result.Qty201_225,
                    result.Qty226_250,
                    result.Qty251_275,
                    result.Qty276_300,
                    result.Qty301_325,
                    result.Qty326_350
                );

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['1-25', '26-50', '51-75', '76-100', '101-125', '126-150', '151-175', '176-200', '201-225', '226-250', '251-275', '276-300', '301-325', '326-350'],
                        datasets: [{
                            label: '# of Votes',
                            data: Qtyitem,
                            borderWidth: 1,
                            backgroundColor: "#1CC88A",
                            borderColor: "#1CC88A",
                            pointStyle: 'circle',
                            pointBackgroundColor: "#F0443b"
,
                            pointRadius: 5,
                            pointHoverRadius: 7
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        responsive: true,
                        plugins: {
                            title: {
                                display: false
                            },
                            legend: {
                                display: false
                            }
                        },
                        animation: {
                            duration: 0
                        }
                    }
                });

                //------------------------------------------------------------------------------------------------------------  

                //------------------------------------------------------------------------------------------------------------  

                $('#QtyitemAll').text(commaSeparateNumber(result.QtyAll));
                var CountQtyAll = result.QtyAll;
                var SumAge = 0;


                // case '1-25':
                SumAge = (result.Qty1_25 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge1_25').css("width", SumAge + "%");

                $('#Qty1_25').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty1_25) + ' รายการ');


                // case '26-50':
                SumAge = (result.Qty26_50 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge26_50').css("width", SumAge + "%");

                $('#Qty26_50').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty26_50) + ' รายการ');

                // case '51-75':
                SumAge = (result.Qty51_75 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge51_75').css("width", SumAge + "%");

                $('#Qty51_75').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty51_75) + ' รายการ');

                // case '76-100':
                SumAge = (result.Qty76_100 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge76_100').css("width", SumAge + "%");

                $('#Qty76_100').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty76_100) + ' รายการ');

                // case '101-125':
                SumAge = (result.Qty101_125 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge101_125').css("width", SumAge + "%");

                $('#Qty101_125').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty101_125) + ' รายการ');

                // case '126-150':
                SumAge = (result.Qty126_150 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge126_150').css("width", SumAge + "%");

                $('#Qty126_150').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty126_150) + ' รายการ');

                // case '151-175':
                SumAge = (result.Qty151_175 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge151_175').css("width", SumAge + "%");

                $('#Qty151_175').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty151_175) + ' รายการ');

                // case '176-200':
                SumAge = (result.Qty176_200 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge176_200').css("width", SumAge + "%");

                $('#Qty176_200').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty176_200) + ' รายการ');

                // case '201-225':
                SumAge = (result.Qty201_225 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge201_225').css("width", SumAge + "%");

                $('#Qty201_225').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty201_225) + ' รายการ');

                // case '226-250':
                SumAge = (result.Qty226_250 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge226_250').css("width", SumAge + "%");

                $('#Qty226_250').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty226_250) + ' รายการ');

                // case '251-275':
                SumAge = (result.Qty251_275 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge251_275').css("width", SumAge + "%");

                $('#Qty251_275').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty251_275) + ' รายการ');

                // case '276-300':
                SumAge = (result.Qty276_300 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge276_300').css("width", SumAge + "%");

                $('#Qty276_300').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty276_300) + ' รายการ');

                // case '301-325':
                SumAge = (result.Qty301_325 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge301_325').css("width", SumAge + "%");

                $('#Qty301_325').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty301_325) + ' รายการ');

                // case '326-350':
                SumAge = (result.Qty326_350 / CountQtyAll) * 100;
                SumAge = SumAge.toFixed(2);
                $('#SumAge326_350').css("width", SumAge + "%");

                $('#Qty326_350').text('จำนวนทั้งหมด ' + commaSeparateNumber(result.Qty326_350) + ' รายการ');


            }
        });
    }

    function commaSeparateNumber(val) {
        while (/(\d+)(\d{3})/.test(val.toString())) {
            val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
        }
        return val;
    }

    function hideShowMenuChart(numCheck) {
        if (numCheck == 1) {
            $("#bodyChart").hide(500);
            $("#showtabchart").attr('hidden', false);
            $("#hidetabchart").attr('hidden', true);

            setTimeout(() => {
                $("#myChart").css('display', 'none');
            }, 800);


        } else {
            $("#bodyChart").show(500);
            $("#showtabchart").attr('hidden', true);
            $("#hidetabchart").attr('hidden', false);

            setTimeout(() => {
                $("#myChart").css('display', '');
            }, 800);


        }
    }

    function checkRadioSetGraph(num) {

        $('#checkRadioSet_Graph').val(num);

        if (num == 1) {
            $("#radio_check1").css("background-color", "#1d90f4");
            $("#radio_check2").css("background-color", "#CCCCCC");

        } else {
            $("#radio_check1").css("background-color", "#CCCCCC");
            $("#radio_check2").css("background-color", "#1d90f4");

        }
        // alert("sdf");
        getGraphCountItem();
    }


    function hideShowMenu(numCheck) {
        if (numCheck == 1) {
            $("#divSizeSearch").hide(300);
            $("#showtab").attr('hidden', false);
            $("#hidetab").attr('hidden', true);

        } else {
            $("#divSizeSearch").show(300);
            $("#showtab").attr('hidden', true);
            $("#hidetab").attr('hidden', false);
        }
    }

    function checkSetOrSingle(check) {
        // var cbAns = ($("#checkboxSetOrSingle").is(':checked')) ? 1 : 0;
        var cbAns = $("#selectItem").val();





        if (cbAns == 1) {
            $("#rowSet1").hide();
            $("#rowSet2").hide();
            $("#rowSingle").show();
            $("#text_SetOrSingle").val('single');

            getItemSizeAll('0');


            $("#btnChangeSingle").css("background-color", "#93c8f1");
            $("#btnChangeSingle").removeClass('btn-secondary');
            $("#btnChangeSingle").addClass('btn-light');



            // background-color: #93c8f1;
            $("#btnChangeSet").css("background-color", "");

            $("#btnChangeSet").removeClass('btn-light');

            $("#btnChangeSet").removeClass('btn-light');
            $("#btnChangeSet").addClass('btn-secondary');



        } else {
            $("#rowSet1").show();
            $("#rowSet2").show();
            $("#rowSingle").hide();
            $("#text_SetOrSingle").val('set');

            getItemSizeAll('0');


            $("#btnChangeSingle").css("background-color", "");
            $("#btnChangeSingle").removeClass('btn-light');
            $("#btnChangeSingle").addClass('btn-secondary');



            $("#btnChangeSet").removeClass('btn-secondary');
            $("#btnChangeSet").addClass('btn-light');
            $("#btnChangeSet").css("background-color", "#93c8f1");


        }



    }

    function getSizeControl() {
        var Url = '<?= $Url ?>';
        $.ajax({
            url: Url + "/size/getSizeAll",
            type: 'POST',
            // data: {
            // },
            success: function(result) {
                var StrTR = "";
                for (i = 0; i < result.data.length; i++) {
                    StrTR += "<option value=" + result.data[i].ID + " >" + result.data[i].Name + "</option>";
                }
                $("#selectSizeControl").append(StrTR);
            }
        });
    }

    function getSelectSize() {

        var IDSizeControl = $("#selectSizeControl").val();
        if (IDSizeControl == "1") {
            $("#div_selectSizeS").show();
            $("#div_selectSizeM").show();
            $("#div_selectSizeL").show();
            $("#div_selectSizeXL").hide();
            $("#div_selectSizeXXL").hide();
            $("#selectSizeXL_start").val("");
            //--------------nav-tab-----------------------------
            $("#nav-nosize-tab").show();
            $("#nav-S-tab").show();
            $("#nav-M-tab").show();
            $("#nav-L-tab").show();
            $("#nav-XL-tab").hide();
            $("#nav-XXL-tab").hide();

            //--------------div_radio-----------------------------

            $("#div_radioSizeSingle_S").show();
            $("#div_radioSizeSingle_M").show();
            $("#div_radioSizeSingle_L").show();
            $("#div_radioSizeSingle_XL").hide();
            $("#div_radioSizeSingle_XXL").hide();
            //--------------selectSizeS_start-----------------------------

            //  $("#selectSizeS_start").val("");
            $("#selectSizeS_end").val("");
            $("#selectSizeM_start").val("");
            $("#selectSizeM_end").val("");
            $("#selectSizeL_start").val("");
            $("#selectSizeL_end").val("");
            $("#selectSizeXL_start").val("");
            $("#selectSizeXL_end").val("");
            $("#selectSizeXXL_start").val("");
            $("#selectSizeXXL_end").val("");

        } else if (IDSizeControl == "2") {
            $("#div_selectSizeS").show();
            $("#div_selectSizeM").show();
            $("#div_selectSizeL").show();
            $("#div_selectSizeXL").show();
            $("#div_selectSizeXXL").hide();
            $("#selectSizeXL_start").val("");

            //----------------nav-tab---------------------------
            $("#nav-nosize-tab").show();
            $("#nav-S-tab").show();
            $("#nav-M-tab").show();
            $("#nav-L-tab").show();
            $("#nav-XL-tab").show();
            $("#nav-XXL-tab").hide();
            //--------------div_radio-----------------------------

            $("#div_radioSizeSingle_S").show();
            $("#div_radioSizeSingle_M").show();
            $("#div_radioSizeSingle_L").show();
            $("#div_radioSizeSingle_XL").show();
            $("#div_radioSizeSingle_XXL").hide();
            //----------------selectSize---------------------------
            $("#selectSizeL_end").val("");
            $('#selectSizeL_end').prop('disabled', false);

            //--------------selectSizeS_start-----------------------------

            //  $("#selectSizeS_start").val("");
            $("#selectSizeS_end").val("");
            $("#selectSizeM_start").val("");
            $("#selectSizeM_end").val("");
            $("#selectSizeL_start").val("");
            $("#selectSizeL_end").val("");
            $("#selectSizeXL_start").val("");
            $("#selectSizeXL_end").val("");
            $("#selectSizeXXL_start").val("");
            $("#selectSizeXXL_end").val("");

        } else if (IDSizeControl == "3") {
            $("#div_selectSizeS").show();
            $("#div_selectSizeM").show();
            $("#div_selectSizeL").show();
            $("#div_selectSizeXL").show();
            $("#div_selectSizeXXL").show();
            $("#selectSizeXL_start").val("");
            //---------------nav-tab----------------------------
            $("#nav-nosize-tab").show();
            $("#nav-S-tab").show();
            $("#nav-M-tab").show();
            $("#nav-L-tab").show();
            $("#nav-XL-tab").show();
            $("#nav-XXL-tab").show();
            //--------------div_radio-----------------------------

            $("#div_radioSizeSingle_S").show();
            $("#div_radioSizeSingle_M").show();
            $("#div_radioSizeSingle_L").show();
            $("#div_radioSizeSingle_XL").show();
            $("#div_radioSizeSingle_XXL").show();

            //----------------selectSize---------------------------
            $("#selectSizeXL_end").val("");
            $('#selectSizeXL_end').prop('disabled', false);
            $("#selectSizeL_end").val("");
            $('#selectSizeL_end').prop('disabled', false);

            //--------------selectSizeS_start-----------------------------

            //  $("#selectSizeS_start").val("");
            $("#selectSizeS_end").val("");
            $("#selectSizeM_start").val("");
            $("#selectSizeM_end").val("");
            $("#selectSizeL_start").val("");
            $("#selectSizeL_end").val("");
            $("#selectSizeXL_start").val("");
            $("#selectSizeXL_end").val("");
            $("#selectSizeXXL_start").val("");
            $("#selectSizeXXL_end").val("");
        } else {
            $("#div_selectSizeS").hide();
            $("#div_selectSizeM").hide();
            $("#div_selectSizeL").hide();
            $("#div_selectSizeXL").hide();
            $("#div_selectSizeXXL").hide();
            $("#selectSizeXL_start").val("");
            //--------------nav-tab-----------------------------
            $("#nav-nosize-tab").show();
            $("#nav-S-tab").hide();
            $("#nav-M-tab").hide();
            $("#nav-L-tab").hide();
            $("#nav-XL-tab").hide();
            $("#nav-XXL-tab").hide();
            //--------------div_radio-----------------------------

            $("#div_radioSizeSingle_S").hide();
            $("#div_radioSizeSingle_M").hide();
            $("#div_radioSizeSingle_L").hide();
            $("#div_radioSizeSingle_XL").hide();
            $("#div_radioSizeSingle_XXL").hide();

            //--------------selectSizeS_start-----------------------------

            //  $("#selectSizeS_start").val("");
            $("#selectSizeS_end").val("");
            $("#selectSizeM_start").val("");
            $("#selectSizeM_end").val("");
            $("#selectSizeL_start").val("");
            $("#selectSizeL_end").val("");
            $("#selectSizeXL_start").val("");
            $("#selectSizeXL_end").val("");
            $("#selectSizeXXL_start").val("");
            $("#selectSizeXXL_end").val("");
        }

        $("#nav-nosize-tab").removeClass("active");
        $("#nav-S-tab").removeClass("active");
        $("#nav-M-tab").removeClass("active");
        $("#nav-L-tab").removeClass("active");
        $("#nav-XL-tab").removeClass("active");
        $("#nav-XXL-tab").removeClass("active");

        $("#nav-nosize-tab").addClass("active");
        // getItemSizeAll(Size);
        // alert(IDSizeControl);
        // $("#divSizeSearch").load(" #divSizeSearch > *");
        getItemSizeAll('-');
    }

    function getItemSizeAll(Size) {

        var Url = '<?= $Url ?>';
        var IDSizeControl = $("#selectSizeControl").val();
        var inputSearch = $("#inputSearch").val();
        var text_SetOrSingle = $("#text_SetOrSingle").val();
        var selectGroupItem = $("#selectGroupItem").val();

        if (selectGroupItem == 'common_items') {
            var UrlS = Url + "/itemSize/getItemSizeQuery";
            var IsHn = 0;
        } else {
            var UrlS = Url + "/itemSize/getItemSizeQuery_HN";
            var IsHn = 1;
        }


        if (text_SetOrSingle == 'set') {
            var cbAns = 1;
        } else {
            var cbAns = 0;
        }


        if (Size == '0') {
            Size = $("#text_Size").val();
        }
        Hidden_radioS = '';
        Hidden_radioM = '';
        Hidden_radioL = '';
        Hidden_radioXL = '';
        Hidden_radioXXL = '';

        if (IDSizeControl == "1") {
            Hidden_radioS = '';
            Hidden_radioM = '';
            Hidden_radioL = '';
            Hidden_radioXL = 'hidden';
            Hidden_radioXXL = 'hidden';

        }

        if (IDSizeControl == "2") {
            Hidden_radioS = '';
            Hidden_radioM = '';
            Hidden_radioL = '';
            Hidden_radioXL = '';
            Hidden_radioXXL = 'hidden';
        }

        if (IDSizeControl == "3") {
            Hidden_radioS = '';
            Hidden_radioM = '';
            Hidden_radioL = '';
            Hidden_radioXL = '';
            Hidden_radioXXL = '';
        }

        swal({
            title: 'กรุณารอสักครู่',
            text: 'ระบบกำลังประมวลผล',
            allowOutsideClick: false
        });
        swal.showLoading();

        $("#inputSearch").val("");
        
        $.ajax({
            url: UrlS,
            type: 'POST',
            data: {
                'IsMatchSize': Size,
                'SearchText': inputSearch,
                'text_SetOrSingle': text_SetOrSingle,
                'IsSet': cbAns,
                'IsHn': IsHn
            },
            success: function(result) {
                if (result.message == "successful") {
                    var StrTR = "";

                    table_itemSize.destroy();

                    table_itemSize = $('#table_itemSize').DataTable({
                        language: {
                            emptyTable: "Data not found"
                        },
                        data: result.data,
                        columns: [{
                                "data": "row",
                                render: function(data, type, row, meta) {
                                    return '<label>' + (meta.row + 1) + '</label>';
                                },
                                className: 'text-center',
                            },
                            {
                                data: "itemname",
                                className: 'text-left',
                                render: function(data, type, row, meta) {
                                    return '<label> ' + row.itemname + '</label>';
                                }
                            },
                            {
                                data: 'qty',
                                className: 'text-center',
                                render: function(data, type, row, meta) {
                                    // if (Size == '-') {
                                    var qty_set = row.Qty_set;
                                    // } else {
                                    //     var qty = row.items_size.length;
                                    // }
                                    // debugger
                                    return '<label> ' + qty_set + '</label>';
                                }
                            },
                            {
                                data: 'qty',
                                className: 'text-center',
                                render: function(data, type, row, meta) {
                                    // if (Size == '-') {
                                    var qty = row.is_Qty;
                                    // } else {
                                    //     var qty = row.items_size.length;
                                    // }
                                    // debugger
                                    return '<label> ' + qty + '</label>';
                                }
                            },
                            {
                                data: 'size',
                                className: 'text-center',
                                render: function(data, type, row, meta) {
                                    if (Size == '-') {
                                        var itemcode = row.itemcode;
                                        var RowIDItemSize = '-';
                                        var qty = row.is_Qty;
                                        var qty_set = row.Qty_set;
                                        var text_stu = '';
                                        var IDhn_person = row.IDhn_person;
                                    } else {
                                        var itemcode = row.itemcode;
                                        var RowIDItemSize = row.RowID;
                                        var qty = row.is_Qty;
                                        var qty_set = row.Qty_set;
                                        var UserEdit = row.UserEdit;
                                        var IDhn_person = row.IDhn_person;


                                        if (UserEdit == '1') {
                                            var text_stu = '<div class="form-check form-check-inline" >' +
                                                '<i  title="ผูกโดยผู้ใช้" class="fa-solid fa-user" style="font-size: 30px;color: #FFCC00;"></i>' +
                                                // '<label class="form-check-label" for="inlineRadio1">ผูกโดยผู้ใช้</label>' +
                                                '</div>';
                                        } else {
                                            var text_stu = '';
                                        }

                                        if (row.Size_Id == "S") {
                                            var checkedS = "checked";
                                            var checkedM = "";
                                            var checkedL = "";
                                            var checkedXL = "";
                                            var checkedXXL = "";
                                        }

                                        if (row.Size_Id == "M") {
                                            var checkedS = "";
                                            var checkedM = "checked";
                                            var checkedL = "";
                                            var checkedXL = "";
                                            var checkedXXL = "";
                                        }

                                        if (row.Size_Id == "L") {
                                            var checkedS = "";
                                            var checkedM = "";
                                            var checkedL = "checked";
                                            var checkedXL = "";
                                            var checkedXXL = "";
                                        }

                                        if (row.Size_Id == "XL") {
                                            var checkedS = "";
                                            var checkedM = "";
                                            var checkedL = "";
                                            var checkedXL = "checked";
                                            var checkedXXL = "";
                                        }

                                        if (row.Size_Id == "XXL") {
                                            var checkedS = "";
                                            var checkedM = "";
                                            var checkedL = "";
                                            var checkedXL = "";
                                            var checkedXXL = "checked";
                                        }
                                    }
                                    // debugger
                                    return '<div class="form-check form-check-inline"  ' + Hidden_radioS + ' >' +
                                        '<input class="form-check-input" type="radio" name=RadioNameSize_' + itemcode + '  id=RadioSize_S' + itemcode + ' value="S"  onclick="ConfirmSaveUserEdit(\'' + itemcode + '\' ,\'' + Size + '\',\'' + RowIDItemSize + '\',\'' + qty + '\',\'' + qty_set + '\',\'' + IDhn_person + '\')"    ' + checkedS + '   >' +
                                        '<label class="form-check-label" for="inlineRadio1">Level 1</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline"  ' + Hidden_radioM + ' >' +
                                        '<input class="form-check-input" type="radio" name=RadioNameSize_' + itemcode + '  id=RadioSize_M' + itemcode + ' value="M"  onclick="ConfirmSaveUserEdit(\'' + itemcode + '\' ,\'' + Size + '\',\'' + RowIDItemSize + '\',\'' + qty + '\',\'' + qty_set + '\',\'' + IDhn_person + '\')"    ' + checkedM + '   >' +
                                        '<label class="form-check-label" for="inlineRadio1">Level 2</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline"  ' + Hidden_radioL + ' >' +
                                        '<input class="form-check-input" type="radio" name=RadioNameSize_' + itemcode + '  id=RadioSize_L' + itemcode + ' value="L"  onclick="ConfirmSaveUserEdit(\'' + itemcode + '\' ,\'' + Size + '\',\'' + RowIDItemSize + '\',\'' + qty + '\',\'' + qty_set + '\',\'' + IDhn_person + '\')"    ' + checkedL + '   >' +
                                        '<label class="form-check-label" for="inlineRadio1">Level 3</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline"  ' + Hidden_radioXL + ' >' +
                                        '<input class="form-check-input" type="radio" name=RadioNameSize_' + itemcode + '  id=RadioSize_XL' + itemcode + ' value="XL"  onclick="ConfirmSaveUserEdit(\'' + itemcode + '\' ,\'' + Size + '\',\'' + RowIDItemSize + '\',\'' + qty + '\',\'' + qty_set + '\',\'' + IDhn_person + '\')"    ' + checkedXL + '   >' +
                                        '<label class="form-check-label" for="inlineRadio1">Level 4</label>' +
                                        '</div>' +
                                        '<div class="form-check form-check-inline"  ' + Hidden_radioXXL + ' >' +
                                        '<input class="form-check-input" type="radio" name=RadioNameSize_' + itemcode + '  id=RadioSize_XXL' + itemcode + ' value="XXL"  onclick="ConfirmSaveUserEdit(\'' + itemcode + '\' ,\'' + Size + '\',\'' + RowIDItemSize + '\',\'' + qty + '\',\'' + qty_set + '\',\'' + IDhn_person + '\')"    ' + checkedXXL + '   >' +
                                        '<label class="form-check-label" for="inlineRadio1">Level 5</label>' +
                                        '</div>' +
                                        text_stu;
                                }
                            }
                        ],
                        info: false,
                        scrollX: false,
                        lengthChange: false,
                        searching: false,
                        scrollCollapse: false,
                        fixedHeader: true,
                        autoWidth: true,
                        columnDefs: [{
                            orderable: false,
                            targets: 0,
                            className: "text-center",
                        }, ],
                        "order": [
                            [0, "asc"]
                        ]
                    });
                } else {
                    // alert(1);
                    // table_itemSize.destroy();
                    // table_itemSize = $('#table_itemSize').DataTable(DefaultTable);

                    // $('#table_itemSize').DataTable(DefaultTable);
                    // var StrTR = "<tr >" +
                    //     "<td colspan='4' style='text-align: center;'>   ไม่พบรายการ </td>" +
                    //     "</tr>";
                    // console.log(result.message);

                    // $('#table_itemSize tbody').html(StrTR);

                    table_itemSize.clear().draw();

                    // table_itemSize.destroy();

                }


                CountItemSize(result.count);
                swal.close();
            }
        });
    }

    function SaveItemSize(ItemCode, Size, RowIDItemSize, qty, qty_set, IDhn_person) {

        var Url = '<?= $Url ?>';
        var radioSize = $('input[name="RadioNameSize_' + ItemCode + '"]:checked').val();
        var IDSizeControl = $("#selectSizeControl").val();

        var SetOrSingle = $("#text_SetOrSingle").val();
        if (SetOrSingle == 'set') {
            var cbAns = 1;
        } else {
            var cbAns = 0;
        }

        var selectGroupItem = $("#selectGroupItem").val();

        if (selectGroupItem == 'common_items') {
            var IsHn = 0;
        } else {
            var IsHn = 1;
        }



        if (qty_set == '-') {
            qty_set = 0;
        }
        // alert(qty_set+"|"+ItemCode);
        // alert(IDhn_person);
        $.ajax({
            url: Url + "/itemSize/AddItemSize",
            type: 'POST',
            data: {
                'ItemCode': ItemCode,
                'NameSize': radioSize,
                'UserEdit': 1,
                'IsMatchSize': Size,
                'IDSizeControl': IDSizeControl,
                'RowIDItemSize': RowIDItemSize,
                'Qty': qty,
                'Qty_set': qty_set,
                'IsSet': cbAns,
                'IDhn_person': IDhn_person,
                'IsHn': IsHn
            },
            success: function(result) {

                swal({
                    title: 'Success',
                    text: 'ผูก Size รายการเรียบร้อยแล้ว',
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    timer: 1000,
                    confirmButtonText: 'Ok',
                    showConfirmButton: false
                });

                setTimeout(function() {
                    getItemSizeAll(Size);
                }, 1000);

            }
        });



    }


    function ConfirmSave(type) {
        var countItem = $('#countItem').val();
        swal({
            title: "ยืนยันการผูกรายการ",
            text: "ท่านต้องการผูกรายการ จำนวน " + countItem + " รายการ ใช่หรือไม่ ?",
            // type: "info",
            imageUrl: 'assets/icon/Static Icon.png',
            imageWidth: 100,
            imageHeight: 100,
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "ตกลง",
            cancelButtonText: "ยกเลิก",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            closeOnConfirm: false,
            closeOnCancel: false,
            showCancelButton: true
        }).then(result => {
            if (type == 'set') {
                SavefilterItemSize_set();
            } else {

                SavefilterItemSize_single();
            }

        });
    }

    function ConfirmSaveUserEdit(ItemCode, Size, RowIDItemSize, qty, qty_set, IDhn_person) {

        swal({
            title: "ยืนยันการผูกรายการ",
            text: "ท่านต้องการผูกรายการ ใช่หรือไม่ ?",
            // type: "info",
            imageUrl: 'assets/icon/Static Icon-1.png',
            imageWidth: 100,
            imageHeight: 100,
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "ตกลง",
            cancelButtonText: "ยกเลิก",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            closeOnConfirm: false,
            closeOnCancel: false,
            showCancelButton: true
        }).then(function() {
            SaveItemSize(ItemCode, Size, RowIDItemSize, qty, qty_set, IDhn_person);
        }, function(dismiss) {
            if (dismiss === 'cancel') {
                // alert("sdsd");
                $("input[type=radio][id=RadioSize_" + Size + ItemCode + "]").prop('checked', true);
            }
        });
    }

    function SavefilterItemSize_set() {
        var Url = '<?= $Url ?>';
        var IDSizeControl = $("#selectSizeControl").val();

        var selectGroupItem = $("#selectGroupItem").val();

        if (selectGroupItem == 'common_items') {
            var IsHn = 0;
        } else {
            var IsHn = 1;
        }


        if (IDSizeControl == '1') {

            var QtyS_start = $("#selectSizeS_start").val();
            var QtyS_end = $("#selectSizeS_end").val();

            var QtyM_start = $("#selectSizeM_start").val();
            var QtyM_end = $("#selectSizeM_end").val();

            var QtyL_start = $("#selectSizeL_start").val();
            var QtyL_end = 999999;

            if (QtyS_start == "" || QtyS_end == "" || QtyM_start == "" || QtyM_end == "" || QtyL_start == "" || QtyL_end == "") {
                swal({
                    title: "กรุณาเลือกกรอกจำนวนให้ครบ",
                    text: "",
                    // type: "info",
                    imageUrl: 'assets/icon/Static Icon.png',
                    imageWidth: 100,
                    imageHeight: 100,
                    showConfirmButton: false,
                    timer: 2000,
                });
                return;
            }

            swal({
                title: 'กรุณารอสักครู่',
                text: 'ระบบกำลังประมวลผล',
                allowOutsideClick: false
            })
            swal.showLoading();

            $.ajax({
                url: Url + "/itemSize/SavefilterItemSize1",
                type: 'POST',
                data: {
                    'IDSizeControl': IDSizeControl,

                    'QtyS_start': QtyS_start,
                    'QtyS_end': QtyS_end,
                    'QtyM_start': QtyM_start,
                    'QtyM_end': QtyM_end,
                    'QtyL_start': QtyL_start,
                    'QtyL_end': QtyL_end,
                    'UserEdit': 0,
                    'IsHn': IsHn

                },
                success: function(result) {
                    swal.close();
                    console.log(result.data);
                    swal({
                        title: 'Success',
                        text: 'ผูก Size รายการเรียบร้อยแล้ว',
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        timer: 2500,
                        confirmButtonText: 'Ok',
                        showConfirmButton: false
                    });

                    setTimeout(function() {
                        getItemSizeAll('-');
                    }, 1500);

                }
            });

        } else if (IDSizeControl == '2') {

            var QtyS_start = $("#selectSizeS_start").val();
            var QtyS_end = $("#selectSizeS_end").val();

            var QtyM_start = $("#selectSizeM_start").val();
            var QtyM_end = $("#selectSizeM_end").val();

            var QtyL_start = $("#selectSizeL_start").val();
            var QtyL_end = $("#selectSizeL_end").val();

            var QtyXL_start = $("#selectSizeXL_start").val();
            var QtyXL_end = 999999;

            var QtyXXL_start = 0;
            var QtyXXL_end = 0;

            if (QtyS_start == "" || QtyS_end == "" || QtyM_start == "" || QtyM_end == "" || QtyL_start == "" || QtyL_end == "" || QtyXL_start == "" || QtyXL_end == "") {
                swal({
                    title: "กรุณาเลือกกรอกจำนวนให้ครบ",
                    text: "",
                    // type: "info",
                    showConfirmButton: false,
                    timer: 2000,
                });
                return;
            }


            $.ajax({
                url: Url + "/itemSize/SavefilterItemSize2",
                type: 'POST',
                data: {
                    'IDSizeControl': IDSizeControl,

                    'QtyS_start': QtyS_start,
                    'QtyS_end': QtyS_end,
                    'QtyM_start': QtyM_start,
                    'QtyM_end': QtyM_end,
                    'QtyL_start': QtyL_start,
                    'QtyL_end': QtyL_end,
                    'UserEdit': 1,
                    'QtyXL_start': QtyXL_start,
                    'QtyXL_end': QtyXL_end,
                    'IsHn': IsHn
                    // 'QtyXXL_start': QtyXXL_start,
                    // 'QtyXXL_end': QtyXXL_end,

                },
                success: function(result) {
                    console.log(result.data);
                    swal({
                        title: 'Success',
                        text: 'ผูก Size รายการเรียบร้อยแล้ว',
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        timer: 2500,
                        confirmButtonText: 'Ok',
                        showConfirmButton: false
                    });

                    setTimeout(function() {
                        getItemSizeAll('-');
                    }, 1500);

                }
            });

        } else if (IDSizeControl == '3') {

            var QtyS_start = $("#selectSizeS_start").val();
            var QtyS_end = $("#selectSizeS_end").val();

            var QtyM_start = $("#selectSizeM_start").val();
            var QtyM_end = $("#selectSizeM_end").val();

            var QtyL_start = $("#selectSizeL_start").val();
            var QtyL_end = $("#selectSizeL_end").val();

            var QtyXL_start = $("#selectSizeXL_start").val();
            var QtyXL_end = $("#selectSizeXL_end").val();

            var QtyXXL_start = $("#selectSizeXXL_start").val();
            var QtyXXL_end = 999999;

            if (QtyS_start == "" || QtyS_end == "" || QtyM_start == "" || QtyM_end == "" || QtyL_start == "" || QtyL_end == "" || QtyXL_start == "" || QtyXL_end == "" || QtyXXL_start == "" || QtyXXL_end == "") {
                swal({
                    title: "กรุณาเลือกกรอกจำนวนให้ครบ",
                    text: "",
                    // type: "info",
                    imageUrl: 'assets/icon/Static Icon.png',
                    imageWidth: 100,
                    imageHeight: 100,
                    showConfirmButton: false,
                    timer: 2000,
                });
                return;
            }


            $.ajax({
                url: Url + "/itemSize/SavefilterItemSize3",
                type: 'POST',
                data: {
                    'IDSizeControl': IDSizeControl,

                    'QtyS_start': QtyS_start,
                    'QtyS_end': QtyS_end,
                    'QtyM_start': QtyM_start,
                    'QtyM_end': QtyM_end,
                    'QtyL_start': QtyL_start,
                    'QtyL_end': QtyL_end,
                    'UserEdit': 1,
                    'QtyXL_start': QtyXL_start,
                    'QtyXL_end': QtyXL_end,
                    'QtyXXL_start': QtyXXL_start,
                    'QtyXXL_end': QtyXXL_end,
                    'IsHn': IsHn

                },
                success: function(result) {
                    console.log(result.data);
                    swal({
                        title: 'Success',
                        text: 'ผูก Size รายการเรียบร้อยแล้ว',
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        timer: 2500,
                        confirmButtonText: 'Ok',
                        showConfirmButton: false
                    });

                    setTimeout(function() {
                        getItemSizeAll('-');
                    }, 1500);

                }
            });

        }

        // alert(selectSizeS_start+"|"+selectSizeS_end+"||||"+selectSizeM_start+"|"+selectSizeM_end+"||||"+selectSizeL_start+"|"+selectSizeL_end+"||||"+selectSizeXL_start+"|"+selectSizeXL_end+"||||"+selectSizeXXL_start+"|"+selectSizeXXL_end);

    }

    function SavefilterItemSize_single() {
        var Url = '<?= $Url ?>';
        var IDSizeControl = $("#selectSizeControl").val();
        var radioSizeSingle = $('input[name="radioSizeSingle"]:checked').val();
        var selectGroupItem = $("#selectGroupItem").val();

        if (selectGroupItem == 'common_items') {
            var IsHn = 0;
        } else {
            var IsHn = 1;
        }

        if (IDSizeControl == '1') {

            swal({
                title: 'กรุณารอสักครู่',
                text: 'ระบบกำลังประมวลผล',
                allowOutsideClick: false
            })
            swal.showLoading();

            $.ajax({
                url: Url + "/itemSize/SaveItemSize_Single",
                type: 'POST',
                data: {
                    'IDSizeControl': IDSizeControl,
                    'NameSize': radioSizeSingle,
                    'IsHn': IsHn

                },
                success: function(result) {
                    swal.close();
                    console.log(result.data);
                    swal({
                        title: 'Success',
                        text: 'ผูก Size รายการเรียบร้อยแล้ว',
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        timer: 2000,
                        confirmButtonText: 'Ok',
                        showConfirmButton: false
                    });

                    setTimeout(function() {
                        getItemSizeAll('-');
                    }, 1500);

                }
            });

        } else if (IDSizeControl == '2') {



        } else if (IDSizeControl == '3') {


        }


    }

    function CountItemSize(count) {
        if (count == undefined) {
            count = 0;
        }
        var StrTR = "<span style='color: gray;'> จำนวน </span> <span> " + commaSeparateNumber(count) + " </span> <span style='color: gray;'> รายการ </span>";
        $("#text_CountItem").html(StrTR);

        var countItem = $('#countItem').val(count);


    }
</script>
<div class="row">
    <div class="col-md-9 float-left">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0  font-weight-bold" style="color: black;">ITEM กับ LEVEL</h1>
        </div>
    </div>
    <div class=" col-md-3 float-right" style="text-align: right;">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Level Control :</span>
            </div>
            <select class="form-control" id="selectSizeControl" onchange="getSelectSize();"></select>
        </div>
    </div>
</div>

<div class="row mb-3">
    <!-- <div class="col-8">
        <div class="card">
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div> -->
    <div class="col-12">
        <div class="card">
            <div class="card-header h3" style="font-weight:bold;color:black;background-color: #fff;">
                <div class="row">
                    <div class="col-6" style="font-size: 1.5rem;">
                        รายละเอียดจำนวนรายการ
                    </div>
                    <div class="col-6" style="text-align: end;">
                        <input type="text" id="checkRadioSet_Graph" autocomplete="off" hidden>
                        <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn  " style="width: 100px;background-color:#1d90f4;color:black;" id="radio_check1">
                                <input type="radio" name="options" id="option2" autocomplete="off" onclick="checkRadioSetGraph(1)"> SET
                            </label>
                            <label class="btn " style="width: 100px;background-color:#a9b2c1;color:black;" id="radio_check2">
                                <input type="radio" name="options" id="option3" autocomplete="off" onclick="checkRadioSetGraph(0)"> SINGLE
                            </label>
                        </div> -->

                        <button class="btn " style="color: #175CD3;font-weight:bold;" hidden id="hidetabchart" onclick="hideShowMenuChart(1)">ซ่อนแถบ
                            <i class="fa-solid fa-angle-up"></i>
                        </button>
                        <button class="btn " style="color: #175CD3;font-weight:bold;" id="showtabchart" onclick="hideShowMenuChart(2)">แสดงแถบ
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="card-body" id="bodyChart">
                <div class="row">
                    <!-- <div class="offset-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12" style="">
                                        <span class="card-title" style="font-weight:bold;color:black;font-size: 1.25em;">จำนวนรายการทั้งหมด</span>
                                        <span style="font-weight:bold;color:black;font-size: 1.25rem;">
                                            <span style="font-weight:bold;color:green;" id='QtyitemAll'>3,813</span> รายการ
                                        </span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12" style="text-align: right;">
                                        <img src="img/Chart.png" style="width: 423px;height: 136px;border:none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn  " style="width: 100px;background-color:#1d90f4;color:white;" id="radio_check1">
                                                <input type="radio" name="options" id="option2" autocomplete="off" onclick="checkRadioSetGraph(1)"> SET
                                            </label>
                                            <label class="btn " style="width: 100px;background-color:#CCCCCC;color:white;" id="radio_check2">
                                                <input type="radio" name="options" id="option3" autocomplete="off" onclick="checkRadioSetGraph(0)"> PIECE
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart_1">
                                            <canvas id="myChart" width="500" height="520"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12" style="">
                                                <span class="card-title" style="font-weight:bold;color:black;font-size: 1.25em;">จำนวนรายการทั้งหมด</span>
                                                <span style="font-weight:bold;color:black;font-size: 1.25rem;">
                                                    <span style="font-weight:bold;color:green;" id='QtyitemAll'>3,813</span> รายการ
                                                </span>
                                            </div>

                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-12" style="text-align: right;">
                                                <img src="img/Chart.png" style="width: 200px;height: 40px;border:none;">
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-2" style="max-height: 465px;overflow-y: auto;">
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 1-25 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty1_25'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>

                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge1_25' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 26-50 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty26_50'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge26_50' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 51-75 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty51_75'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge51_75' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 76-100 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty76_100'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge76_100' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 101-125 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty101_125'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge101_125' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 126-150 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty126_150'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge126_150' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 151-175 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty151_175'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge151_175' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-2" style="max-height: 465px;overflow-y: auto;">
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 176-200 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty176_200'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge176_200' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 201-225 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty201_225'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge201_225' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 226-250 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty226_250'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge226_250' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 251-275 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty251_275'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge251_275' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 276-300 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty276_300'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge276_300' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 301-325 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty301_325'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge301_325' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-7">
                                                <label for="" class="bold" style="font-size: 11px;">จำนวนชิ้นในรายการ 326-350 ชิ้น</label>
                                            </div>
                                            <div class="col-5" style="text-align: end;">
                                                <small for="" class="bold " style="font-size: 60%;" id='Qty326_350'>จำนวนทั้งหมด 0 รายการ</small>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" id='SumAge326_350' style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>

    </div>
</div>





<div class="row ">
    <div class="col-12" id="rowSet">
        <div class="card">

            <div class="card-header h3" style="font-weight:bold;color:black;background-color: #fff;">
                <div class="row">
                    <div class="col-6" style="font-size: 1.5rem;">
                        ตั้งค่า Level ในรายการ
                    </div>
                    <div class="col-6" style="text-align: end;">
                        <button class="btn " style="color: #175CD3;font-weight:bold;" hidden id="hidetab" onclick="hideShowMenu(1)">ซ่อนแถบ
                            <i class="fa-solid fa-angle-up"></i>
                        </button>
                        <button class="btn " style="color: #175CD3;font-weight:bold;" id="showtab" onclick="hideShowMenu(2)">แสดงแถบ
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </div>
                </div>

            </div>

            <div class="card-body" id="divSizeSearch" style="margin-top: -10px;">
                <div class="row " style="text-align: left;">

                    <div class=" col-md-3 float-right" style="text-align: right;">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">กลุ่มรายการ :</span>
                            </div>
                            <select class="form-control" id="selectGroupItem" onchange="getItemSizeAll('0');">
                                <option value="common_items">รายการทั่วไป</option>
                                <option value="HN_items">รายการอุปกรณ์คนไข้</option>
                            </select>
                        </div>
                    </div>
                    <div class=" col-md-3 float-right" style="text-align: right;">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">รายการ :</span>
                            </div>
                            <select class="form-control" id="selectItem" onchange="checkSetOrSingle();">
                                <option value="0">รายการแบบ Set</option>
                                <option value="1">รายการแบบ Piece</option>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="col-4" style="padding: 5px;border-radius: 10px;">
                        <button type="button" class="btn btn-light " id="btnChangeSet" onclick="checkSetOrSingle(0)" style="font-weight: bold;background-color: #93c8f1;">รายการแบบ Set</button>
                        <button type="button" class="btn btn-secondary " id="btnChangeSingle" onclick="checkSetOrSingle(1)" style="font-weight: bold;">รายการแบบ Single</button>
                    </div> -->
                </div>

                <div class="row" hidden>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-2"></div>
                    <div class="col-4 text-right">
                        <input type="text" class="form-control" id="text_SetOrSingle" placeholder="" hidden>
                        <input type="text" class="form-control" id="countItem" placeholder="" hidden>
                        <div class="custom-control custom-switch" hidden>
                            <input type="checkbox" class="custom-control-input" id="checkboxSetOrSingle" onclick="checkSetOrSingle()">
                            <label class="custom-control-label" for="checkboxSetOrSingle">รายการแบบ Set - รายการแบบ Piece</label>
                        </div>
                    </div>
                </div>
                <div class="row" id="rowSet1" style="font-weight: bold;">
                    <div class="col" id="div_selectSizeS">
                        <div class="row">
                            <div class="col">
                                <label for="basic-url">Level 1</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="selectSizeS_start" value="1" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                            <label for="basic-url" style="margin-top: 40px;">ถึง</label>
                            <div class="col" style="margin-top: 37px;">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control numonly" id="selectSizeS_end">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="div_selectSizeM">
                        <div class="row">
                            <div class="col">
                                <label for="basic-url">Level 2</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="selectSizeM_start" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                            <label for="basic-url" style="margin-top: 40px;">ถึง</label>
                            <div class="col" style="margin-top: 37px;">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control numonly" id="selectSizeM_end">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="div_selectSizeL">
                        <div class="row">
                            <div class="col">
                                <label for="basic-url">Level 3</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="selectSizeL_start" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                            <label for="basic-url" style="margin-top: 40px;">ถึง</label>

                            <div class="col" style="margin-top: 37px;">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control numonly" id="selectSizeL_end">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col" style="margin-top: 32px;text-align: right;">
                            <button class="btn btn-primary" style="width: 50%;" id="btnClickSearch" onclick="ConfirmSave('set');">ตัวกรอง</button>
                        </div>
                    </div>
                </div>

                <div class="row" id="rowSet2" style="font-weight: bold;">
                    <div class="col-3" id="div_selectSizeXL">
                        <div class="row">
                            <div class="col">
                                <label for="basic-url">Level 4</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="selectSizeXL_start" value="1" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                            <label for="basic-url" style="margin-top: 40px;">ถึง</label>

                            <div class="col" style="margin-top: 37px;">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control numonly" id="selectSizeXL_end">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" id="div_selectSizeXXL">
                        <div class="row">
                            <div class="col">
                                <label for="basic-url">Level 5</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="selectSizeXXL_start" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                            <label for="basic-url" style="margin-top: 40px;">ถึง</label>

                            <div class="col" style="margin-top: 37px;">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control numonly" id="selectSizeXXL_end">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" id="rowSingle" style="font-weight: bold;">
                    <div class="col-8">
                        <div class="form-check form-check-inline" id="div_radioSizeSingle_S">
                            <input class="form-check-input" type="radio" id="radioSizeSingleS" value="S" name="radioSizeSingle" style="width:40px;height: 20px;" checked>
                            <label class="form-check-label" for="radioSizeSingleS">Level 1</label>
                        </div>
                        <div class="form-check form-check-inline ml-5" id="div_radioSizeSingle_M">
                            <input class="form-check-input" type="radio" id="radioSizeSingleM" value="M" name="radioSizeSingle" style="width:40px;height: 20px;">
                            <label class="form-check-label" for="radioSizeSingleM">Level 2</label>
                        </div>
                        <div class="form-check form-check-inline ml-5" id="div_radioSizeSingle_L">
                            <input class="form-check-input" type="radio" id="radioSizeSingleL" value="L" name="radioSizeSingle" style="width:40px;height: 20px;">
                            <label class="form-check-label" for="radioSizeSingleL">Level 3</label>
                        </div>
                        <div class="form-check form-check-inline ml-5" id="div_radioSizeSingle_XL">
                            <input class="form-check-input" type="radio" id="radioSizeSingleXL" value="XL" name="radioSizeSingle" style="width:40px;height: 20px;">
                            <label class="form-check-label" for="radioSizeSingleXL">Level 4</label>
                        </div>
                        <div class="form-check form-check-inline ml-5" id="div_radioSizeSingle_XXL">
                            <input class="form-check-input" type="radio" id="radioSizeSingleXXL" value="XXL" name="radioSizeSingle" style="width:40px;height: 20px;">
                            <label class="form-check-label" for="radioSizeSingleXXL">Level 5</label>
                        </div>

                        <div class="form-check form-check-inline ml-5" id="div_radioSizeSingle_XXL">
                            <button class="btn btn-primary" style="width: 130px;" id="btnClickSearch" onclick="ConfirmSave('single');">ตัวกรอง</button>
                        </div>

                    </div>
                    <!-- <div class="col-3">
                        <div class="col" style="margin-top: 32px;text-align: right;">
                            <button class="btn btn-primary" style="width: 50%;" id="btnClickSearch" onclick="ConfirmSave();">ตัวกรอง</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 mt-3" id="divBodyData">

        <input type="text" class="form-control" id="text_Size" placeholder="" hidden>

        <nav>
            <div class="row">

                <div class="col">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-nosize-tab" data-toggle="tab" href="#nav-nosize" role="tab" aria-controls="nav-nosize" aria-selected="true" onclick="getItemSizeAll('-'); $('#text_Size').val('-');">ไม่ได้ผูกไซส์</a>
                        <a class="nav-item nav-link " id="nav-S-tab" data-toggle="tab" href="#nav-nosize" role="tab" aria-controls="nav-S" aria-selected="true" onclick="getItemSizeAll('S');  $('#text_Size').val('S');">Level 1</a>
                        <a class="nav-item nav-link" id="nav-M-tab" data-toggle="tab" href="#nav-nosize" role="tab" aria-controls="nav-M" aria-selected="false" onclick="getItemSizeAll('M'); $('#text_Size').val('M');">Level 2</a>
                        <a class="nav-item nav-link" id="nav-L-tab" data-toggle="tab" href="#nav-nosize" role="tab" aria-controls="nav-L" aria-selected="false" onclick="getItemSizeAll('L'); $('#text_Size').val('L');">Level 3</a>
                        <a class="nav-item nav-link" id="nav-XL-tab" data-toggle="tab" href="#nav-nosize" role="tab" aria-controls="nav-XL" aria-selected="false" onclick="getItemSizeAll('XL'); $('#text_Size').val('XL');">Level 4</a>
                        <a class="nav-item nav-link" id="nav-XXL-tab" data-toggle="tab" href="#nav-nosize" role="tab" aria-controls="nav-XXL" aria-selected="false" onclick="getItemSizeAll('XXL'); $('#text_Size').val('XXL');">Level 5</a>
                    </div>
                </div>

                <div class="col-3">
                    <input type="text" class="form-control" id="inputSearch" placeholder="ค้นหาข้อมูลไอเทม">
                </div>
                <div class="col-1">
                    <button type="button" class="form-control btn btn-primary" onclick="getItemSizeAll('0');">ค้นหา</button>
                </div>



            </div>

        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-nosize" role="tabpanel" aria-labelledby="nav-nosize-tab">
                <div class="card">
                    <div class=" row mt-3 ml-1">
                        <div class="col-md-9 float-left mb-3">
                            <div class="d-sm-flex align-items-center justify-content-between ">
                                <h4 class="font-weight-bold" style="color: black;font-size: 1.5rem;">ข้อมูลรายการ</h4>
                            </div>
                        </div>
                        <div class=" col-md-3 float-right" style="text-align: right;">
                            <div class="align-items-center justify-content-between  mr-3">
                                <h5 class="font-weight-bold" style="color: black;" id="text_CountItem"> <span style="color: gray;">ขนาดไซส์ S</span> <span>5,000</span> <span style="color: gray;">ITEMS</span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding-top: 0px;margin-top: -35px;">
                        <!-- <div class="row" style="margin-top: -10px;">

                            <div class="col-3">
                                <input type="text" class="form-control" id="inputSearch" placeholder="ค้นหาข้อมูลไอเทม">
                            </div>
                            <div class="col-1">
                                <button type="button" class="form-control btn btn-primary" onclick="getItemSizeAll('0');">ค้นหา</button>
                            </div>



                        </div> -->

                        <div class="row mt-3">
                            <div class="col-12">
                                <table class="table" id="table_itemSize" class="table table-bordered table-hover w-100">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th style="width:10%;">ลำดับ</th>
                                            <th style="width:35%;">ชื่อรายการ</th>
                                            <th style="width:10%;">จำนวนรายการ</th>
                                            <th style="width:10%;">จำนวนชิ้นในรายการทั้งหมด</th>
                                            <th style="width:35%;">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card">
                    <div class=" row mt-3 ml-1">
                        <div class="col-md-9 float-left">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h4 class="font-weight-bold" style="color: black;">รายละเอียดข้อมูลเซ็ต</h4>
                            </div>
                        </div>
                        <div class=" col-md-3 float-right" style="text-align: right;">
                            <div class="align-items-center justify-content-between mb-4 mr-3">
                                <h5 class="font-weight-bold" style="color: black;"> <span style="color: gray;">ขนาดไซส์ S</span> <span>5,000</span> <span style="color: gray;">ITEMS</span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="inputSearch">ค้นหาข้อมูลไอเทม</label>
                                    <input type="text" class="form-control" id="inputSearch" placeholder="ค้นหาข้อมูลไอเทม">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" style="width: 30%;">ลำดับ</th>
                                        <th scope="col" style="width: 30%;">ชื่อรายการ</th>
                                        <th scope="col" style="width: 30%;">จำนวนชิ้นในรายการ</th>
                                        <th scope="col" style="text-align: center;">ไซส์</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>SET A</td>
                                        <td>10</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">L</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>SET B</td>
                                        <td>10</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">L</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>SET C</td>
                                        <td>10</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">L</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card">

                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-sm-flex align-items-center justify-content-between ">
    <div class="col-md-9 float-left">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0  font-weight-bold" style="color: black;">ตั้งค่าขนาด ITEM</h1>
        </div>
    </div>

</div>





<div class="row" id="mainType">


    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row ">
                    <div class="col-md-9 float-left">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h4 class="font-weight-bold" style="color: black;">ต้นทุนแฝงค่าเครื่องมือ</h4>
                        </div>
                    </div>
                    <div class="col-md-3 float-right" style="text-align: right;">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">กลุ่มรายการ</span>
                            </div>
                            <select class="form-control" id="selectSizeControl"></select>
                        </div>
                    </div>
                    <!-- <div class=" col-md-5 float-right" style="text-align: right;">
                        <div class="align-items-center justify-content-between mb-4 mr-3">
                            <button class="btn " data-toggle="modal" data-target="#ModalProcessType" style="border-color: gray;">จัดการคอลัมน์</button>
                        </div>
                    </div> -->
                </div>


                <div class="row">
                    <div class="col-12">


                        <div class="row">
                            <div class="col-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="font-weight-bold" style="color: black;">รายการเครื่องมือ</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" placeholder="ค้นหาข้อมูล">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul style="list-style: none;margin-left: -40px;" id="ul_MenuItem">
                                                    <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;"><input type="checkbox" style="width:15px;height:15px;">เครื่องมือ 1</button></li>
                                                    <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;"><input type="checkbox" style="width:15px;height:15px;">เครื่องมือ 2</button></li>
                                                    <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;"><input type="checkbox" style="width:15px;height:15px;">เครื่องมือ 3</button></li>
                                                    <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;"><input type="checkbox" style="width:15px;height:15px;">เครื่องมือ 4</button></li>
                                                    <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;"><input type="checkbox" style="width:15px;height:15px;">เครื่องมือ 5</button></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-header">

                                        <div class="row">
                                            <div class="col-md-9 float-left">
                                                <div class="d-sm-flex align-items-center justify-content-between ">
                                                    <h4 class="font-weight-bold" style="color: black;">เครื่องมือ 1</h4>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 float-right" style="text-align: right;">
                                                <div class="align-items-center justify-content-between  mr-3">
                                                    <button class="btn btn-primary">แก้ไข</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <table id="table_areaSize" class="table table-bordered table-hover w-100">
                                                    <thead class="thead-light">
                                                        <tr class="text-center">
                                                            <th style="text-align: center;">ลำดับ</th>
                                                            <th style="text-align: center;">ครั้งที่ซื้อ</th>
                                                            <th style="text-align: center;width: 14%;">วันที่ซื้อ</th>
                                                            <th style="text-align: center;width: 14%;">ราคาเครื่องมือ<br>(บาท/ชิ้น)</th>
                                                            <th style="text-align: center;width: 14%;">จำนวนชิ้นที่ซื้อ</th>
                                                            <th style="text-align: center;width: 14%;">อายุการใช้งาน <br>(ครั้ง)</th>
                                                            <th style="text-align: center;">ค่าเสื่อมราคาเครื่องมือ<br>บาทต่อครั้ง</th>
                                                            <th style="text-align: center;width: 12%;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">1</td>
                                                            <td style="text-align: center;">ครั้งที่ 1</td>
                                                            <td style="text-align: center;">12/02/2566</td>
                                                            <td style="text-align: center;">120</td>
                                                            <td style="text-align: center;">20</td>
                                                            <td style="text-align: center;">10</td>
                                                            <td style="text-align: right;">12</td>
                                                            <td style="text-align: center;"><i class="far fa-edit"> <i class="fas fa-trash-alt" style="color:red;"></i></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">1</td>
                                                            <td style="text-align: center;">ครั้งที่ 2</td>
                                                            <td style="text-align: center;"><input type="text" class="form-control"></td>
                                                            <td style="text-align: center;"><input type="text" class="form-control"></td>
                                                            <td style="text-align: center;"><input type="text" class="form-control"></td>
                                                            <td style="text-align: center;"><input type="text" class="form-control"></td>
                                                            <td style="text-align: right;">12</td>
                                                            <td style="text-align: center;"><span>ล้าง</span> | <span>เพิ่ม</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
</div>







<?php include_once('import/js.php'); ?>
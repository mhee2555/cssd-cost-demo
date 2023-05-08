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
                            <h4 class="font-weight-bold" style="color: black;">ข้อมูลขนาด Item</h4>
                        </div>
                    </div>
                    <div class="col-md-3 float-right" style="text-align: right;" >
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">ค้นหาข้อมูล :</span>
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


                <table class="table" id="table_ProcessType">
                    <thead>
                        <tr>
                            <th scope="col" style="font-weight: bold;color:black;width: 10%;">ลำดับ</th>
                            <th scope="col" style="font-weight: bold;color:black;">ขนาด</th>
                            <th scope="col" style="font-weight: bold;color:black;width: 30%;text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>
                                60x60
                            </td>
                            <td style="text-align: center;">
                                icon1 icon2
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <input type="text" class="form-control" placeholder="กรอกข้อมูล">
                            </td>
                            <td style="text-align: center;">
                                ล้าง | เพิ่ม
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







<?php include_once('import/js.php'); ?>
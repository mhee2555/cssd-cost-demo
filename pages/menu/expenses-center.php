<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-md-9 float-left">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0  font-weight-bold" style="color: black;">ค่าใช้จ่ายส่วนกลาง</h1>
        </div>
    </div>
</div>





<div class="row" id="mainType">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row ">
                    <div class="col-md-7 float-left">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h4 class="font-weight-bold" style="color: black;">ค่าใช้จ่ายส่วนกลาง</h4>
                        </div>
                    </div>
                    <div class=" col-md-5 float-right" style="text-align: right;">
                        <div class="align-items-center justify-content-between mb-4 mr-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalEx"> + เพิ่มค่าใช้จ่าย</button>
                        </div>
                    </div>
                </div>




                <table class="table" id="table_ProcessType">
                    <thead>
                        <tr>
                            <th scope="col" style="font-weight: bold;color:black;width: 10%;">ลำดับ</th>
                            <th scope="col" style="font-weight: bold;color:black;">ชื่อค่าใช้จ่าย</th>
                            <th scope="col" style="font-weight: bold;color:black;width: 20%;">ประเภท</th>
                            <th scope="col" style="font-weight: bold;color:black;width: 20%;">ค่าเสื่อม</th>
                            <th scope="col" style="font-weight: bold;color:black;width: 20%;">ดูรายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                แอร์
                            </td>
                            <td>
                                สิ้นเปลืองรายปี
                            </td>
                            <td>
                                30000
                            </td>
                            <td>
                                <button class="btn btn-primary" onclick="showDetail(1)" id="showdetail1">แสดงรายละเอียด</button>
                                <button class="btn btn-primary" onclick="showDetail(2)" id="hidedetail1" >ซ่อนรายละเอียด</button>
                            </td>
                        </tr>
                        <tr class="info" id="trDetail1">
                            <td colspan="5">
                                <div class="row">
                                    <div class="col-7  float-left">
                                        <h5 style="font-weight:bold;color:black;">ค่าใช้จ่ายส่วนกลาง</h5>
                                    </div>
                                    <div class="col-5  float-right" style="text-align: end;">
                                        <button class="btn" data-toggle="modal" style="border-color:gray;">แก้ไข</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label>วันที่เริ่มต้น</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label >XXXXXXXX</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label >มูลค่าซาก</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label >อายุการใช้งานที่เหลือ (ปี)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label >ค่าเสื่อมราคาเครื่องจักรต่อเดือน</label>
                                            <input type="text" class="form-control" id="" disabled>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalEx" tabindex="-1" role="dialog" aria-labelledby="ModalEx" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่มค่าใช้จ่าย</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="typeEx" class="col-sm-4 col-form-label">ประเภทค่าใช้จ่าย</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="typeEx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nameEx" class="col-sm-4 col-form-label">ชื่อค่าใช้จ่าย</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nameEx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="startEx" class="col-sm-4 col-form-label">วันที่เริ่มต้นใช้งาน</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="startEx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="modelEx" class="col-sm-4 col-form-label">ชื่อรุ่น</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="modelEx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="brandEx" class="col-sm-4 col-form-label">ชื่อยี่ห้อ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="brandEx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="valueEx" class="col-sm-4 col-form-label">มูลค่าซาก (บาท)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="valueEx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="serviceEx" class="col-sm-4 col-form-label">อายุการใช้งาน</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="serviceEx">
                    </div>
                </div>

                <hr>

                <div class="form-group row">
                    <label for="deEx" class="col-sm-4 col-form-label" style="font-weight:bold;">ค่าเสื่อมราคา</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="deEx">
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="CreateProcessType();"> บันทึก </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>





<?php include_once('import/js.php'); ?>
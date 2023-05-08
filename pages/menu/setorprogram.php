<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">SET ผูก PROGRAM</h1>
</div> -->

<div class="row">
    <div class="col-md-9 float-left">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="font-weight-bold" style="color: black;">ข้อมูล Set ผูก Program</h4>
        </div>
    </div>
    <!-- <div class=" col-md-3 float-right" style="text-align: right;">
        <div class="align-items-center justify-content-between mb-4 mr-3">
            <input type="text" class="form-control" id="txtSearch" placeholder="ค้นหาข้อมูลไอเทม">
        </div>
    </div> -->
</div>

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <!-- <h5 style="color:black;font-weight:bold;">ข้อมูล Item ผูก Program</h5> -->
                    </div>
                    <div class="col-3 float-right">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">กลุ่มรายการ :</span>
                            </div>
                            <select class="form-control" id="selectSizeControl" ></select>
                        </div>
                    </div>
                    <div class="col-3 float-right">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">รายการ :</span>
                            </div>
                            <select class="form-control" id="selectSizeControl" ></select>
                        </div>
                    </div>
                    <div class="col-3 float-right">
                        <input type="text" class="form-control" id="inputSearch" placeholder="ค้นหาข้อมูลไอเทม">
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="table_sizeControl" style="overflow-x: auto;white-space: nowrap;font-size: 20px;">
                        <thead>
                            <tr>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;" rowspan="2">ลำดับ</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;" rowspan="2">รายการ</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;" rowspan="2">จำนวนรายการ</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;" rowspan="2">จำนวนชิ้นทั้งหมด</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;" colspan="3">Dirty Zone</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;" colspan="2">Clean Zone</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;" colspan="2">Sterile Zone</th>
                            </tr>
                            <tr>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;">Level</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;">Program</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;">Mixed</th>

                                <th scope="col" style="font-weight: bold;color:black;text-align: center;">Level</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;">Program</th>

                                <th scope="col" style="font-weight: bold;color:black;text-align: center;">Level</th>
                                <th scope="col" style="font-weight: bold;color:black;text-align: center;">Program</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="text-align: center;" scope="row">1</th>
                                <td style="text-align: center;">กระบอก Nebulizer : Mr. George William Kenny </td>
                                <th style="text-align: center;" scope="row">1</th>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">Washer</td>
                                <td style="text-align: center;">
                                    <input style="position: initial;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked data-toggle="modal" data-target="#exampleModal">
                                    <br>
                                    <div style="background-color:#F0FFFF	;border-radius: 4px;">
                                        <small style="color:black;">Ultrasonic <span style="background-color: #fff;border-radius: 25px;">S</span> Manual <span style="background-color: #fff;border-radius: 25px;">S</span> </small>
                                    </div>
                                </td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">รูปแบบการห่อ 1 </td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">Storage -> Dispatch</td>

                            </tr>

                            <tr>
                                <th style="text-align: center;" scope="row">2</th>
                                <td style="text-align: center;">กระบอก Nebulizer : Mr. George William Kenny </td>
                                <th style="text-align: center;" scope="row">1</th>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">Washer</td>
                                <td style="text-align: center;">
                                    <input style="position: initial;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked data-toggle="modal" data-target="#exampleModal">
                                    <br>
                                    <div style="background-color:#F0FFFF	;border-radius: 4px;">
                                        <small style="color:black;">Ultrasonic <span style="background-color: #fff;border-radius: 25px;">S</span> Manual <span style="background-color: #fff;border-radius: 25px;">S</span> </small>
                                    </div>
                                </td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">รูปแบบการห่อ 1 </td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">Storage -> Dispatch</td>

                            </tr>

                            <tr>
                                <th style="text-align: center;" scope="row">3</th>
                                <td style="text-align: center;">กระบอก Nebulizer : Mr. George William Kenny </td>
                                <th style="text-align: center;" scope="row">1</th>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">Washer</td>
                                <td style="text-align: center;">
                                    <input style="position: initial;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked data-toggle="modal" data-target="#exampleModal">
                                    <br>
                                    <div style="background-color:#F0FFFF	;border-radius: 4px;">
                                        <small style="color:black;">Ultrasonic <span style="background-color: #fff;border-radius: 25px;">S</span> Manual <span style="background-color: #fff;border-radius: 25px;">S</span> </small>
                                    </div>
                                </td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">รูปแบบการห่อ 1 </td>
                                <td style="text-align: center;">Level 1</td>
                                <td style="text-align: center;">Storage -> Dispatch</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mixed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>โปรแกรมปัจจุบัน</span>
                <div class="form-group row mt-2">
                    <label for="modalSize" class="col-sm-3 col-form-label">Size</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="modalSize" placeholder="S" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="modalProgram" class="col-sm-3 col-form-label">Program</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="modalProgram" placeholder="Washer" disabled>
                    </div>
                </div>
                <span>โปรแกรมที่ต้องการผูก</span>
                <div class="form-group row mt-2">
                    <label for="modalProgram1" class="col-sm-3 col-form-label">Program 1</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="modalProgram1" placeholder="Washer" disabled>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0" style="color: black;font-weight: bold;">Size</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gridRadios" id="checkboxSizeS_1" value="option1">
                                <label class="form-check-label" for="checkboxSizeS_1">
                                    S
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gridRadios" id="checkboxSizeM_1" value="option2">
                                <label class="form-check-label" for="checkboxSizeM_1">
                                    M
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="checkbox" name="gridRadios" id="checkboxSizeL_1" value="option3">
                                <label class="form-check-label" for="checkboxSizeL_1">
                                    L
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>


                <hr>

                <div class="form-group row mt-2">
                    <label for="modalProgram2" class="col-sm-3 col-form-label">Program 2</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="modalProgram2" placeholder="Washer" disabled>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0" style="color: black;font-weight: bold;">Size</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gridRadios" id="checkboxSizeS_2" value="option1">
                                <label class="form-check-label" for="checkboxSizeS_2">
                                    S
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gridRadios" id="checkboxSizeM_2" value="option2">
                                <label class="form-check-label" for="checkboxSizeM_2">
                                    M
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="checkbox" name="gridRadios" id="checkboxSizeL_2" value="option3">
                                <label class="form-check-label" for="checkboxSizeL_2">
                                    L
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
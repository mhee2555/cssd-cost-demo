<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">ตั้งค่าหมวดหมู่</h1>
</div>

<div class="row">
    <div class="col-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " id="headType" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Process Type</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="headProgram" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="headMachine" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Machine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="headSize" data-toggle="tab" href="#Size" role="tab" aria-controls="Size" aria-selected="false">Level</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="headSizeArea" data-toggle="tab" href="#SizeArea" role="tab" aria-controls="SizeArea" aria-selected="false">สัดส่วนพื้นที่</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="headType">

                <div class="row mt-5">
                    <div class="col-md-7 float-left">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h4 class="font-weight-bold" style="color: black;">ข้อมูลชนิดของกระบวนการ</h4>
                        </div>
                    </div>
                    <div class=" col-md-5 float-right" style="text-align: right;">
                        <div class="align-items-center justify-content-between mb-4 mr-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalProcessType">+ เพิ่มประเภท</button>
                        </div>
                    </div>
                </div>



                <div class="row" id="mainType">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table" id="table_ProcessType">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-weight: bold;color:black;width: 10%;">ลำดับ</th>
                                            <th scope="col" style="font-weight: bold;color:black;width: 30%;">ชื่อประเภท</th>
                                            <th scope="col" style="font-weight: bold;color:black;width: 30%;">สถานะการใช้งาน</th>
                                            <th scope="col" style="font-weight: bold;color:black;">ลำดับการแสดงผล</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>mixed</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="switchOpenProcess1">
                                                    <label class="custom-control-label" for="switchOpenProcess1" style="color: red;" id="labelSwitchProcess1">เปิดใช้งาน</label>
                                                </div>
                                            </td>
                                            <td>
                                                <select name="" id="selectShowProcess1" class="form-control">
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="headProgram">

                <div class="row mt-5">
                    <div class="col-md-7 float-left">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h4 class="font-weight-bold" style="color: black;">ข้อมูลโปรแกรม</h4>
                        </div>
                    </div>
                    <div class=" col-md-5 float-right" style="text-align: right;">
                        <div class="align-items-center justify-content-between mb-4 mr-3">
                            <select name="" id="selectSearchSize" class="form-control" style="display: inline;width: 50%;"></select>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalProgram">+ เพิ่มประเภท</button>

                        </div>
                    </div>
                </div>

                <div class="row " id="mainProgram">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-weight: bold;color:black;">ลำดับ</th>
                                            <th scope="col" style="font-weight: bold;color:black;">ชื่อประเภท</th>
                                            <th scope="col" style="font-weight: bold;color:black;">โปรแกรม</th>
                                            <th scope="col" style="font-weight: bold;color:black;">สถานะการใช้งาน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>การล้าง</td>
                                            <td>Manual1</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="switchOpenProgram1">
                                                    <label class="custom-control-label" for="switchOpenProgram1" style="color: red;" id="labelSwitchProgram1">เปิดใช้งาน</label>
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="headMachine">

                <div class="row mt-5">
                    <div class="col-md-7 float-left">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h4 class="font-weight-bold" style="color: black;">ข้อมูลเครื่อง</h4>
                        </div>
                    </div>
                    <div class=" col-md-5 float-right" style="text-align: right;">
                        <div class="align-items-center justify-content-between mb-4 mr-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalMachine">+ เพิ่มประเภท</button>

                        </div>
                    </div>
                </div>


                <div class="row " id="mainMachine">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-weight: bold;color:black;">ลำดับ</th>
                                            <th scope="col" style="font-weight: bold;color:black;">ชื่อประเภท</th>
                                            <th scope="col" style="font-weight: bold;color:black;">ชื่อโปรแกรม</th>
                                            <th scope="col" style="font-weight: bold;color:black;">เครื่อง</th>
                                            <th scope="col" style="font-weight: bold;color:black;">สถานะการใช้งาน</th>
                                            <th scope="col" style="font-weight: bold;color:black;">ลำดับการแสดงผล</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>การล้าง</td>
                                            <td>โปรแกรม</td>
                                            <td>เครื่อง</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="switchOpenMachine1">
                                                    <label class="custom-control-label" for="switchOpenMachine1" style="color: red;" id="labelSwitchMachine1">เปิดใช้งาน</label>
                                                </div>
                                            </td>
                                            <td>
                                                <select name="" id="selectShowMachine1" class="form-control">
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="Size" role="tabpanel" aria-labelledby="headSize">
                <div class="row mt-5" id="mainMachine">
                    <div class="col-md-9 float-left">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h4 class="font-weight-bold" style="color: black;">ข้อมูล Level</h4>
                        </div>
                    </div>
                    <div class=" col-md-3 float-right" style="text-align: right;">
                        <div class="align-items-center justify-content-between mb-4 mr-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalSizeControl" id='bt_AddSize'>+ เพิ่มประเภท Level</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table" id="table_sizeControl">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-weight: bold;color:black;width: 10%;">ลำดับ</th>
                                            <th scope="col" style="font-weight: bold;color:black;width: 65%;">ประเภท</th>
                                            <th scope="col" style="font-weight: bold;color:black;text-align: center;">Level</th>
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

            <div class="tab-pane fade" id="SizeArea" role="tabpanel" aria-labelledby="headSizeArea">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class=" row mt-3 ml-3">
                                <h4 class="font-weight-bold" style="color: black;">การกระจายต้นทุนคงที่ไปที่เครื่องมือแต่ละรายการ</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card shadow  py-2" style="background-color: #f8f9fc;">
                                            <div class="card-body" style="height: 150px;">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="">
                                                        <h4 class=" font-weight-bold text-wihte text-uppercase " style="color: black;">
                                                            Occupancy ของแต่ละรอบ
                                                        </h4>

                                                        <div class="h2 mt-4 font-weight-bold text-success">
                                                            0%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card shadow  py-2" style="background-color: #f8f9fc;">
                                            <div class="card-body" style="height: 150px;">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="">
                                                        <h4 class=" font-weight-bold text-wihte text-uppercase " style="color: black;">
                                                            Occupancy ของแต่ละวัน
                                                        </h4>

                                                        <div class="h2 mt-4 font-weight-bold text-success">
                                                            0%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card shadow  py-2" style="background-color: #f8f9fc;">
                                            <div class="card-body" style="height: 150px;">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="">
                                                        <h4 class=" font-weight-bold text-wihte text-uppercase " style="color: black;">
                                                            Occupancy ของแต่ละเดือน
                                                        </h4>

                                                        <div class="h2 mt-4 font-weight-bold text-success">
                                                            0%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card shadow  py-2" style="background-color: #f8f9fc;">
                                            <div class="card-body" style="height: 150px;">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="">
                                                        <h4 class=" font-weight-bold text-wihte text-uppercase " style="color: black;">
                                                            Occupancy ของแต่ละปี
                                                        </h4>

                                                        <div class="h2 mt-4 font-weight-bold text-success">
                                                            70.0%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="font-weight-bold" style="color: black;">รายการสัดส่วนพื้นที่ตู้</h4>
                                            </div>
                                            <div class="card-body">
                                                <input type="text" class="form-control" placeholder="ค้นหาข้อมูล">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <ul style="list-style: none;margin-left: -40px;">
                                                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;">สัดส่วนพื้นที่ตู้ #1</button></li>
                                                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;">สัดส่วนพื้นที่ตู้ #2</button></li>
                                                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;">สัดส่วนพื้นที่ตู้ #3</button></li>
                                                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;">สัดส่วนพื้นที่ตู้ #4</button></li>
                                                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;">สัดส่วนพื้นที่ตู้ #5</button></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="card">
                                            <div class="card-header">

                                                <div class="row">
                                                    <div class="col-md-9 float-left">
                                                        <div class="d-sm-flex align-items-center justify-content-between ">
                                                            <h4 class="font-weight-bold" style="color: black;">สัดส่วนพื้นที่ตู้ #1</h4>
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-3 float-right" style="text-align: right;">
                                                        <div class="align-items-center justify-content-between  mr-3">
                                                            <input type="text" class="form-control" placeholder="ค้นหาข้อมูล">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table  id="table_areaSize" class="table table-bordered table-hover w-100">
                                                            <thead class="thead-light">
                                                                <tr class="text-center">
                                                                    <th style="text-align: center;">ลำดับ</th>
                                                                    <th style="text-align: left;">รายการ</th>
                                                                    <th style="text-align: center;">จำนวน SET ต่อ 1 รอบ (เซ็ต)</th>
                                                                    <th style="text-align: center;">สัดส่วนต้นทุนคงที่ต่อชิ้นต่อรอบ</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: center;">1</td>
                                                                    <td >SET 1</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" value="10">
                                                                    </td>
                                                                    <td style="text-align: center;">10.0 %</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: center;">1</td>
                                                                    <td >SET 1</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" value="10">
                                                                    </td>
                                                                    <td style="text-align: center;">10.0 %</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: center;">1</td>
                                                                    <td >SET 1</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" value="10">
                                                                    </td>
                                                                    <td style="text-align: center;">10.0 %</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: center;">1</td>
                                                                    <td >SET 1</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" value="10">
                                                                    </td>
                                                                    <td style="text-align: center;">10.0 %</td>
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

        <!-- <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active headAll" aria-current="page" href="#" id="headType">ประเภท</a>
            </li>
            <li class="nav-item">
                <a class="nav-link headAll" href="#" id="headProgram">โปรแกรม</a>
            </li>
            <li class="nav-item">
                <a class="nav-link headAll" href="#" id="headMachine">เครื่อง</a>
            </li>
        </ul> -->
    </div>
</div>

<div class="modal fade" id="ModalProcessType" tabindex="-1" role="dialog" aria-labelledby="ModalProcessType" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่มข้อมูล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="NameProcessType" class="col-sm-4 col-form-label">ชื่อประเภท</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="NameProcessType">
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

<div class="modal fade" id="ModalProgram" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่มข้อมูล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow-y: auto;max-height: 500px;">
                <div class="form-group row">
                    <label for="txtTypeProgram" class="col-sm-4 col-form-label">ชื่อประเภท</label>
                    <div class="col-sm-8">
                        <select name="" id="txtTypeProgram" class="form-control"></select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtNameProgram" class="col-sm-4 col-form-label">ชื่อโปรแกรม 1</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="txtNameProgram1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addProgram" class="col-sm-4 col-form-label">Mixed</label>
                    <div class="col-sm-8">
                        <div class="form-check">
                            <label class="form-check-label" for="addProgram">Mixed</label>
                            <i class="fa-solid fa-plus" style="cursor: pointer;color:green;" id="addProgram"></i>
                        </div>
                    </div>
                </div>
                <div id="nameProgramS">
                    <input type="text" id="countRowProgram" value="1" hidden>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="CreateSizeControl();"> บันทึก </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalMachine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่มข้อมูล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow-y: auto;max-height: 500px;">
                <div class="form-group row">
                    <label for="txtTypeMachine" class="col-sm-4 col-form-label">ชื่อประเภท</label>
                    <div class="col-sm-8">
                        <select name="" id="txtTypeMachine" class="form-control"></select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtNameProgram1" class="col-sm-4 col-form-label">ชื่อโปรแกรม</label>
                    <div class="col-sm-8">
                        <select name="" id="txtNameProgram1" class="form-control"></select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="selectNameMachine1" class="col-sm-4 col-form-label">ชื่อเครื่อง</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="selectNameMachine1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="modalSelectShowMachine1" class="col-sm-4 col-form-label">ลำดับการแสดงผล</label>
                    <div class="col-sm-8">
                        <select name="" id="modalSelectShowMachine1" class="form-control"></select>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="CreateSizeControl();"> บันทึก </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalSizeControl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่มข้อมูล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nameMachine" class="col-sm-4 col-form-label">ชื่อประเภท</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="txtNameTypeSize">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="CreateSizeControl();"> บันทึก </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>
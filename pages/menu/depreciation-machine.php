<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0  font-weight-bold" style="color: black;">ค่าเสื่อมราคาเครื่องจักร</h1>
</div>

<!-- Content Row -->
<div class="row" hidden>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class=" font-weight-bold text-wihte text-uppercase mb-1 bg-warning" style="font-size: 18px;color: #fff;border-radius: 50px;width: 50%;text-align: center;">
                            ประเภทการล้าง
                        </div>
                        <div class=" font-weight-bold text-dark text-uppercase mb-1" style="font-size: 16px;">
                            รวมค่าเสื่อมราคาเครื่องจักร
                        </div>
                        <div class="h1 mb-0 font-weight-bold text-dark">
                            600.00
                        </div>
                    </div>
                    <div class="col-auto mt-5 font-weight-bold text-dark">
                        บาทต่อเดือน
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class=" font-weight-bold text-wihte text-uppercase mb-1 bg-danger" style="font-size: 18px;color: #fff;border-radius: 50px;width: 55%;text-align: center;">
                            ประเภทการฆ่าเชื้อ
                        </div>
                        <div class=" font-weight-bold text-dark text-uppercase mb-1" style="font-size: 16px;">
                            รวมค่าเสื่อมราคาเครื่องจักร
                        </div>
                        <div class="h1 mb-0 font-weight-bold text-dark">
                            500.00
                        </div>
                    </div>
                    <div class="col-auto mt-5 font-weight-bold text-dark">
                        บาทต่อเดือน
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class=" font-weight-bold text-wihte text-uppercase mb-1 bg-primary" style="font-size: 18px;color: #fff;border-radius: 50px;width: 50%;text-align: center;">
                            ประเภทการแพ็ค
                        </div>
                        <div class=" font-weight-bold text-dark text-uppercase mb-1" style="font-size: 16px;">
                            รวมค่าเสื่อมราคาเครื่องจักร
                        </div>
                        <div class="h1 mb-0 font-weight-bold text-dark">
                            800.00
                        </div>
                    </div>
                    <div class="col-auto mt-5 font-weight-bold text-dark">
                        บาทต่อเดือน
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class=" font-weight-bold text-wihte text-uppercase mb-1 bg-success" style="font-size: 18px;color: #fff;border-radius: 50px;width: 50%;text-align: center;">
                            ประเภทการซีล
                        </div>
                        <div class=" font-weight-bold text-dark text-uppercase mb-1" style="font-size: 16px;">
                            รวมค่าเสื่อมราคาเครื่องจักร
                        </div>
                        <div class="h1 mb-0 font-weight-bold text-dark">
                            600.00
                        </div>
                    </div>
                    <div class="col-auto mt-5 font-weight-bold text-dark">
                        บาทต่อเดือน
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<div class="row">

    <div class="col-lg-12 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">ข้อมูลเครื่องจักร</h1>
                    <button class="d-none d-sm-inline-block btn btn-xl btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"> + เพิ่มเครื่องจักร </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Process</span>

                            </div>


                            <select class="form-control" id="selectSizeControl" onchange="getProcess();">
                                <option value="0">Dirty Zone</option>
                                <option value="1">Sterile Zone</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-2 ml-auto ">
                        <div class="form-group">
                            <input type="text" class="form-control" id="txtSearch" placeholder="ค้นหาข้อมูล">
                        </div>
                    </div>





                </div>

                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-hover w-100">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ชื่อเครื่องจักร</th>

                                    <th scope="col">ราคา</th>
                                    <th scope="col">อายุการใช้งานที่เหลือ</th>
                                    <th scope="col">มูลค่าซาก</th>
                                    <th scope="col">ค่าเสื่อมต่อเดือน</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td><button class="btn btn-block " style="color:black;border-color: black;" onclick="openNav()">ดูรายละเอียด</button></td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Jacob</td>
                                    <td>Jacob</td>

                                    <td>@fat</td>
                                    <th scope="row">1</th>
                                    <td><button class="btn btn-block " style="color:black;border-color: black;">ดูรายละเอียด</button></td>

                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>

                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <th scope="row">1</th>
                                    <td><button class="btn btn-block " style="color:black;border-color: black;">ดูรายละเอียด</button></td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>



    </div>

</div>
<div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()" style="width: 0%; opacity: 0;"></div>
<div id="mySidenav" class="sidenav">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <span style="color:black;font-weight:bold;" class="h3">เครื่องจักรที่ 1</span>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn border-dark" style="color:black;">แก้ไข</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row" style="font-weight: bold;">
                       

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">ชื่อเครื่องจักร 1</label>
                                <input type="text" class="form-control" id="" placeholder="ชื่อเครื่องจักร" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">ชื่อเครื่องจักร 2</label>
                                <input type="text" class="form-control" id="" placeholder="ชื่อเครื่องจักร" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">วันที่เริ่มใช้</label>
                                <input type="text" class="form-control" id="" placeholder="วันที่เริ่มใช้">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ชื่อรุ่น</label>
                                <input type="text" class="form-control" id="" placeholder="ชื่อรุ่น">
                            </div>
                        </div>
                        <!-- <div></div> -->
                         <!-- <div></div> -->
                          <!-- <div></div> -->
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="">ชื่อยี่ห้อ</label>
                                <input type="text" class="form-control" id="" placeholder="ชื่อยี่ห้อ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ราคา (บาท)</label>
                                <input type="text" class="form-control" id="" placeholder="ราคา">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">มูลค่าซาก (บาท)</label>
                                <input type="text" class="form-control" id="" placeholder="มูลค่าซาก">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">อายุการใช้งานที่เหลือ</label>
                                <input type="text" class="form-control" id="" placeholder="อายุการใช้งานที่เหลือ">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">ค่าเสื่อมราคาเครื่อง (บาทต่อเดือน)</label>
                                <input type="text" class="form-control" id="" placeholder="ค่าเสื่อมราคาเครื่อง">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ค่าเสื่อมราคา เครื่องจักร 1 </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nameMachine" class="col-sm-4 col-form-label">กระบวนการ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nameMachine" placeholder="กระบวนการ" value="Dirty Zone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nameMachine" class="col-sm-4 col-form-label">ชื่อเครื่องจักร 1</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nameMachine" placeholder="กรอกชื่อเครื่องจักร 1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nameMachine" class="col-sm-4 col-form-label">ชื่อเครื่องจักร 2</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nameMachine" placeholder="กรอกชื่อเครื่องจักร 2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="startDate" class="col-sm-4 col-form-label">วันที่เริ่มใช้งาน</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="startDate" placeholder="วันที่เริ่มใช้งาน">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="exDate" class="col-sm-4 col-form-label">วันหมดอายุ</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="exDate" placeholder="วันหมดอายุ">
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="namemModel" class="col-sm-4 col-form-label">ชื่อรุ่น</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="namemModel" placeholder="ชื่อรุ่น">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="namemModel" class="col-sm-4 col-form-label">ราคา</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="namemModel" placeholder="ราคา">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nameBrand" class="col-sm-4 col-form-label">ชื่อยี่ห้อ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nameBrand" placeholder="ชื่อยี่ห้อ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="valueMachine" class="col-sm-4 col-form-label">มูลค่าซาก</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="valueMachine" placeholder="มูลค่าซาก">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ageActive" class="col-sm-4 col-form-label">อายุการใช้งานที่เหลือ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="ageActive" placeholder="อายุการใช้งาน">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="machinePerMonth" class="col-sm-4 col-form-label">ค่าเสื่อมราคาเครื่องต่อเดือน</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="machinePerMonth" placeholder="ค่าเสื่อมราคาเครื่องต่อเดือน">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<?php include_once('import/js.php'); ?>
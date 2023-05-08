<div class="row">
    <div class="col-md-9 float-left">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0  font-weight-bold" style="color: black;">เวลารวมที่ใช้ในแต่ละ PROCESS</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " id="headType1" data-toggle="tab" href="#Type1" role="tab" aria-controls="Type1" aria-selected="true" onclick="showMenu('A')">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="headType2" data-toggle="tab" href="#Type2" role="tab" aria-controls="Type2" aria-selected="false" onclick="showMenu('D')">Dirty Zone</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="headType3" data-toggle="tab" href="#Type3" role="tab" aria-controls="Type3" aria-selected="false" onclick="showMenu('C')">Clean Zone</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="headType4" data-toggle="tab" href="#Type4" role="tab" aria-controls="Type4" aria-selected="false" onclick="showMenu('S')">Sterile Zone</a>
            </li>
        </ul>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12 mb-4" id="rowDirty">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">DIRTY ZONE</h1>
                </div>
            </div>

            <div class="card-body">
            
                <div class="col-12">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 20px;">ลำดับ</th>
                                <th scope="col" style="font-size: 20px;">Level And Program</th>
                                <th scope="col" style="font-size: 20px;">จำนวนคน</th>
                                <th scope="col" style="font-size: 20px;">จำนวนนาที</th>
                                <th scope="col" style="font-size: 20px;">เวลานาทีรวม</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr style="font-size: 20px;color: black;">
                                <th>WASHER</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
  
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td>@mdo</td>
                            </tr>


                            <tr style="font-size: 20px;color: black;">
                                <th>Ultrasonic</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
  
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td>@mdo</td>
                            </tr>


                            <tr style="font-size: 20px;color: black;">
                                <th>Manual</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
  
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td>@mdo</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12 mb-4" id="rowClean">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">CLEAN ZONE</h1>
                </div>
            </div>

            <div class="card-body">
            
                <div class="col-12">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 20px;">ลำดับ</th>
                                <th scope="col" style="font-size: 20px;">Level And Program</th>
                                <th scope="col" style="font-size: 20px;">จำนวนคน</th>
                                <th scope="col" style="font-size: 20px;">จำนวนนาที</th>
                                <th scope="col" style="font-size: 20px;">เวลานาทีรวม</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td>@mdo</td>
                            </tr>


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12 mb-4" id="rowSterile">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">STERILE ZONE</h1>
                </div>
            </div>

            <div class="card-body">
            
                <div class="col-12">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 20px;">ลำดับ</th>
                                <th scope="col" style="font-size: 20px;">Level And Program</th>
                                <th scope="col" style="font-size: 20px;">จำนวนคน</th>
                                <th scope="col" style="font-size: 20px;">จำนวนนาที</th>
                                <th scope="col" style="font-size: 20px;">เวลานาทีรวม</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td><input type="text" class="form-control" style="width: 50%;" autocomplete="off"></td>
                                <td>@mdo</td>
                            </tr>


                           

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
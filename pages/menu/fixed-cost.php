<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0  font-weight-bold" style="color: black;">ต้นทุนคงที่</h1>
</div>

<div class="row">
    <div class="col-2">
        <div class="form-group">
            <input type="text" class="form-control" id="txtSearch" placeholder="ค้นหาข้อมูล">
        </div>
    </div>
    <div class="col-2">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">เดือน</span>
            </div>
            <select class="form-control" id="selectSizeControl"></select>
        </div>

    </div>

    <div class="col-2">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">ปี</span>
            </div>
            <select class="form-control" id="selectSizeControl"></select>
        </div>
    </div>

    <div class="col-2">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Process</span>
            </div>
            <select class="form-control" id="selectSizeControl"></select>
        </div>
    </div>



</div>


<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold" style="color: black;">รายการเครื่อง</h4>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="ค้นหาข้อมูล">

                <div class="row">
                    <div class="col-12">
                        <ul style="list-style: none;margin-left: -40px;">
                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;text-align: left;">WD #1</button></li>
                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;text-align: left;">WD #2</button></li>
                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;text-align: left;">WD #3</button></li>
                            <li style="padding-top: 10px;"><button class="btn btn-light btn-block" style="height:60px;font-weight: bold;text-align: left;">WD #4</button></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3 p-0">
                        <button class="  btn-block btnClick_Fixed-cost" id="btnClick1">
                            <span class="btnClick_Span1_Fixed-cost" id="spanClick1_text1">1</span>
                            <span class="btnClick_Span2_Fixed-cost" id="spanClick1_text2">1 ครั้งต่อเดือน</span>
                        </button>
                    </div>
                    <div class="col-3 p-0">
                        <button class="  btn-block btnClick_No_Fixed-cost" id="btnClick2">
                            <span class="btnClick_Span1_No_Fixed-cost" id="spanClick2_text1">2</span>
                            <span class="btnClick_Span2_No_Fixed-cost" id="spanClick2_text2">1 ครั้งต่อสัปดาห์</span>
                        </button>
                    </div>
                    <div class="col-3 p-0">
                        <button class="  btn-block btnClick_No_Fixed-cost" id="btnClick3">
                            <span class="btnClick_Span1_No_Fixed-cost" id="spanClick3_text1">3</span>
                            <span class="btnClick_Span2_No_Fixed-cost" id="spanClick3_text2">1 ครั้งต่อวัน</span>
                        </button>
                    </div>
                    <div class="col-3 p-0">
                        <button class="  btn-block btnClick_No_Fixed-cost" id="btnClick4">
                            <span class="btnClick_Span1_No_Fixed-cost" id="spanClick4_text1">4</span>
                            <span class="btnClick_Span2_No_Fixed-cost" id="spanClick4_text2">ต้นทุนต่อรอบ</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3 style="font-weight: bold;color:black;" id="textHeadChange">1 ครั้งต่อเดือน</h3>
                        <table id="table_main1" class="table table-bordered table-hover w-100">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th style="text-align: center;">ลำดับ</th>
                                    <th style="text-align: left;">ชื่อต้นทุน</th>
                                    <th style="text-align: center;">ต้นทุน(บาทต่อเดือน)</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td>ค่าเสื่อมราคา</td>
                                    <td>
                                        25,000
                                    </td>
                                    <td style="text-align: center;"><i class="far fa-edit"></i> <i class="fas fa-trash-alt" style="color:red;"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td style="text-align: center;"><button class="btn">ล้าง</button> | <button class="btn">เพิ่ม</button></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;font-weight:bold;color:black;" colspan="2">รวม</td>
                                    <td style="text-align: center;font-weight:bold;color:black;" colspan="2">25,000</td>
                                </tr>
                            </tbody>
                        </table>
                        <table id="table_main2" class="table table-bordered table-hover w-100" hidden>
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th style="text-align: center;">ลำดับ</th>
                                    <th style="text-align: left;">ชื่อต้นทุน</th>
                                    <th style="text-align: center;">ต้นทุน(บาทต่อเดือน)</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td>ค่าเสื่อมราคา</td>
                                    <td>
                                        25,000
                                    </td>
                                    <td style="text-align: center;"><i class="far fa-edit"></i> <i class="fas fa-trash-alt" style="color:red;"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td style="text-align: center;"><button class="btn">ล้าง</button> | <button class="btn">เพิ่ม</button></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;font-weight:bold;color:black;" colspan="2">รวม</td>
                                    <td style="text-align: center;font-weight:bold;color:black;" colspan="2">25,000 บาทต่อสัปดาห์</td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;font-weight:bold;color:black;" colspan="2">จำนวนรอบเฉลี่ย</td>
                                    <td style="text-align: center;font-weight:bold;color:black;" colspan="2">30 รอบ</td>
                                </tr>
                            </tbody>
                        </table>
                        <table id="table_main3" class="table table-bordered table-hover w-100" hidden>
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th style="text-align: center;">ลำดับ</th>
                                    <th style="text-align: left;">ชื่อต้นทุน</th>
                                    <th style="text-align: center;">ต้นทุน(บาทต่อเดือน)</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td>ค่าเสื่อมราคา</td>
                                    <td>
                                        25,000
                                    </td>
                                    <td style="text-align: center;"><i class="far fa-edit"></i> <i class="fas fa-trash-alt" style="color:red;"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td style="text-align: center;"><button class="btn">ล้าง</button> | <button class="btn">เพิ่ม</button></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;font-weight:bold;color:black;" colspan="2">รวม</td>
                                    <td style="text-align: center;font-weight:bold;color:black;" colspan="2">25,000 บาทต่อวัน</td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;font-weight:bold;color:black;" colspan="2">จำนวนรอบเฉลี่ย</td>
                                    <td style="text-align: center;font-weight:bold;color:black;" colspan="2">4 รอบ</td>
                                </tr>
                            </tbody>
                        </table>
                        <table id="table_main4" class="table table-bordered table-hover w-100" hidden>
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th style="text-align: center;">ลำดับ</th>
                                    <th style="text-align: left;">ชื่อต้นทุน</th>
                                    <th style="text-align: center;">โปรแกรม1</th>
                                    <th style="text-align: center;">โปรแกรม2</th>
                                    <th style="text-align: center;">โปรแกรม3</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td>ค่าไฟ</td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        15
                                    </td>
                                    <td>
                                        20
                                    </td>
                                    <td style="text-align: center;"><i class="far fa-edit"></i> <i class="fas fa-trash-alt" style="color:red;"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td style="text-align: center;"><button class="btn">ล้าง</button> | <button class="btn">เพิ่ม</button></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight:bold;color:black;"  colspan="6"><button class="btn btn-primary">+ เพิ่มคอลัมน์</button></td>

                                </tr>
                                <tr>
                                    <td style="text-align: right;font-weight:bold;color:black;"  colspan="2">รวม</td>
                                    <td style="text-align: center;font-weight:bold;color:black;" colspan="2">300</td>
                                    <td style="text-align: center;font-weight:bold;color:black;" colspan="2">410 บาทต่อวัน</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
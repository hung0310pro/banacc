@extends('layouts.headerhome')
@section('content')
    <?php
    $contact = App\ContactModel::all();
    $phone = "";
    foreach ($usersAdmin as $value){
        $phone = $value->phone;
    }
    ?>
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">
                            <span class="mdi mdi-shopping-cart"></span> <strong>HotMail Random</strong>
                        </div>
                        <div class="panel-body">
                            <form>
                                @csrf
                                <div class="xs-pt-10 form-group">
                                    <select class="form-control" name="id_catalog" id="id_catalog">
                                        <?php foreach ($catalogChild as $value) : ?>
                                        <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <input type="hidden" id="giaacc" name="giaacc" value="0">
                                <input type="hidden" id="totalmoney" value="{{ Auth::user()->total_money }}">
                                <div class="form-group xs-pt-10">
                                    <input name="number" id="numberacc" type="number" placeholder="Nhập số lượng"
                                           class="form-control" value="1">
                                    <center>
                                        <label class="control-label">Tổng thanh toán: <font color="red"><b
                                                        id="tongthanhtoan">0</b></font> VND</label>
                                    </center>
                                </div>

                                <div class="row xs-pt-12">
                                    <div class="col-xs-12" style="text-align: center">
                                        <button type="button" id="muangay" class="btn btn-success">Mua Ngay</button>
                                        <button type="button" class="btn btn-warning">Xem Lịch Sử Mua</button>
                                    </div>
                                </div>
                            </form>
                            <?php foreach ($catalogChild as $value) : ?>
                            <input type="hidden" value="<?= $value->price ?>" id="catalog<?= $value->id ?>">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">
                            <span class="mdi mdi-shopping-cart"></span> <strong>HotMail Reg Theo Yêu Cầu</strong>
                        </div>
                        <div class="panel-body">
                            <center><img src="{{ url('img/avatar.png') }}" alt="Avatar"></center>
                            <br>
                            <center><span style="font-size: 18px;">HotMail Reg Theo Yêu Cầu Vui Lòng Liên Hệ Qua Facebook Hoặc Zalo Qua SĐT <font
                                            color="red"><?= $phone ?> </font>Hộ Mình Nhé!</span></center>
                            <br>
                            <center>
                                <?php
                                $linkFace = "";
                                $linkZalo = "";
                                ?>

                                <?php foreach ($contact as $value) : ?>
                                <?php
                                    $linkFace = $value->linkfacebook;
                                    $linkZalo = $value->linkzalo;
                                    ?>
                                 <?php endforeach; ?>

                                <a class="btn btn-primary" href="<?= $linkFace ?>">
                                    <span class="mdi mdi-facebook-box"></span><b>
                                        Liên Hệ Facebook </b></a>
                                <a class="btn btn-primary" href="<?= $linkZalo ?>">
                                    <i class="fa fa-headset"></i><b>
                                        Liên Hệ Zalo </b></a>

                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">
                            <span class="mdi mdi-money-box"></span> <strong>Bảng Giá HotMail</strong>
                        </div>
                        <div class="panel-body">
                            <div class="block-content">
                                <table class="table table-borderless table-hover">
                                    <tbody>
                                    <?php foreach ($priceMailModel as $value) : ?>
                                    <tr>
                                        <td>
                                            <strong><?= $value->name ?> = <font color="red"><?= $value->price ?></font>
                                                /1 Mail</strong>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">
                            <span class="mdi mdi-settings"></span> <strong>Hướng Dẫn Sử Dụng</strong>
                        </div>
                        <div class="panel-body">
                            <div class="block-content block-content-full">
                                <table class="table table-borderless table-hover">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong><font color="red">1.</font> HotMail ramdum sẽ được thay mới sau 24h
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><font color="red">2.</font> Hotmail bên mình bao trâu live 3 đến 15
                                                ngày</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><font color="red">3.</font> Hotmail đã bật pop3 cho ae đọc hòm thư
                                                ẩn</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><font color="red">4.</font> Hotmail đã fix lỗi không vào được hòm
                                                thư</strong>
                                        </td>
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
    <script type="text/javascript">
        $(document).ready(function () {
            var id = $("#id_catalog").val();
            var soluong = $("#numberacc").val();
            var price = parseInt($("#catalog" + id).val());
            var totalPrice = price * soluong;
            $("#giaacc").val(totalPrice);
            $("#tongthanhtoan").html(totalPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
        });

        $(document).on("change", "#id_catalog", function () {
            var id = $("#id_catalog").val();
            var price = parseInt($("#catalog" + id).val());
            var soluong = $("#numberacc").val();
            var totalPrice = price * soluong;
            $("#giaacc").val(totalPrice);
            $("#tongthanhtoan").html(totalPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
        });

        $(document).on("keyup", "#numberacc", function () {
            var numberacc = $("#numberacc").val();
            var id = $("#id_catalog").val();
            var price = parseInt($("#catalog" + id).val());
            var totalPrice = price * numberacc;
            $("#giaacc").val(totalPrice);
            $("#tongthanhtoan").html(totalPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
        });

        $(document).on("click", "#muangay", function () {
            var numberacc = $("#numberacc").val();
            var price = $("#giaacc").val();
            var idCatalog = $("#id_catalog").val();
            var totalmoney = $("#totalmoney").val();
            var check = numberacc % 1;
            if (numberacc < 1 || numberacc == "" || numberacc == null || check != 0) {
                alert('Số lượng nhập không hợp lệ');
                $("#numberacc").val(1);
            } else if (price < 1 || price == "" || price == null) {
                alert('Giá mua không hợp lệ');
            } else if (totalmoney - price < 0) {
                alert('Số tiền của bạn không đủ');
            } else {
                $("muangay").attr('disabled', 'disabled');
                var _token = $("input[name='_token']").val();
                var url = "{!! route('homeacc.store') !!}";
                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: "JSON",
                    data: {
                        idCatalog: idCatalog,
                        price: price,
                        numberacc: numberacc,
                        _token: _token,
                    },
                    success: function (data) {
                        if (data == 2) {
                            alert('Số lượng nhập không đúng hoặc bạn không đủ tiền');
                            window.setTimeout(function () {
                                location.reload()
                            }, 100);
                        } else if (data == 3) {
                            alert('Số lượng tài khoản không đủ');
                            window.setTimeout(function () {
                                location.reload()
                            }, 100);
                        } else if (data == 1) {
                            alert('Thanh toán thành công');
                            window.location.replace('{!! route('listaccount') !!}');
                        }
                    }
                });
            }
        });
    </script>
@endsection
@extends('layouts.footer')
<?php
$sql_donhang = "SELECT * FROM don_hang";
$query_donhang = mysqli_query($conn, $sql_donhang);

$sql_blsp = "SELECT * FROM bl_sp";
$query_blsp = mysqli_query($conn, $sql_blsp);

$sql_nhanvien = "SELECT * FROM thanh_vien WHERE level=1 OR level=2";
$query_nhanvien = mysqli_query($conn, $sql_nhanvien);

$sql_thanhvien = "SELECT * FROM thanh_vien WHERE level=0";
$query_thanhvien = mysqli_query($conn, $sql_thanhvien);
?>


<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Trang chủ quản trị</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo mysqli_num_rows($query_donhang);?></div>
                    <div class="text-muted">Đơn hàng</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo mysqli_num_rows($query_blsp);?></div>
                    <div class="text-muted">Bình luận</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo mysqli_num_rows($query_nhanvien);?></div>
                    <div class="text-muted">Nhân viên</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo mysqli_num_rows($query_thanhvien);?></div>
                    <div class="text-muted">Người đăng ký</div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Giới thiệu</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <p>Trung tâm thương mại TNT STUDIO được thành lập vào ngày 29/11/1997, hoạt động trong lĩnh vực mua hàng trực tuyến quan cổng thông tin điện tử tntstudio.com.vn, đặc biệt là trung tâm thương mại đầu tiên tại Việt Nam với trụ sở chính đặt tại Hà Nội.<br/>
                        - Cơ sở 1: Số nhà B8A Ngõ 18 Võ Văn Dũng, Hoàng Cầu, Đống Đa, Hà Nội (Đầu Ngõ 18 đi vào 10m rẽ phải 5m).<br/>
                        - Cơ sở 2: Số 25 Ngõ 178/71 Tây Sơn, Đống Đa, Hà Nội. (Ngõ 178 đối diện với Trường ĐH Công Đoàn).</p>
                    <br/>
                    <p>Đây là hệ thống quản trị của website Thương mại điện tử do Trung tâm thương mại TNT STUDIO xây dựng và phát triển, dành cho mọi người dân Việt Nam (Nghiêm cấm sao lưu hay chia sẻ dưới mọi hình thức).</p>
                    <br/>
                    <p>Hệ thống quản trị này có các chức năng quản lý sau: <br/>
                        - Quản lý Thành viên
                        <br/>
                        - Quản lý Nhân viên
                        <br/>
                        - Quản lý Danh mục sản phẩm
                        <br/>
                        - Quản lý Danh mục con sản phẩm
                        <br/>
                        - Quản lý Sản phẩm
                        <br/>
                        - Quản lý Đơn hàng
                        <br/>
                        - Quản lý Bình luận
                        <br/>
                        - Quản lý Quảng cáo
                        <br/>

                        - ...</p>
                    <br/>
                    <p>Hệ thống đang trong quá trình hoàn thiện bởi các Chuyên gia của Trung tâm thương mại TNT STUDIO. Hệ thống vẫn tiếp tục được nâng cấp và cải tiến để mọi khách hàng và nhân viên được sử dụng những chức năng tốt nhất của hệ thống.</p>
                    <br/>
                    <p>
                        <b>Trung tâm thương mại TNT STUDIO!</b></p>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
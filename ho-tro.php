<div id="main-hotro">
    <div id="danh-muc" class="col-lg-3 col-md-3 col-ms-3 col-3">
        <ul>
            <li><a href="#" title="">Giới thiệu công ty</a>
                <hr>
            </li>
            <li><a href="#" title="">Câu hỏi thường gặp</a>
                <hr>
            </li>
            <li><a href="#" title="">Các chính sách</a>
                <hr>
            </li>
            <li><a href="#" title="">Hệ thống bảo hành</a>
                <hr>
            </li>
            <li><a href="#" title="">Tin tuyển dụng</a>
                <hr>
            </li>
            <li><a href="#" title="">Tin khuyến mãi</a>
                <hr>
            </li>
            <li><a href="#" title="">Hướng dẫn mua online</a>
                <hr>
            </li>
            <li><a href="#" title="">Hướng dẫn mua trả góp</a>
                <hr>
            </li>
            <li><a href="#" title="">Hệ thống cửa hàng</a>
                <hr>
            </li>
            <li><a href="#" title="">Dịch vụ Ship hàng</a>
                <hr>
            </li>
            <li><a href="#" title="">Đổi trả</a>
                <hr>
            </li>
            <li><a href="#" title="">Xả hàng</a>
                <hr>
            </li>
            <li><a href="#" title="">Tư vấn</a>
                <hr>
            </li>
        </ul>
    </div>
    <div id="thong-tin" class="col-lg-9 col-md-9 col-ms-9 col-9">
        <?php
        if (isset($_GET['ho-tro'])){
            switch ($_GET['ho-tro']){
                case 'gioi_thieu_cong_ty':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'cau_hoi_thuong_gap':
                    include_once 'cau_hoi_thuong_gap.php';
                    break;
                case 'chinh_sach_tnt_shop':
                    include_once 'chinh_sach_tnt_shop.php';
                    break;
                case 'he_thong_bao_hanh':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'tin_tuyen_dung':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'tin_khuyen_mai':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'huong_dan_mua_online':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'huong_dan_mua_tra_gop':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'he_thong_cua_hang':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'dich_vu_ship_hang':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'doi_tra':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
                case 'xa_hang':
                    include_once 'gioi_thieu_cong_ty.php';
                    break;
            }
        }else{
            include_once 'gioi_thieu.php';
        }
        ?>
    </div>
</div>

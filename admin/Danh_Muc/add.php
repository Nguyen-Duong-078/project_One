<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <!-- <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> -->
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <h3>Trang Quản Trị</h3>
            <form action="index.php?act=out" class="rows">
                <a class="app-nav__item" href="../index.php">
                    Thoát <i class='bx bx-log-out bx-rotate-180'></i>
                </a>
            </form>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../image/Shipper_CPS3.77d4065.png" width="50px" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b>Nguyễn Văn Dương</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="index.php">
                    <i class='app-menu__icon bx bxs-home'></i>
                    <span class="app-menu__label">Trang Chủ</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item active" href="index.php?act=add_flight">
                    <i class='app-menu__icon bx bxs-rocket'></i>
                    <span class="app-menu__label">Chuyến Bay</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_sp">
                    <i class='app-menu__icon bx bx-purchase-tag-alt'></i>
                    <span class="app-menu__label">Sản phẩm</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=list_client">
                    <i class='app-menu__icon bx bx-user-voice'></i>
                    <span class="app-menu__label">Khách hàng</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=statistical">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Thống kê</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=commnet">
                    <i class='app-menu__icon bx bx bx-chat'></i>
                    <span class="app-menu__label">Comment</span>
                </a>
            </li>
        </ul>
    </aside>

    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <form action="index.php?act=add_flight" method="post">
                    <div class="tile">
                        <h3 class="tile-title">Thêm danh mục</h3>
                        <div class="tile-body row">
                            <div class="form-group col-md-3">
                                <label class="control-label">ID Chuyến Bay</label>
                                <input class="form-control" type="number" placeholder="Tự tăng" name="id_flight" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Số Chuyến Bay</label>
                                <input class="form-control" type="text" name="number_flight">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Khởi hành</label>
                                <input class="form-control" type="text" name="start">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Điểm đến</label>
                                <input class="form-control" type="text" name="end">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Giờ khởi hành</label>
                                <input class="form-control" type="time" name="time_start">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Thời gian đến</label>
                                <input class="form-control" type="time" name="time_end">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Giá chuyến bay</label>
                                <input class="form-control" type="text" name="price">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Thời gian bay</label>
                                <input class="form-control" type="text" name="time_flight">
                            </div>
                        </div>
                        <input class="btn btn-save" type="submit" value="Thêm Mới" name="themmoi"></input>
                        <input class="btn btn-cancel" type="reset" value="Nhập lại">

                        <a href="index.php?act=list_flight"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
                        <div class="thongbao btn">
                            <?php
                            if (isset($thongbao) && ($thongbao != ""))
                                echo $thongbao;
                            ?>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </main>

</body>

</html>
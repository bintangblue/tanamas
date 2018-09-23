<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<?php include 'part/head.php';?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <?php include 'part/header.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php include 'part/menu.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">                
                <div class="col-12 text-center">
                    <h3>HARGA EMAS</h3>                        
                </div>
                <div class="row bg-orange text-center pd-menu1">
                    <div class="col"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/pay.png"> <br>
                    Pay</a></div>
                    <div class="col"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/withdraw.png"> <br>
                    Withdraw</a></div>
                    <div class="col"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/add_file.png"> <br>
                    Add</a></div>
                    <div class="col"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/history.png"> <br>
                    History</a></div>
                </div>
                <div class="col-12">
                    <div class="card text-center card-padding">
                        <div class="row bg-orange">
                            <div class="col">                                
                                Emas Saya
                            </div>
                            <div class="col">                                
                                Senilai
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">                                
                                2.000 gr
                            </div>
                            <div class="col">                                
                                Rp. 2.000.000
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center pd-bottom">
                    <div class="col customizer-body">
                        <ul class="nav customizer-tab  bg-orange b-radius" role="tablist">
                            <li class="nav-item col-6">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab
                                               " aria-controls="pills-home" aria-selected="true">
                                    HARGA JUAL
                                </a>
                            </li>
                            <li class="nav-item col-6">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab
                                               " aria-controls="chat" aria-selected="false">
                                    HARGA BELI
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Tab 1 -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                HARGA JUAL <br> <h3>Rp. 480.000</h3>
                            </div>
                            <!-- End Tab 1 -->
                            <!-- Tab 2 -->
                            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                                HARGA BELI <br> <h3>Rp. 500.000</h3>
                            </div>
                            <!-- End Tab 2 -->
                        </div>
                    </div>
                </div>

                <div class="row bg-orange text-center">
                    <div class="col pd-menu2"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/zakat.png"> <br>E-Zakat</a></div>
                    <div class="col pd-menu2"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/maspay.png"> <br>MasPay</a></div>
                </div>
                <div class="row bg-orange text-center">
                    <div class="col pd-menu2"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/shop.png"> <br>Gerai</a></div>
                    <div class="col pd-menu2"><a href="#">
                        <img class="icon-menu" src="assets/images/icon/info.png"> <br>Panduan</a></div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include 'part/java.php'; ?>
</body>

</html>
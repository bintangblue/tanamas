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
                <div class="row">
                    <div class="col text-center">
                        <h3>HARGA EMAS</h3>                        
                    </div>
                </div>
                <div class="row bg-orange text-center">
                    <div class="col">Pay</div>
                    <div class="col">Withdraw</div>
                    <div class="col">Add</div>
                    <div class="col">History</div>
                </div>
                <div class="col-12">
                    <div class="card text-center">
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

                <div class="row text-center">
                    <div class="col customizer-body">
                        <ul class="nav customizer-tab  bg-orange" role="tablist">
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
                    <div class="col">E-Zakat</div>
                    <div class="col">MasPay</div>
                </div>
                <div class="row bg-orange text-center">
                    <div class="col">Gerai</div>
                    <div class="col">Panduan</div>
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
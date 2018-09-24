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
                <div class="col-12 text-right">
                    <a href="form_jual.php" class="btn btn-warning">Jual</a>
                </div>
                <div class="row pd-bottom">
                    <div class="col text-center">
                        <h6>EMAS SAYA</h6>
                        <h5 class="b-bottom">2355 gram</h5>                        
                    </div>
                </div>
                <div class="col-12 bg-orange">
                    <h5>History Transaksi</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                             <?php  
                            for($i=0;$i<=10;$i++){
                            ?>
                            <tr>
                                <td><img src="assets/images/icon/sell.png"></td>
                                <td>Jual<br>13/01/2012</td>
                                <td class="text-right">2442 gr <br>Rp. 454.224</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
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
                    <a href="form_beli.php" class="btn btn-warning">Beli</a>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h4>EMAS SAYA</h4><br>
                        <h4>2355 gram</h4>                        
                    </div>
                </div>
                <div class="col-12">
                    <h5>History Transaksi</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                             <?php  
                            for($i=0;$i<=10;$i++){
                            ?>
                            <tr>
                                <td>image</td>
                                <td>Beli<br>13/01/2012</td>
                                <td>2442 gr <br>Rp. 454.224</td>
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
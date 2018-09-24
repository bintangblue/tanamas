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
                <div class="col-12 b-bottom pd-bottom">
                    <h6>Banyak emas yang dijual</h6>
                </div>
                <div class="row col-12 text-center pd-bottom">
                    <div class="col-6"><h6>Gram</h6></div>
                    <div class="col-6"><input type="number" class="form-control" value="" id="n_rp" onkeyup="jual(this);"></div>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn waves-effect waves-light btn-warning bg-orange" data-toggle="modal" data-target="#modal-jual">JUAL EMAS</button>
                    <div class="modal fade" id="modal-jual">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss='modal'>&times;</button>
                                </div>
                                <div class="modal-body text-left">
                                    Anda ingin menjual <label id="gr"></label> gram emas yang bernilai <label id="rp"></label> ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="close" data-dismiss='modal'>JUAL</button>
                                </div>
                            </div>                                    
                        </div>                                
                    </div>
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
    <script type="text/javascript">
        var s_gram = 55750;
        function jual(elem){
          var nominal = $('#rp');
          var gr = $('#gr');
          var gram = elem.value;
          var hasil   = gram * s_gram;
          nominal.html('Rp. ' + hasil);
          gr.html(gram);
          $('#type').val('gram');
          $('#value').val(gram);
        }
    </script>
</body>

</html>
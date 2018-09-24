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
                <div class="row pd-bottom">
                    <div class="col text-center">
                        <h6>EMAS SAYA</h6>
                        <h5 class="b-bottom">2355 gram</h5>                        
                    </div>
                </div>
                <div class="row text-center pd-bottom">
                    <div class="col customizer-body">
                        <ul class="nav customizer-tab  bg-orange b-radius" role="tablist">
                            <li class="nav-item col-6">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab
                                               " aria-controls="pills-home" aria-selected="true">
                                    RUPIAH
                                </a>
                            </li>
                            <li class="nav-item col-6">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab
                                               " aria-controls="chat" aria-selected="false">
                                    GRAM
                                </a>
                            </li>
                        </ul>
                        <div class="text-center pd-top">
                            <h6>PILIH NOMINAL PEMBELIAN EMAS</h6>
                            <h7 id="nominal"></h7>
                        </div>
                        <div class="tab-content pd-top" id="pills-tabContent">
                            <!-- Tab 1 -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariRupiah(100000)">100 RB</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariRupiah(250000)">250 RB</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariRupiah(500000)">500 RB</button>
                                </div>
                                <div class="row button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariRupiah(750000)">750 RB</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariRupiah(1000000)">1 JUTA</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning col"  data-toggle='modal' data-target="#lain-rp">LAINNYA</button>
                                    <div class="modal fade" id="lain-rp">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss='modal'>&times;</button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    Masukan Nominal
                                                    <input type="number" class="form-control" value="" id="n_rp" onkeyup="inputDariRupiah(this)">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="close" data-dismiss='modal'>Pilih</button>
                                                </div>
                                            </div>                                    
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab 1 -->
                            <!-- Tab 2 -->
                            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row button-group">
                                        <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariGram(1)">1 GRAM</button>
                                        <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariGram(5)">5 GRAM</button>
                                        <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariGram(10)">10 GRAM</button>
                                    </div>
                                    <div class="row button-group">
                                        <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariGram(25)">25 GRAM</button>
                                        <button type="button" class="btn waves-effect waves-light btn-outline-warning col" onclick="dariGram(50)">50 GRAM</button>
                                        <button type="button" class="btn waves-effect waves-light btn-outline-warning col"  data-toggle='modal' data-target="#lain-gr">LAINNYA</button>
                                        <div class="modal fade" id="lain-gr">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss='modal'>&times;</button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        Masukan Jumlah
                                                        <input type="number" class="form-control" value="" id="n_gr" onkeyup="inputDariGram(this)">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="close" data-dismiss='modal'>Close</button>
                                                    </div>
                                                </div>                                    
                                            </div>                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab 2 -->
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn waves-effect waves-light btn-warning bg-orange" data-toggle='modal' data-target="#modal-bank">BELI EMAS</button>
                            <div class="modal fade" id="modal-bank">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss='modal'>&times;</button>
                                        </div>
                                        <div class="modal-body text-left">
                                            Pembayaran Via Bank
                                            <div class="row b-bottom">
                                                <div class="col-2"><img src="assets/images/bank/bca.jpg" class="bank-img"></div>
                                                <div class="col">no rek. xxx-xxx-xxx <br>a.n PT Tanamas Bersama Investindo</div>
                                                <div class="col-1"><input type="radio"id="bank" name="bank" value="bca"></div>
                                            </div>
                                            <div class="row b-bottom">
                                                <div class="col-2"><img src="assets/images/bank/bni.jpg" class="bank-img"></div>
                                                <div class="col">no rek. xxx-xxx-xxx <br>a.n PT Tanamas Bersama Investindo</div>
                                                <div class="col-1"><input type="radio"id="bank" name="bank" value="bni"></div>
                                            </div>
                                            <div class="row b-bottom">
                                                <div class="col-2"><img src="assets/images/bank/bri.jpg" class="bank-img"></div>
                                                <div class="col">no rek. xxx-xxx-xxx <br>a.n PT Tanamas Bersama Investindo</div>
                                                <div class="col-1"><input type="radio"id="bank" name="bank" value="bri"></div>
                                            </div>
                                            <div class="row b-bottom">
                                                <div class="col-2"><img src="assets/images/bank/mandiri.jpg" class="bank-img"></div>
                                                <div class="col">no rek. xxx-xxx-xxx <br>a.n PT Tanamas Bersama Investindo</div>
                                                <div class="col-1"><input type="radio"id="bank" name="bank" value="mandiri"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="close" data-dismiss='modal'>Close</button>
                                        </div>
                                    </div>                                    
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
    <script>
    var s_gram = 55750;
    function dariRupiah(rupiah){
      var nominal = $('#nominal');
      var hasil   = rupiah / s_gram;
      nominal.html((hasil.toFixed(2)) + ' gr');

      $('#type').val('rupiah');
      $('#value').val(rupiah);
    }
    function dariGram(gram){
      var nominal = $('#nominal');
      var hasil   = gram * s_gram;
      nominal.html('Rp. ' + hasil);

      $('#type').val('gram');
      $('#value').val(gram);
    }
    function inputDariRupiah(elem){
      var rupiah  = elem.value;
      var nominal = $('#nominal');
      var hasil   = rupiah / s_gram;
      nominal.html((hasil.toFixed(2)) + ' gr');
      $('#pilih_dari_rupiah').click(function(){
        $('#nominal').html((hasil.toFixed(2)) + ' gr');
        elem.value = 0;
        nominal.html('');

        $('#type').val('rupiah');
        $('#value').val(rupiah);
      });
    }
    function inputDariGram(elem){
      var gram    = elem.value;
      var nominal = $('#nominal');
      var hasil   = gram * s_gram;
      nominal.html('Rp. '+(hasil.toFixed(2)));
      $('#pilih_dari_gram').click(function(){
        $('#nominal').html('Rp. ' + hasil);
        elem.value = 0;
        nominal.html('');

        $('#type').val('rupiah');
        $('#value').val(rupiah);
      });
    }
    $(document).ready(function(){
      $('.tabs').tabs();
      $('.modal').modal();
    });
  </script>
</body>

</html>
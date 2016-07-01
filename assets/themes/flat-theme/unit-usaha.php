<section id="unit-usaha">
  <div id="before-map">
    <h2>Unit Usaha</h2>
    <div class="col-sm-12" style="text-align:center;">
        <p>
          <span><i class="fa fa-circle fa-1x" style="color:#00e13c;"></i>&nbsp;&nbsp;PTPN I &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
          <span><i class="fa fa-circle fa-1x" style="color:#00e1d9;"></i>&nbsp;&nbsp;Kerjasama Operasional &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
          <span><i class="fa fa-circle fa-1x" style="color:#707070;"></i>&nbsp;&nbsp;Anak Perusahaan </span>
        </p>
    </div>
  </div>
  <div id="map-ptpn1">
      <?php
      $base = site_url();
      $n1 = $base ."/assets/themes/flat-theme/assets/images/map/kebun_sendiri.png";
      $pks = $base ."/assets/themes/flat-theme/assets/images/map/pks.png";
      $kso = $base ."/assets/themes/flat-theme/assets/images/map/kso.png";
      $ap = $base ."/assets/themes/flat-theme/assets/images/map/anak_perusahaan.png";
      echo do_shortcode('[MultipleMarkerMap
      id="gmap"
      z="7"
      lat="5.3770973"
      lon="97.8773395"
      marker="4.47578,97.96410,Kebun Baru,'.$n1.'|4.92894,97.35181,Kebun Cot Girek,'.$n1.'|4.16109,97.99480,Kebun Pulo Tiga,'.$n1.'|4.87381,97.59297,Kebun Julok Rayeuk Utara,'.$n1.'|4.39802,98.05631,Kebun Lama,'.$n1.'|4.52241,97.61142,Kebun Tualang Sawit,'.$n1.'|4.94894,97.37181,PKS Cot Girek,'.$pks.'|4.18109,98.01480,PKS Pulo Tiga,'.$pks.'|4.3578429,98.0915387,PKS Tg. Seumantoh,'.$pks.'|5.0063889,97.59416,Kebun Julok Rayeuk Selatan,'.$kso.'|4.7469303,97.77932,Kebun Karang Inong,'.$kso.'|2.867372,97.75350,Kebun Krung Luas,'.$ap.'|4.1248406,96.492979,Kebun Ujung Lamie,'.$ap.'|4.957222,95.59083,Kebun Batee Puteh,'.$ap.'"
      w="100%"
      h="530"
       ]');
      ?>
    </div>
</section>

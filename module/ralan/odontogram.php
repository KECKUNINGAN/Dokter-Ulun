<?php

if(isset($_GET['no_rkm_medis']) && $_GET['no_rkm_medis'] !=='') {
  $no_rkm_medis = $_GET['no_rkm_medis'];
} else if(isset($_GET['no_rawat']) && $_GET['no_rawat'] !=='') {
  $get_no_rkm_medis = fetch_assoc(query("SELECT no_rkm_medis FROM reg_periksa WHERE no_rawat = '{$_GET['no_rawat']}'"));
  $no_rkm_medis = $get_no_rkm_medis['no_rkm_medis'];
} else {
   //redirect("{$_SERVER['PHP_SELF']}?action=view&no_rawat={$no_rawat}");
}
?>

<?php
  $action = isset($_GET['action'])?$_GET['action']:null;

  if($do == "delete_odontogram"){
        $hapus = "DELETE FROM pemeriksaan_odontogram WHERE no_rawat='{$_REQUEST['no_rawat']}' AND gg_xx = '{$_REQUEST['gg_xx']}'";
        $hasil = query($hapus);
  }

  if (isset($_POST['ok_odont'])) {
        if (($_POST['ok_odont'] <> "")) {
              $insert = query("INSERT INTO pemeriksaan_odontogram VALUES ('{$no_rkm_medis}','{$_GET['no_rawat']}',CURRENT_DATE(),CURRENT_TIME(),'{$_POST['gg_xx']}','{$_POST['value']}','{$_POST['catatan']}')");
        };
  };

?>
<div class="table-odontogram">
<table style="margin: 0 auto; width: 450px; text-align: center;">
   <tr>
   <td>8</td><td>7</td><td>6</td><td>5</td><td>4</td><td>3</td><td>2</td><td>1</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
  </tr>
  <tr>
  <td style="height: 25px; width: 25px;" <?php $gg_18 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_18' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_18['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_18['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_17 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_17' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_17['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_17['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_16 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_16' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_16['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_16['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_15 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_15' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_15['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_15['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_14 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_14' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_14['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_14['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_13 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_13' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_13['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_13['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_12 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_12' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_12['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_12['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_11 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_11' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_11['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_11['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_21 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_21' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_21['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_21['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_22 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_22' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_22['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_22['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_23 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_23' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_23['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_23['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_24 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_24' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_24['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_24['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_25 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_25' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_25['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_25['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_26 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_26' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_26['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_26['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_27 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_27' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_27['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_27['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_28 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_28' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_28['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_28['value'].'"'; }; ?>></td>
  </tr>
  <tr>
    <td style="height: 5px;"> </td>
  </tr>
  <tr>
  <td> </td>
  <td> </td>
  <td> </td>
  <td style="height: 25px; width: 25px;" <?php $gg_55 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_55' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_55['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_55['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_54 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_54' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_54['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_54['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_53 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_53' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_53['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_53['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_52 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_52' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_52['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_52['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_51 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_51' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_51['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_51['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_61 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_61' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_61['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_61['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_62 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_62' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_62['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_62['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_63 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_63' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_63['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_63['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_64 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_64' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_64['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_64['value'].'"'; }; ?>></td>
  <td style="height: 25px; width: 25px;" <?php $gg_65 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_65' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_65['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_65['value'].'"'; }; ?>></td>
    <td> </td>
    <td> </td>
    <td> </td>

    </tr>
  <tr>
    <td> </td><td> </td><td> </td><td>V</td><td>IV</td><td>III</td><td>II</td><td>I</td><td>I</td><td>II</td><td>III</td><td>IV</td><td>V</td><td> </td><td> </td><td> </td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td style="height: 25px; width: 25px;" <?php $gg_85 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_85' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_85['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_85['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_84 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_84' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_84['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_84['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_83 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_83' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_83['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_83['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_82 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_82' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_82['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_82['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_81 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_81' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_81['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_81['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_71 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_71' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_71['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_71['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_72 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_72' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_72['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_72['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_73 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_73' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_73['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_73['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_74 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_74' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_74['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_74['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_75 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_75' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_75['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_75['value'].'"'; }; ?>></td>
    <td> </td>
    <td> </td>
    <td> </td>
    </tr>
    <tr>
      <td style="height: 5px;"> </td>
    </tr>
    <tr>
    <td style="height: 25px; width: 25px;" <?php $gg_48 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_48' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_48['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_48['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_47 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_47' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_47['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_47['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_46 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_46' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_46['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_46['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_45 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_45' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_45['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_45['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_44 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_44' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_44['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_44['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_43 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_43' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_43['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_43['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_42 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_42' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_42['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_42['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_41 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_41' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_41['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_41['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_31 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_31' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_31['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_31['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_32 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_32' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_32['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_32['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_33 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_33' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_33['value'] =='') { echo 'class="gigi_anterior"'; } else { echo 'bgcolor="'.$gg_33['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_34 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_34' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_34['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_34['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_35 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_35' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_35['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_35['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_36 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_36' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_36['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_36['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_37 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_37' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_37['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_37['value'].'"'; }; ?>></td>
    <td style="height: 25px; width: 25px;" <?php $gg_38 = fetch_assoc(query("SELECT value FROM pemeriksaan_odontogram WHERE gg_xx = 'gg_38' AND no_rkm_medis = '{$no_rkm_medis}' ORDER BY tgl_perawatan ASC LIMIT 1")); if($gg_38['value'] =='') { echo 'class="gigi_posterior"'; } else { echo 'bgcolor="'.$gg_38['value'].'"'; }; ?>></td>
    </tr>

  <tr>
    <td>8</td><td>7</td><td>6</td><td>5</td><td>4</td><td>3</td><td>2</td><td>1</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
  </tr>
</table>
<br/><br/>

<table style="margin: 0 auto; width: 450px;">
  <tr>
    <td style="height: 20px; width: 20px; background-color: #ffffff; border: 1px solid #000000; "></td>
    <td> = Normal</td>
    <td style="height: 20px; width: 20px; background-color: #FF0000; border: 1px solid #000000; "></td>
    <td> = Dicabut</td>
    <td style="height: 20px; width: 20px; background-color: #000000; border: 1px solid #000000; "></td>
    <td> = Hilang</td>
    <td style="height: 20px; width: 20px; background-color: #FFFF00; border: 1px solid #000000; "></td>
    <td> = Karies</td>
  </tr>
  <tr>
    <td style="height: 5px;"> </td>
  </tr>
  <tr>
    <td style="height: 20px; width: 20px; background-color: #FF6600; border: 1px solid #000000; "></td>
    <td> = Sisa Akar</td>
    <td style="height: 20px; width: 20px; background-color: #0000FF; border: 1px solid #000000; "></td>
    <td> = Tumpatan</td>
    <td style="height: 20px; width: 20px; background-color: #FF00FF; border: 1px solid #000000; "></td>
    <td> = Gigi Tiruan</td>
    <td style="height: 20px; width: 20px; background-color: #339966; border: 1px solid #000000; "></td>
    <td> = Goyang</td>
  </tr>
</table>
</div>
<br><br>
<?php if(isset($_GET['no_rawat']) && $_GET['no_rawat'] !=='') { ?>
<form method="POST" action="">
  <div class="row clearfix">
      <div class="col-md-12">
          <p>
              <b>Pemeriksaan</b>
          </p>
          <select name="gg_xx" class="form-control show-tick" data-size="4" data-live-search="true">
            <option value="gg_18">Gigi 18</option>
            <option value="gg_17">Gigi 17</option>
            <option value="gg_16">Gigi 16</option>
            <option value="gg_15">Gigi 15</option>
            <option value="gg_14">Gigi 14</option>
            <option value="gg_13">Gigi 13</option>
            <option value="gg_12">Gigi 12</option>
            <option value="gg_11">Gigi 11</option>
            <option value="gg_21">Gigi 21</option>
            <option value="gg_22">Gigi 22</option>
            <option value="gg_23">Gigi 23</option>
            <option value="gg_24">Gigi 24</option>
            <option value="gg_25">Gigi 25</option>
            <option value="gg_26">Gigi 26</option>
            <option value="gg_27">Gigi 27</option>
            <option value="gg_28">Gigi 28</option>
            <option value="gg_38">Gigi 38</option>
            <option value="gg_37">Gigi 37</option>
            <option value="gg_36">Gigi 36</option>
            <option value="gg_35">Gigi 35</option>
            <option value="gg_34">Gigi 34</option>
            <option value="gg_33">Gigi 33</option>
            <option value="gg_32">Gigi 32</option>
            <option value="gg_41">Gigi 31</option>
            <option value="gg_41">Gigi 41</option>
            <option value="gg_42">Gigi 42</option>
            <option value="gg_43">Gigi 43</option>
            <option value="gg_44">Gigi 44</option>
            <option value="gg_45">Gigi 45</option>
            <option value="gg_46">Gigi 46</option>
            <option value="gg_47">Gigi 47</option>
            <option value="gg_48">Gigi 48</option>
          </select>
      </div>
      <div class="col-md-12">
          <p>
              <b>Hasil Pemeriksaan</b>
          </p>
          <input name="value" class="btn odont_input color">

      </div>
      <div class="col-md-12">
          <p>
              <b>Catatan Pemeriksaan</b>
          </p>
          <textarea name="catatan" class="form-control" col="4" row="4"></textarea>
      </div>

      <div class="col-md-12">
        <button type="submit" name="ok_odont" value="ok_odont" class="btn bg-indigo waves-effect" onclick="this.value=\'ok_odont\'">SIMPAN</button>
      </div>

  </div>
</form>
<?php } ?>
<br>
<p class="lead">History Odontogram</p>
<table id="datatable" class="table table-bordered table-striped table-hover display nowrap" width="100%">
    <thead>
        <tr>
            <th>Tanggal Tindakan</th>
            <th>Pemeriksaan</th>
            <th>Catatan</th>
            <?php if(isset($_GET['no_rawat']) && $_GET['no_rawat'] !=='') { ?>
            <th>Tools</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php
    $query_odontogram = query("SELECT *  FROM pemeriksaan_odontogram WHERE no_rkm_medis = '{$no_rkm_medis}'");
    while ($data_odontogram = fetch_array($query_odontogram)) {
      if($data_odontogram['5'] == '#FF0000') {
        $data_value = 'Dicabut';
      } else if($data_odontogram['5'] == '#000000') {
        $data_value = 'Hilang';
      } else if($data_odontogram['5'] == '#FFFF00') {
        $data_value = 'Karies';
      } else if($data_odontogram['5'] == '#FF6600') {
        $data_value = 'Sisa Akar';
      } else if($data_odontogram['5'] == '#0000FF') {
        $data_value = 'Tumpatan';
      } else if($data_odontogram['5'] == '#FF00FF') {
        $data_value = 'Gigi Tiruan';
      } else if ($data_odontogram['5'] == '#339966') {
        $data_value = 'Goyang';
      } else {
        $data_value = 'Normal';
      }
    ?>
        <tr>
            <td><?php echo $data_odontogram['2']; ?></td>
            <td><?php echo "Gigi ".ltrim($data_odontogram['4'], 'gg_'); ?> <?php echo $data_value; ?></td>
            <td><?php echo $data_odontogram['6']; ?></td>
            <?php if(isset($_GET['no_rawat']) && $_GET['no_rawat'] !=='') { ?>
            <td><a href="<?php $_SERVER['PHP_SELF']; ?>?action=view&no_rawat=<?php echo $no_rawat; ?>&gg_xx=<?php echo $data_odontogram['4']; ?>&do=delete_odontogram">Hapus</a></td>
            <?php } ?>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>

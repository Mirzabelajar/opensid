<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');?>

<style type="text/css">

table.disdukcapil {
  width: 100%;
  border: solid 1px #000000;
  /*border-collapse: collapse;*/
}
table.disdukcapil td {
  padding: 1px 1px 1px 3px;
}
table.disdukcapil td.padat {
  padding: 0px;
  margin: 0px;
}
table.disdukcapil td.anggota {
  border-left: solid 1px #000000;
  border-right: solid 1px #000000;
  border-top: dashed 1px #000000;
  border-bottom: dashed 1px #000000;
}
table.disdukcapil td.judul {
  border-left: solid 1px #000000;
  border-right: solid 1px #000000;
  border-top: double 1px #000000;
  border-bottom: double 1px #000000;
}
table.disdukcapil td.bawah {border-bottom: solid 1px #000000;}
table.disdukcapil td.atas {border-top: solid 1px #000000;}
table.disdukcapil td.tengah_blank {
  border-left: solid 1px #000000;
  border-right: solid 1px #000000;
}
table.disdukcapil td.pinggir_kiri {border-left: solid 1px #000000;}
table.disdukcapil td.pinggir_kanan {border-right: solid 1px #000000;}
table.disdukcapil td.kotak {border: solid 1px #000000;}
table.disdukcapil td.abu {background-color: lightgrey;}
table.disdukcapil td.kode {background-color: lightgrey;}
table.disdukcapil td.kode div {
  margin: 0px 15px 0px 15px;
  border: solid 1px black;
  background-color: white;
  text-align: center;
}
table.disdukcapil td.pakai-padding {
  padding-left: 20px;
  padding-right: 2px;
}
table.disdukcapil td.kanan { text-align: left; }
table.disdukcapil td.kanan { text-align: right; }
table.disdukcapil td.tengah { text-align: center; }

</style>

<page orientation="portrait" format="210x330" style="font-size: 7pt">

  <table align="right" style="padding: 5px 20px; border: solid 1px black;">
    <tr><td><strong style="font-size: 16pt;">F-2.01</strong></td></tr>
  </table>

<!--   <table class="disdukcapil" style="margin-top: 0px;">
    <col span="48" style="width: 2.0833%;">

     <tr><td colspan=48>&nbsp;</td></tr>
    <tr>
      <td colspan="10" class="left"><strong>PEMERINTAH PROPINSI</strong></td>
      <td>:</td>
      <?php for($i=0; $i<2; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_propinsi'][$i]))
            echo $config['kode_propinsi'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td>&nbsp; </td>
      <td colspan="9" class="kotak"><?php echo $config['nama_propinsi'];?></td>
      <td>&nbsp;</td>
      <td colspan="7" class=" left"><strong>KECAMATAN</strong></td>
      <td>:</td>
      <?php for($i=0; $i<2; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_kecamatan'][$i]))
            echo $config['kode_kecamatan'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan=3>&nbsp;</td>
      <td colspan="10" class="kotak"><?php echo $config['nama_kecamatan'];?></td>
      <td>&nbsp;</td>
    </tr>

    <tr>
      <td colspan="10" class="left"><strong>KABUPATEN/KOTA</strong></td>
      <td>:</td>
      <?php for($i=0; $i<2; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_kabupaten'][$i]))
            echo $config['kode_kabupaten'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td>&nbsp;</td>
      <td colspan="9" class="kotak"><?php echo $config['nama_kabupaten'];?></td>
      <td>&nbsp;</td>
  	  <td colspan="7" class="left"><strong>KELURAHAN/DESA</strong></td>
      <td>:</td>
      <?php for($i=0; $i<4; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_desa'][$i]))
            echo $config['kode_desa'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td>&nbsp;</td>
      <td colspan="10" class="kotak"><?php echo $config['nama_desa'];?></td>
      <td>&nbsp;</td>
    </tr>
  </table>
 -->
  <p style="text-align: center; margin-top: 2px;">
      <strong style="font-size: 10pt;">SURAT KETERANGAN KELAHIRAN</strong>
  </p>

  <table class="disdukcapil" style="margin-top: 0px; border: 0px;">
    <col span="48" style="width: 2.0833%;">
    <!-- Untuk memaksa penampilan setiap kolom -->
    <tr>
      <?php for($i=0; $i<48; $i++): ?>
        <td>&nbsp;</td>
      <?php endfor; ?>
    </tr>
    <tr>
      <td colspan="10" class="left"><strong>Nama Kepala Keluarga </strong></td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['kepala_kk'][$i]))
            echo $input['kepala_kk'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left"><strong>Nomor Kartu Keluarga </strong></td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['no_kk'][$i]))
            echo $input['no_kk'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
  	  <td colspan="21">&nbsp;</td>
    </tr>
  </table>

  <table class="disdukcapil" style="margin-top: 0px;">
    <col span="48" style="width: 2.0833%;">

    <tr>
      <td colspan=48><strong>BAYI / ANAK </strong></td>
    </tr>

    <tr>
      <td colspan="10" class="left">1. &nbsp;&nbsp;Nama Lengkap</td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['nama_bayi'][$i]))
            echo $input['nama_bayi'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">2. &nbsp;&nbsp;NIK </td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['nik_bayi'][$i]))
            echo $input['nik_bayi'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan=21>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">3. &nbsp;&nbsp;Jenis Kelamin </td>
      <td>:</td>
        <td class="kotak padat tengah">
          <?php echo $input['sex'];?>
        </td>
      <td colspan=5 class="left">1. LAKI-LAKI </td>
      <td colspan=7 class="left">2. PEREMPUAN </td>
      <td colspan=4 class="left">&nbsp;</td>
    </tr>
	   <tr>
      <td colspan=10 class="left">4. &nbsp;&nbsp;Tempat Dilahirkan </td>
      <td>:</td>
      <?php for($i=0; $i<1; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['tempatlahirbayi'][$i]))
            echo $input['tempatlahirbayi'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>

      <td colspan=4 class="left">1. RS/SB</td>
	  <td colspan=6 class="left">2. Puskesmas </td>
	  <td colspan=6 class="left">3. Polindes</td>
	  <td colspan=5 class="left">4. Rumah </td>
	   <td colspan=7 class="left">5. Lainnya &nbsp; </td>
	   <td colspan="2">&nbsp;</td>
	</tr>
    <tr>
      <td colspan="10" class="left">5. &nbsp;&nbsp;Alamat Dilahirkan </td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['alamat_lahir_bayi']?></td>

      <td colspan="2">&nbsp;</td>
    </tr>
	   	   <tr>

      <td colspan="10" class="left">6. &nbsp;&nbsp;Hari dan Tanggal Lahir </td>
      <td>:</td>
      <td colspan="3" class="left">Hari : </td>
  	  <td colspan=4 class="kotak"><?php echo $input['hari'];?></td>
        <?php $tgl = date('dd',strtotime($input['tanggal']));
        $bln = date('mm',strtotime($input['tanggal']));
        $thn = date('Y',strtotime($input['tanggal']));
      ?>
          <td colspan="4" class="right"><div align="right">Tgl : </div></td>
		  <?php for($j=0; $j<2; $j++):?>
	  <td class="kotak padat tengah">
          <?php if(isset($tgl[$j]))
            echo $tgl[$j];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Bln : </div></td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($bln[$j]))
            echo $bln[$j];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Thn : </div></td>
      <?php for($j=0; $j<4; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($thn[$j]))
            echo $thn[$j];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="12">&nbsp;</td>

	  <td colspan="2">&nbsp;</td>
    </tr>
	    <tr>
      <td colspan="10" class="left">7. &nbsp;&nbsp;Pukul </td>
      <td>:</td>
      <?php for($i=0; $i<5; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['jam'][$i]))
            echo $input['jam'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan=10 class="left">8. &nbsp;&nbsp;Jenis Kelahiran </td>
      <td>:</td>
      <?php for($i=0; $i<1; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['jenislahir'][$i]))
            echo $input['jenislahir'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>

      <td colspan=4 class="left">1. Tunggal</td>
	  <td colspan=6 class="left">2. Kembar 2 </td>
	  <td colspan=6 class="left">3. Kembar 3 </td>
	  <td colspan=5 class="left">4. Kembar 4 </td>
	   <td colspan=7 class="left">&nbsp;</td>
	   </tr>
    <tr>
      <td colspan="10" class="left">9. &nbsp;&nbsp;Kelahiran Anak Ke </td>
      <td>:</td>
	        <?php for($i=0; $i<1; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['Kelahiranke'][$i]))
            echo $input['Kelahiranke'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>

      <td colspan=4 class="left">1. Satu </td>
	  <td colspan=6 class="left">2. Dua </td>
	  <td colspan=6 class="left">3. Tiga </td>
	  <td colspan=5 class="left">4. Empat </td>
	   <td colspan=7 class="left">&nbsp;</td>
	      </tr>
		  <tr>
		  <td colspan="10" class="left">10. Penolong Kelahiran </td>
          <td>:</td>
	        <?php for($i=0; $i<1; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['penolong'][$i]))
            echo $input['penolong'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>

      <td colspan=4 class="left">1. Dokter </td>
	  <td colspan=6 class="left">2. Bidan/Perawat </td>
	  <td colspan=6 class="left">3. Dukun </td>
	  <td colspan=5 class="left">4. Lainnya </td>
	   <td colspan=7 class="left">&nbsp;</td></tr>
    <tr>
      <td colspan="10" class="left">11. Berat Bayi</td>
      <td>:</td>
      <td colspan="3" class="kotak"><?php echo $input['berat_bayi']?></td>
      <td> Kg</td>
      <td colspan="21">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">12. Panjang Bayi</td>
      <td>:</td>
      <td colspan="2" class="kotak"><?php echo $input['panjang_bayi']?></td>
      <td> cm</td>
      <td colspan="22">&nbsp;</td>
    </tr>

    <tr><td colspan=48 class="bawah"></td>
    </tr>

    <tr>
      <td colspan=48><strong>IBU</strong></td>
    </tr>

    <tr>
      <td colspan="10" class="left">1. &nbsp;&nbsp;NIK</td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['nik_ibu'][$i]))
            echo $input['nik_ibu'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">2. &nbsp;&nbsp;Nama Lengkap</td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah"><?php if(isset($input['nama_ibu'][$i]))
            echo $input['nama_ibu'][$i];
            else echo "&nbsp;";
          ?></td>
      <?php endfor; ?>
      <td colspan=21>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">3. &nbsp;&nbsp;Tanggal Lahir / Umur</td>
      <td>:</td>
      <?php $tgl = date('dd',strtotime($input['tanggal_lahir_ibu']));
        $bln = date('mm',strtotime($input['tanggal_lahir_ibu']));
        $thn = date('Y',strtotime($input['tanggal_lahir_ibu']));
      ?>
      <td colspan="4" class="left">Tgl :</td>
		  <?php for($j=0; $j<2; $j++):?>
    	  <td class="kotak padat tengah">
          <?php if(isset($tgl[$j]))
            echo $tgl[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Bln : </div></td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($bln[$j]))
            echo $bln[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Thn : </div></td>
      <?php for($j=0; $j<4; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($thn[$j]))
            echo $thn[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="5" class="left"><div align="right">Umur : </div></td>
      <?php for($j=0; $j<3; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($input['umur_ibu'][$j]))
            echo $input['umur_ibu'][$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
	<tr>
	<td colspan="10" class="left">4. &nbsp;&nbsp;Pekerjaan</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['pekerjaanibu']?></td>

      <td colspan="2">&nbsp;</td></tr>
    <tr>
      <td colspan="10" class="left">5. &nbsp;&nbsp;Alamat</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['alamat_ibu']?></td>
      <td colspan="3" class="tengah">RT:</td>
      <?php for($i=0; $i<3; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['rt_ibu'][$i]))
            echo $input['rt_ibu'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="3" class="tengah">RW:</td>
      <?php for($i=0; $i<3; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['rw_ibu'][$i]))
            echo $input['rw_ibu'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="11" >&nbsp;</td>
      <td colspan="7" class="left">a. Desa/Keluarga</td>
      <td colspan="12" class="kotak"><?php echo $input['desaibu'];?></td>
      <td colspan="5" class="left">b. Kecamatan</td>
      <td colspan="12" class="kotak"><?php echo $input['kecibu'];?></td>
      <td colspan="1">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="11" >&nbsp;</td>
      <td colspan="7" class="left">c. Kabupaten/Kota</td>
      <td colspan="12" class="kotak"><?php echo $input['kabibu'];?></td>
      <td colspan="5" class="left">d. Propinsi</td>
      <td colspan="12" class="kotak"><?php echo $input['provinsiibu'];?></td>
      <td colspan="1">&nbsp;</td>
	  </tr>
	  <tr>
  	  <td colspan="10" class="left">6. &nbsp;&nbsp;Kewarganegaraan </td>
      <td>:</td>
      <td class="kotak padat tengah"><?php echo $input['wn_ibu'] ? $input['wn_ibu'] : '1';?></td>
      <td colspan=4 class="left">1. WNI </td>
  	  <td colspan=6 class="left">2. WNA </td>
  	  <td colspan=6 class="left">&nbsp;</td>
	  </tr>
	  <tr>
	  <td colspan="10" class="left">7. &nbsp;&nbsp;Kebangsaan </td>
      <td>:</td>
      <td colspan="9" class="kotak">INDONESIA</td>

      <td colspan="2">&nbsp;</td>
	  </tr>

    <tr>
      <td colspan="10" class="left">8. &nbsp;&nbsp;Tgl Pencatatan Perkawinan</td>
      <td>:</td>
      <?php $tgl = date('dd',strtotime($input['tanggalperkawinan_ibu']));
        $bln = date('mm',strtotime($input['tanggalperkawinan_ibu']));
        $thn = date('Y',strtotime($input['tanggalperkawinan_ibu']));
      ?>
      <td colspan="4" class="left">Tgl :</td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($tgl[$j]))
            echo $tgl[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Bln : </div></td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($bln[$j]))
            echo $bln[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Thn : </div></td>
      <?php for($j=0; $j<4; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($thn[$j]))
            echo $thn[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="12">&nbsp;</td>
    </tr>

	  <tr>
	  <td colspan=48 class="bawah"></td>
    </tr>

    <tr>
      <td colspan=48><strong>AYAH</strong></td>
    </tr>

    <tr>
      <td colspan="10" class="left">1. &nbsp;&nbsp;NIK</td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah"><?php if(isset($input['nik_ayah'][$i]))
            echo $input['nik_ayah'][$i];
            else echo "&nbsp;";
          ?></td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">2. &nbsp;&nbsp;Nama Lengkap</td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah"><?php if(isset($input['nama_ayah'][$i]))
            echo $input['nama_ayah'][$i];
            else echo "&nbsp;";
          ?></td>
      <?php endfor; ?>
      <td colspan=21>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">3. &nbsp;Tanggal Lahir / Umur</td>
      <td>:</td>
        <?php $tgl = date('dd',strtotime($input['tanggal_lahir_ayah']));
          $bln = date('mm',strtotime($input['tanggal_lahir_ayah']));
          $thn = date('Y',strtotime($input['tanggal_lahir_ayah']));
        ?>
      <td colspan="4" class="left">Tgl :</td>
		  <?php for($j=0; $j<2; $j++):?>
    	  <td class="kotak padat tengah">
          <?php if(isset($tgl[$j]))
            echo $tgl[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Bln : </div></td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($bln[$j]))
            echo $bln[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Thn : </div></td>
      <?php for($j=0; $j<4; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($thn[$j]))
            echo $thn[$j];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="5" class="left"><div align="right">Umur : </div></td>
      <?php for($j=0; $j<3; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($input['umur_ayah'][$j]))
            echo $input['umur_ayah'][$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
	<tr>
	<td colspan="10" class="left">4. &nbsp;&nbsp;Pekerjaan</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['pekerjaanayah']?></td>

      <td colspan="2">&nbsp;</td></tr>
    <tr>
      <td colspan="10" class="left">5. &nbsp;&nbsp;Alamat</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['alamat_ayah']?></td>
      <td colspan="3" class="tengah">RT:</td>
      <?php for($i=0; $i<3; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['rt_ayah'][$i]))
            echo $input['rt_ayah'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="3" class="tengah">RW:</td>
      <?php for($i=0; $i<3; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['rw_ayah'][$i]))
            echo $input['rw_ayah'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="11" >&nbsp;</td>
      <td colspan="7" class="left">a. Desa/Keluarga</td>
      <td colspan="12" class="kotak"><?php echo $input['desaayah'];?></td>
      <td colspan="5" class="left">b. Kecamatan</td>
      <td colspan="12" class="kotak"><?php echo $input['kecayah'];?></td>
      <td colspan="1">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="11" >&nbsp;</td>
      <td colspan="7" class="left">c. Kabupaten/Kota</td>
      <td colspan="12" class="kotak"><?php echo $input['kabayah'];?></td>
      <td colspan="5" class="left">d. Propinsi</td>
      <td colspan="12" class="kotak"><?php echo $input['provinsiayah'];?></td>
      <td colspan="1">&nbsp;</td>
	  </tr>
	  <tr>
  	  <td colspan="10" class="left">6. &nbsp;&nbsp;Kewarganegaraan </td>
      <td>:</td>
      <td class="kotak padat tengah"><?php echo $input['wn_ayah'] ? $input['wn_ayah'] : '1';?></td>
      <td colspan=4 class="left">1. WNI </td>
  	  <td colspan=6 class="left">2. WNA </td>
  	  <td colspan=6 class="left">&nbsp;</td>
	  </tr>
	  <tr>
	  <td colspan="10" class="left">7. &nbsp;&nbsp;Kebangsaan </td>
      <td>:</td>
      <td colspan="9" class="kotak">INDONESIA</td>

      <td colspan="2">&nbsp;</td>
	  </tr>
	  <tr>
	  <td colspan=48 class="bawah"></td>
    </tr>

    <tr>
      <td colspan=48><strong>PELAPOR</strong></td>
    </tr>

    <tr>
      <td colspan="10" class="left">1. &nbsp;&nbsp;NIK</td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['nik_pelapor'][$i]))
            echo $input['nik_pelapor'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">2. &nbsp;&nbsp;Nama Lengkap</td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah"><?php if(isset($input['nama_pelapor'][$i]))
            echo $input['nama_pelapor'][$i];
            else echo "&nbsp;";
          ?></td>
      <?php endfor; ?>
      <td colspan=21>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">3. &nbsp;Tanggal Lahir / Umur</td>
      <td>:</td>
        <?php $tgl = date('dd',strtotime($input['tanggal_lahir_pelapor']));
          $bln = date('mm',strtotime($input['tanggal_lahir_pelapor']));
          $thn = date('Y',strtotime($input['tanggal_lahir_pelapor']));
        ?>
      <td colspan="4" class="left">Tgl :</td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($tgl[$j]))
            echo $tgl[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Bln : </div></td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($bln[$j]))
            echo $bln[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Thn : </div></td>
      <?php for($j=0; $j<4; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($thn[$j]))
            echo $thn[$j];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="5" class="left"><div align="right">Umur : </div></td>
      <?php for($j=0; $j<3; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($input['umur_pelapor'][$j]))
            echo $input['umur_pelapor'][$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
  	<tr>
      <td colspan="10" class="left">4. &nbsp;&nbsp;Jenis Kelamin </td>
      <td>:</td>
        <td class="kotak padat tengah">
          <?php echo $input['jkpelapor'];?>
        </td>
      <td colspan=5 class="left">1. LAKI-LAKI </td>
      <td colspan=7 class="left">2. PEREMPUAN </td>
      <td colspan=4 class="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">5. &nbsp;&nbsp;Pekerjaan</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['pekerjaanpelapor']?></td>
      <td colspan="3" class="tengah">&nbsp;</td>
    </tr>
    <tr>
     <td colspan="10" class="left">6. &nbsp;&nbsp;Alamat</td>
      <td>:</td>

      <td colspan="7" class="left">a. Desa/Keluarga</td>
      <td colspan="12" class="kotak"><?php echo $input['desapelapor'];?></td>
      <td colspan="5" class="left">b. Kecamatan</td>
      <td colspan="12" class="kotak"><?php echo $input['kecpelapor'];?></td>
      <td colspan="1">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="11" >&nbsp;</td>
      <td colspan="7" class="left">c. Kabupaten/Kota</td>
      <td colspan="12" class="kotak"><?php echo $input['kabpelapor'];?></td>
      <td colspan="5" class="left">d. Propinsi</td>
      <td colspan="12" class="kotak"><?php echo $input['provinsipelapor'];?></td>
      <td colspan="1">&nbsp;</td>
	  </tr>
	  <tr>
	  <td colspan=48 class="bawah"></td>
    </tr>

    <tr>
      <td colspan=48><strong>SAKSI 1 </strong></td>
    </tr>

    <tr>
      <td colspan="10" class="left">1. &nbsp;&nbsp;NIK</td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['nik_saksi1'][$i]))
            echo $input['nik_saksi1'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">2. &nbsp;&nbsp;Nama Lengkap</td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah"><?php if(isset($input['nama_saksi1'][$i]))
            echo $input['nama_saksi1'][$i];
            else echo "&nbsp;";
          ?></td>
      <?php endfor; ?>
      <td colspan=21>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">3. &nbsp;Tanggal Lahir / Umur</td>
      <td>:</td>
        <?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi1']));
          $bln = date('mm',strtotime($input['tanggal_lahir_saksi1']));
          $thn = date('Y',strtotime($input['tanggal_lahir_saksi1']));
        ?>
      <td colspan="4" class="left">Tgl :</td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($tgl[$j]))
            echo $tgl[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Bln : </div></td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($bln[$j]))
            echo $bln[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Thn : </div></td>
      <?php for($j=0; $j<4; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($thn[$j]))
            echo $thn[$j];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="5" class="left"><div align="right">Umur : </div></td>
      <?php for($j=0; $j<3; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($input['umur_saksi1'][$j]))
            echo $input['umur_saksi1'][$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">4. &nbsp;&nbsp;Jenis Kelamin </td>
      <td>:</td>
        <td class="kotak padat tengah">
          <?php echo $input['jksaksi1'];?>
        </td>
      <td colspan=5 class="left">1. LAKI-LAKI </td>
      <td colspan=7 class="left">2. PEREMPUAN </td>
      <td colspan=4 class="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">5. &nbsp;&nbsp;Pekerjaan</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['pekerjaansaksi1']?></td>
      <td colspan="3" class="tengah">&nbsp;</td>
    </tr>
    <tr>
     <td colspan="10" class="left">6. &nbsp;&nbsp;Alamat</td>
      <td>:</td>

      <td colspan="7" class="left">a. Desa/Keluarga</td>
      <td colspan="12" class="kotak"><?php echo $input['desasaksi1'];?></td>
      <td colspan="5" class="left">b. Kecamatan</td>
      <td colspan="12" class="kotak"><?php echo $input['kecsaksi1'];?></td>
      <td colspan="1">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="11" >&nbsp;</td>
      <td colspan="7" class="left">c. Kabupaten/Kota</td>
      <td colspan="12" class="kotak"><?php echo $input['kabsaksi1'];?></td>
      <td colspan="5" class="left">d. Propinsi</td>
      <td colspan="12" class="kotak"><?php echo $input['provinsisaksi1'];?></td>
      <td colspan="1">&nbsp;</td>
	  </tr>
	  <tr>
	  <td colspan=48 class="bawah"></td>
    </tr>

    <tr>
      <td colspan=48><strong>SAKSI 2 </strong></td>
    </tr>

    <tr>
      <td colspan="10" class="left">1. &nbsp;&nbsp;NIK</td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($input['nik_saksi2'][$i]))
            echo $input['nik_saksi2'][$i];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">2. &nbsp;&nbsp;Nama </td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah"><?php if(isset($input['nama_saksi2'][$i]))
            echo $input['nama_saksi2'][$i];
            else echo "&nbsp;";
          ?></td>
      <?php endfor; ?>
      <td colspan=21>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">3. &nbsp;Tanggal Lahir / Umur</td>
      <td>:</td>
        <?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi2']));
          $bln = date('mm',strtotime($input['tanggal_lahir_saksi2']));
          $thn = date('Y',strtotime($input['tanggal_lahir_saksi2']));
        ?>
      <td colspan="4" class="left">Tgl :</td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($tgl[$j]))
            echo $tgl[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Bln : </div></td>
      <?php for($j=0; $j<2; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($bln[$j]))
            echo $bln[$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4" class="right"><div align="right">Thn : </div></td>
      <?php for($j=0; $j<4; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($thn[$j]))
            echo $thn[$j];
            else echo "&nbsp;";
          ?>        </td>
      <?php endfor; ?>
      <td colspan="5" class="left"><div align="right">Umur : </div></td>
      <?php for($j=0; $j<3; $j++):?>
        <td class="kotak padat tengah">
          <?php if(isset($input['umur_saksi2'][$j]))
            echo $input['umur_saksi2'][$j];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">4. &nbsp;&nbsp;Jenis Kelamin </td>
      <td>:</td>
        <td class="kotak padat tengah">
          <?php echo $input['jksaksi2'];?>
        </td>
      <td colspan=5 class="left">1. LAKI-LAKI </td>
      <td colspan=7 class="left">2. PEREMPUAN </td>
      <td colspan=4 class="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="10" class="left">5. &nbsp;&nbsp;Pekerjaan</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $input['pekerjaansaksi2']?></td>
      <td colspan="3" class="tengah">&nbsp;</td>
    </tr>
    <tr>
     <td colspan="10" class="left">6. &nbsp;&nbsp;Alamat</td>
      <td>:</td>

      <td colspan="7" class="left">a. Desa/Keluarga</td>
      <td colspan="12" class="kotak"><?php echo $input['desasaksi2'];?></td>
      <td colspan="5" class="left">b. Kecamatan</td>
      <td colspan="12" class="kotak"><?php echo $input['kecsaksi2'];?></td>
      <td colspan="1">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="11" >&nbsp;</td>
      <td colspan="7" class="left">c. Kabupaten/Kota</td>
      <td colspan="12" class="kotak"><?php echo $input['kabsaksi2'];?></td>
      <td colspan="5" class="left">d. Propinsi</td>
      <td colspan="12" class="kotak"><?php echo $input['provinsisaksi2'];?></td>
      <td colspan="1">&nbsp;</td>
	  </tr>
	  <tr>
	  <td colspan=48 class="bawah"></td>
    </tr>

    <tr>
      <td colspan=48>&nbsp;</td>
    </tr>
	  <tr>
  	  <td colspan="46" style="text-align: right">
        <?php echo $config['nama_desa'];?>, <?php echo tgl_indo(date('Y m d',time()));?>
      </td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr><td colspan="48">&nbsp;</td></tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      <td colspan="16" style="text-align: center;">Mengetahui</td>
      <td colspan="15">&nbsp;</td>
      <td colspan="10" style="text-align: center;">Pelapor</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr><td colspan="48"></td></tr>
    <tr>
       <td colspan="4">&nbsp;</td>

    <td colspan="16" style="text-align: center;"><?php echo padded_string_center($input['jabatan'],30)?></td>
     <td colspan="15">&nbsp;</td>
	  <td colspan="10" style="text-align: center;">&nbsp;</td>
	  <td colspan="3">&nbsp;</td>
    </tr>
    <tr><td colspan="48">&nbsp;</td></tr>
    <tr><td colspan="48">&nbsp;</td></tr>
	 <tr><td colspan="48">&nbsp;</td></tr>
	 <tr><td colspan="48">&nbsp;</td></tr>
    <tr>
      <td colspan="4">&nbsp;</td>

      <td colspan="16" style="text-align: center;"><strong>(&nbsp;<?php echo padded_string_center(strtoupper($input['pamong']),30)?>&nbsp;)</strong></td>
      <td colspan="15">&nbsp;</td>
      <td colspan="10" style="text-align: center;"><strong>(&nbsp;<?php echo padded_string_center(strtoupper($input['nama_pelapor']),30)?>&nbsp;)</strong></td>
      <td colspan="3">&nbsp;</td>
    </tr>

    <tr><td colspan="48">&nbsp;</td>
	</tr>
	  <tr>	  	  </tr>
	  <tr>	  </tr>
    <tr>      </tr>
    <tr></tr>
    <tr>
      <?php for($i=0; $i<48; $i++): ?>
        <td>&nbsp;</td>
      <?php endfor; ?>
    </tr>
  </table>

</page>
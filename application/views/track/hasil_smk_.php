<div class="isi isi1">
  <blockquote style="background-color:white;">
  <?php if ($detail_tabel->num_rows() > 0){?>
    <h2><strong>Peserta dengan nama <?php echo $nama; ?> ditemukan</strong></h2>
              <table class="table">
                    <tr>
                        <td style="width: 30px;" > No. </td>
                        <td style="width: 90px;" > No. ujian </td>
                        <td style="width: 220px;"> Nama</td>
                        <td style="width: 200px;"> Asal Sekolah</td>
                        <td style="width: 120px;"> Pilihan 1</td>
                        <td style="width: 120px;"> Pilihan 2</td>
                     </tr>
                     <?php $i =1; foreach($detail_tabel->result() as $row): ?>
                     <tr>
                         <td><?php echo $i; $i++; ?></td>
                        <td> <?php echo $row->NO_UJIAN; ?></td>
                        <td> <?php echo $row->NAMA; ?></td>
                        <td> <?php echo $row->ASAL_SEKOLAH; ?></td>
                        <td> <?php echo $row->PILIH1; ?>  </td>
                        <td> <?php echo $row->PILIH2; ?>  </td>
                     </tr>
                    <?php endforeach;?>
              </table> 	
            <?php } else { ?>
                <h2><strong>Peserta dengan nama <?php echo $nama; ?> Belum mendaftar</strong></h2><?php } ?>
  </blockquote>
</div>
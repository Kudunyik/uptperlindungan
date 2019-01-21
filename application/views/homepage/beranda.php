<body>
    <table class="table table-striped table-bordered table-hover example" >
        <a href="<?php echo base_url('index.php/pengawasan/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
        <thead>
           <tr>
               <th>No</th>
               <th>Tanggal</th>
               <th>Lokasi</th>
               <th>Barang Yang Diawasi</th>
               <th>Hasil Temuan</th>
               <th>Tindakan</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
           <tr>
               <?php
               $no = 1;
               foreach ($data->result() as $row){
                ?>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->tanggal_masuk;?></td>
                <td><?php echo $row->lokasi;?></td>
                <td><?php echo $row->barang;?></td>
                <td><?php echo $row->hasil_temuan;?></td>
                <td><?php echo $row->tindakan;?></td>
                <td>
                    <a  class="btn btn-warning" href="">edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Tersebut ?');" href="<?php echo base_url('index.php/pengawasan/hapusproses/'.$row->id_pengawasan);?>">delete</a>
                </td>         

            </tr>
        <?php }?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.example').DataTable();
    } );dd
</script> 
</body>
</html>

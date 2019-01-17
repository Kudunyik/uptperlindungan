<!doctype html>
<html lang="en">
<head>
</head>

<?php $this->load->view('header'); ?>

<body>
    <table id="dt-basic" class="table table-striped table-bordered">
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
                <a class="btn btn-danger" onclick="return" href="">delete</a>
                </td>         

         </tr>
       <?php }?>
     </tbody>
    </table>
</body>
</html>

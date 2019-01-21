        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Pengawasan</h4>
                            </div>
                            <div class="content">
                                    <?php echo form_open_multipart('pengawasan/simpan');?>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>tanggal_masuk</label>
                                                <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="tanggal_masuk" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>lokasi</label>
                                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="lokasi">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Barang</label>
                                                <input type="text" class="form-control" name="barang" id="barang" placeholder="Nama Admin">
                                            </div>
                                        </div>
                                    
                                         <div>
                                        	<div class="col-md-7">
                                            <label>hasil_temuan</label>
                                            <input class="form-control" type="text" name="hasil_temuan" id="hasil_temuan" class="span3" required>
                                        	</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tindakan</label>
                                                <input type="text" class="form-control" name="tindakan" id="tindakan" placeholder="Alamat Admin" >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-success btn-sm">Simpan</button> -->
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save Data</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
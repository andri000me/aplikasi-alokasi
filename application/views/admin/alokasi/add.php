   <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Tambah Data Alokasi</h3> 
                        		</div>

                        		<div class="col-6">
                        			
                        		</div>
                        	</div>

                        	<form action="<?= base_url('page_admin/add_alokasi_bum') ?>" method="post">
                        		
                        		<div class="row">
            
             
                                    <input type="hidden" name="id_posko" class="form-control" value="<?= $alokasi->id_posko ?>" readonly>
  
       
                                                       <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Nama Posko</label>
                                    <input type="text" name="nm_posko" class="form-control" value="<?= $alokasi->nm_posko ?>" readonly>
                                </div>
                            </div>
                           <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Jumlah Korban</label>
                                    <input type="text" name="jumlah_korban" class="form-control" value="<?= $alokasi->jumlah_korban ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">kondisi</label>
                                    <input type="text" name="kondisi" class="form-control" value="<?= $alokasi->kondisi ?>" readonly>
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">latitude</label>
                                    <input type="text" name="latitude" class="form-control" value="<?= $alokasi->latitude ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Longitude</label>
                                    <input type="text" name="longitude" class="form-control" value="<?= $alokasi->longitude ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Alamat Posko</label>
                                    <input type="text" name="alamat_posko" class="form-control" value="<?= $alokasi->alamat_posko ?>" readonly>
                                </div>
               </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Nama Alokasi</label>
                                    <input type="text" name="nm_alokasi" class="form-control" >
                                </div>
                            </div>




                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                     
     
                            
                           
                        </div>
                        	</form>
                        </div>
                        </div>
                    </div>

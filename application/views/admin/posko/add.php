   <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Tambah Data Posko</h3> 
                        		</div>

                        		<div class="col-6">
                        			
                        		</div>
                        	</div>

                        	<form action="<?= base_url('page_admin/add_posko_bum') ?>" method="post">
                        		
                        		<div class="row">
            
             
  
             
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Nama Posko</label>
                                    <input type="text" name="nm_posko" class="form-control" >
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">bencana</label>
                                    <select class="form-control" required name="bencana">
                                        <option value="">--</option>
                                        <?php foreach ($bencana as $key): ?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                            
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Jumlah Korban</label>
                                    <input type="text" name="jumlah_korban" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">kondisi</label>
                                    <input type="text" name="kondisi" class="form-control" >
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">latitude</label>
                                    <input type="text" name="latitude" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Longitude</label>
                                    <input type="text" name="longitude" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Alamat Posko</label>
                                    <input type="text" name="alamat_posko" class="form-control" >
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

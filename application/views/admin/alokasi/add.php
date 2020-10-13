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
            
             
  
             
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Nama Alokasi</label>
                                    <input type="text" name="nm_alokasi" class="form-control" >
                                </div>
                            </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Posko</label>
                                    <select class="form-control" required name="id_posko">
                                        <option value="">--</option>
                                        <?php foreach ($posko as $key): ?>
                                        <option value="<?= $key->id_posko ?>"><?= $key->nm_posko ?></option>
                                            
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Bantuan</label>
                                    <select class="form-control" required name="id_bantuan">
                                        <option value="">--</option>
                                        <?php foreach ($bantuan as $key): ?>
                                        <option value="<?= $key->id_bantuan ?>"><?= $key->jenis_bantuan ?></option>
                                            
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                    <!--         <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">tgl_diajukan</label>
                                    <input type="text" name="tgl_diajukan" class="form-control" >
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">tgl_alokasi</label>
                                    <input type="text" name="tgl_alokasi" class="form-control" >
                                </div>
                            </div> -->
               

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

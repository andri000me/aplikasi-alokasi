   <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Edit Data Alokasi</h3> 
                        		</div>

                        		<div class="col-6">
                        			
                        		</div>
                        	</div>

                        	<form action="<?= base_url('page_admin/edit_alokasi_bum') ?>" method="post">
                        		
                        		<div class="row">
            
             
  
                                    <input type="hidden" name="id_alokasi" class="form-control" value="<?= $alokasi->id_alokasi ?>">
             
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">nm_alokasi</label>
                                    <input type="text" name="nm_alokasi" class="form-control" value="<?= $alokasi->nm_alokasi ?>">
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">id_posko</label>
                                    <input type="text" name="id_posko" class="form-control" value="<?= $alokasi->id_posko ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">id_bantuan</label>
                                    <input type="text" name="id_bantuan" class="form-control" value="<?= $alokasi->id_bantuan ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">tgl_diajukan</label>
                                    <input type="text" name="tgl_diajukan" class="form-control" value="<?= $alokasi->tgl_diajukan ?>">
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">tgl_alokasi</label>
                                    <input type="text" name="tgl_alokasi" class="form-control" value="<?= $alokasi->tgl_alokasi ?>">
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

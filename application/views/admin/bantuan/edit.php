   <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Edit Data bantuan</h3> 
                        		</div>

                        		<div class="col-6">
                        			
                        		</div>
                        	</div>

                        	<form action="<?= base_url('page_admin/edit_bantuan_bum') ?>" method="post">
                        		
                        		<div class="row">
            
             
  
                                    <input type="hidden" name="id_bantuan" class="form-control" value="<?= $bantuan->id_bantuan ?>">
             
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Jenis Bantuan</label>
                                    <input type="text" name="jenis_bantuan" class="form-control" value="<?= $bantuan->jenis_bantuan ?>">
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Jumlah Bantuan</label>
                                    <input type="text" name="jumlah_bantuan" class="form-control" value="<?= $bantuan->jumlah_bantuan ?>">
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

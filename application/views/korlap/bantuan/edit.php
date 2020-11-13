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

                        	<form action="<?= base_url('page_korlap/edit_bantuan_bum') ?>" method="post">
                        		
                        		<div class="row">
            
             
  
                                    <input type="hidden" name="id_bantuan" class="form-control" value="<?= $bantuan->id_bantuan ?>">
             
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Bantuan</label>
                                    <input type="text" name="nama_bantuan" class="form-control" value="<?= $bantuan->nama_bantuan ?>">
                                </div>
                            </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                               <label for="exampleFormControlTextarea1">Keterangan</label>
                               <textarea class="form-control"  name="keterangan" id="exampleFormControlTextarea1" rows="3"><?= $bantuan->keterangan ?></textarea>
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

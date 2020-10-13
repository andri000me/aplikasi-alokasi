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
                                    <label class="form-control-label" for="teknisi4_id">Posko</label>
                                    <select class="form-control" required name="id_posko">
                                        <option value="">--</option>
                                        <?php foreach ($posko as $key): ?>
                                            <?php if ($key->id_posko == $alokasi->id_posko): ?>
                                        <option value="<?= $key->id_posko ?>" selected><?= $key->nm_posko ?></option>
                                                
                                                <?php else: ?>

                                        <option value="<?= $key->id_posko ?>"><?= $key->nm_posko ?></option>
                                            <?php endif ?>
                                            
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
                                            <?php if ($key->id_bantuan == $alokasi->id_bantuan): ?>
                                        <option value="<?= $key->id_bantuan ?>" selected><?= $key->jenis_bantuan ?></option>
                                                
                                                <?php else: ?>

                                        <option value="<?= $key->id_bantuan ?>"><?= $key->jenis_bantuan ?></option>
                                            <?php endif ?>
                                            
                                        <?php endforeach ?>
                                    </select>
                                </d
                            
               

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

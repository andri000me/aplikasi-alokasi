   <div clas



   <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="box-title">Tambah Data korlap</h3> 
                                </div>

                                <div class="col-6">
                                    
                                </div>
                            </div>

                            <form action="<?= base_url('page_admin/edit_korlap_bum') ?>" method="post">
                                
                                <div class="row">
            
             
                                    <input type="hidden" name="id" class="form-control" value="<?= $korlap->id ?>">
  
             
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Nama korlap</label>
                                    <input type="text" name="name" class="form-control" value="<?= $korlap->name ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="teknisi4_id">Nama korlap</label>
                                    <input type="text" name="username" class="form-control" value="<?= $korlap->username ?>">
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

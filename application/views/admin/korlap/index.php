
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Data korlap</h3> 
                        		</div>

                        		<div class="col-6">
                        			<a href="<?= base_url('page_admin/korlap/add') ?>" class="btn btn-primary">Tambah</a>
                        		</div>
                        	</div>
                            
                             <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                           
                                            <th>Nama korlap</th>
                                            <th>Username</th>
                                            
                                            <th>Aksi</th>
                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i = 1; ?>
                                    	<?php foreach ($korlap as $key): ?>
                                    		
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $key->name ?></td>
                                            <td><?= $key->username ?></td>
                                 
                                            <td>
                                            	<a href="<?= base_url('page_admin/korlap/edit_korlap') ?>/<?= $key->id ?>" class="badge badge-success">Edit</a>
                                            	<a href="<?= base_url('page_admin/hapus_korlap') ?>/<?= $key->id ?>" class="badge badge-danger" onclick="confirm('yakin?')">Hapus</a>
                                            </td>
                                            
                                        </tr>
                                        <?php $i++; ?>
                                    	<?php endforeach ?>
                                    </tbody>
                                </table>
                                </div>
                    </div>
                </div>
            </div>




               
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Data Banuan</h3> 
                        		</div>

                        		<div class="col-6">
                        			<a href="<?= base_url('page_admin/bantuan/add') ?>" class="btn btn-primary">Tambah</a>
                        		</div>
                        	</div>
                            
                             <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Jenis Bantuan</th>
                                            <th>Jumlah Bantuan</th>
                                         
                                         
                                            <th>Aksi</th>
                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i = 1; ?>
                                    	<?php foreach ($bantuan as $key): ?>
                                    		
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $key->jenis_bantuan ?></td>
                                            <td><?= $key->jumlah_bantuan ?></td>
                                           
                                            <td>
                                            	<a href="<?= base_url('page_admin/bantuan/edit_bantuan') ?>/<?= $key->id_bantuan ?>" class="badge badge-success">Edit</a>
                                            	<a href="<?= base_url('page_admin/hapus_bantuan') ?>/<?= $key->id_bantuan ?>" class="badge badge-danger" onclick="confirm('yakin?')">Hapus</a>
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



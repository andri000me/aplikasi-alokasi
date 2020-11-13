
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Data Banuan</h3> 
                        		</div>

                        		<div class="col-6">
                        			<a href="<?= base_url('page_korlap/bantuan/add') ?>" class="btn btn-primary">Tambah</a>
                        		</div>
                        	</div>
                            
                             <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Bantuan</th>
                                            <th>Keterangan</th>
                                         
                                         
                                            <th>Aksi</th>
                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i = 1; ?>
                                    	<?php foreach ($bantuan as $key): ?>
                                    		
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $key->nama_bantuan ?></td>
                                            <td><?= $key->keterangan ?></td>
                                           
                                            <td>
                                            	<a href="<?= base_url('page_korlap/bantuan/edit_bantuan') ?>/<?= $key->id_bantuan ?>" class="badge badge-success">Edit</a>
                                            	<a href="<?= base_url('page_korlap/hapus_bantuan') ?>/<?= $key->id_bantuan ?>" class="badge badge-danger" onclick="confirm('yakin?')">Hapus</a>
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



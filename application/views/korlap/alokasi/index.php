
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Data Alokasi</h3> 
                        		</div>

                        		<div class="col-6">
                        			<a href="<?= base_url('page_admin/alokasi/add') ?>" class="btn btn-primary">Tambah</a>
                        		</div>
                        	</div>
                            
                             <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Nama Alokasi</th>
                                            <th>Posko</th>
                                            <th>Bantuan</th>
                                            <th>Tanggal Diajukan</th>
                                            <th>Tanggal Alokasi</th>
                                            <th>Aksi</th>
                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i = 1; ?>
                                    	<?php foreach ($alokasi as $key): ?>
                                    		
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $key->id ?></td>
                                            <td><?= $key->nm_alokasi ?></td>
                                            <td><?= $key->id_posko ?></td>
                                            <td><?= $key->id_bantuan ?></td>
                                            <td><?= $key->tgl_diajukan ?></td>
                                            <td><?= $key->tgl_alokasi ?></td>
                                            <td>
                                            	<a href="<?= base_url('page_admin/alokasi/edit_alokasi') ?>/<?= $key->id_alokasi ?>" class="badge badge-success">Edit</a>
                                            	<a href="<?= base_url('page_admin/hapus_alokasi') ?>/<?= $key->id_alokasi ?>" class="badge badge-danger" onclick="confirm('yakin?')">Hapus</a>
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



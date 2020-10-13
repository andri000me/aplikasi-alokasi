
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<div class="row">
                        		<div class="col-6">
                        			<h3 class="box-title">Data posko</h3> 
                        		</div>

                        		<div class="col-6">
                        			<!-- <a href="<?= base_url('page_admin/posko/add') ?>" class="btn btn-primary">Tambah</a> -->
                        		</div>
                        	</div>
                            
                             <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                           
                                            <th>Nama posko</th>
                                            <th>Bencana</th>
                                            <th>Jumlah Korban</th>
                                            <th>Kondisi</th>
                                            <th>Latitude</th>
                                            <th>Longtitude</th>
                                            <th>Alamat Posko</th>
                                            <th>Status</th>
                                            <!-- <th>Aksi</th> -->
                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i = 1; ?>
                                    	<?php foreach ($posko as $key): ?>
                                    		
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $key->nm_posko ?></td>
                                            <td><?= $key->bencana ?></td>
                                            <td><?= $key->jumlah_korban ?></td>
                                            <td><?= $key->kondisi ?></td>
                                            <td><?= $key->latitude ?></td>
                                            <td><?= $key->longitude ?></td>
                                            <td><?= $key->alamat_posko ?></td>
                                            <td><?= $key->status ?></td>
                                         <!--    <td>
                                            	<a href="<?= base_url('page_admin/posko/edit_posko') ?>/<?= $key->id_posko ?>" class="badge badge-success">Edit</a>
                                            	<a href="<?= base_url('page_admin/hapus_posko') ?>/<?= $key->id_posko ?>" class="badge badge-danger" onclick="confirm('yakin?')">Hapus</a>
                                            </td> -->
                                            
                                        </tr>
                                        <?php $i++; ?>
                                    	<?php endforeach ?>
                                    </tbody>
                                </table>
                                </div>
                    </div>
                </div>
            </div>



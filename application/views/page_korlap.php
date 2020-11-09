<?php 
	
	$j = $this->db->get_where('korlap', ['email' => $this->session->userdata('username')])->row();

 ?>
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            
		<div class="row mt-5">
			<div class="col-12 mx-auto">

<div class="card text-left">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">Selamat Datang!</h5>
    <p class="card-text">
      <ul class="list-group list-group-flush">
    <li class="list-group-item list-group-item-primary">Name : <strong><?php echo $j->nama ?></strong></li>
    <li class="list-group-item list-group-item-primary">Email : <strong><?php echo $j->email ?></strong></li>
    <li class="list-group-item list-group-item-primary">Alamat : <strong><?php echo $j->alamat ?></strong></li>
    <li class="list-group-item list-group-item-primary">No Hp : <strong><?php echo $j->nohp ?></strong></li>
    <!-- <li class="list-group-item list-group-item-primary">Username : <strong><?php echo $this->session->userdata('username') ?></strong></li> -->
    <li class="list-group-item list-group-item-primary">Level : <strong><?php echo $this->session->userdata('level') ?></strong></li>
   
  </ul>
    </p>
    <!-- <a href="" class="btn btn-primary">Go</a> -->
  </div>
  <div class="card-footer text-muted">
   
  </div>
</div>

			</div>
		</div>
                    </div>
                </div>
            </div>

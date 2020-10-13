<?php
class Page_admin extends CI_Controller{
    function __construct(){
        parent::__construct();

        //user bukan level 'admin' ditolak
        if ($this->session->userdata('level') !== 'admin')
            { redirect('auth/logout','refresh');}
        $this->load->model('model_alokasi');
    }
 

    function index(){

    	$data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('page_admin');
        $this->load->view('template/footer');
    }

    function alokasi(){

    	
        if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {

            if ($this->uri->segment('4') == 'edit') {
                return $this->edit_alokasi($this->uri->segment('3'));
            }
     
        }

        if (!empty($this->uri->segment('3'))) {
            if ($this->uri->segment('3') == 'add') {
                return $this->add_alokasi();
            }
        }

        $data['title'] = 'Dashboard';
        
        $data['alokasi'] = $this->model_alokasi->get_alokasi();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('admin/alokasi/index');
        $this->load->view('template/footer');
    }
    
    public function add_alokasi(){
                $data['title'] = 'Dashboard';
        
       
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('admin/alokasi/add');
        $this->load->view('template/footer');
    }



        function bantuan(){

    	$data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('page_admin');
        $this->load->view('template/footer');
    }
            function posko(){

    	$data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('page_admin');
        $this->load->view('template/footer');
    }




    
}

<?php
class Page_korlap extends CI_Controller{
    function __construct(){
        parent::__construct();

        //user bukan level 'korlap' ditolak
        if ($this->session->userdata('level') !== 'korlap')
            { redirect('auth/logout','refresh');}
        $this->load->model('model_alokasi');
        $this->load->model('model_bantuan');
        $this->load->model('model_posko');
    }
 

   public function index(){

    	$data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_korlap');
        $this->load->view('page_korlap');
        $this->load->view('template/footer');
    }

    // function alokasi(){

        
    //     if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {

    //         if ($this->uri->segment('3') == 'edit_alokasi') {
    //             return $this->edit_alokasi($this->uri->segment('4'));
    //         }
     
    //     }

    //     if (!empty($this->uri->segment('3'))) {
    //         if ($this->uri->segment('3') == 'add') {
    //             return $this->add_alokasi();
    //         }
    //     }

    //     $data['title'] = 'Dashboard';
        
    //     $data['alokasi'] = $this->model_alokasi->get_alokasi();
    //     $this->load->view('template/header', $data);
    //     $this->load->view('template/sidebar_korlap');
    //     $this->load->view('korlap/alokasi/index');
    //     $this->load->view('template/footer');
    // }
    
    // public function add_alokasi(){
    //             $data['title'] = 'Tambah Data Alokasi';
        
       
    //     $this->load->view('template/header', $data);
    //     $this->load->view('template/sidebar_korlap');
    //     $this->load->view('korlap/alokasi/add');
    //     $this->load->view('template/footer');
    // }

    // public function add_alokasi_bum(){
    //     $this->model_alokasi->add_alokasi();
    //     redirect('page_korlap/alokasi');
    // }

    // public function edit_alokasi($id){

    //     $data['title'] = 'Dashboard';

    //     $data['alokasi'] = $this->db->get_where('alokasi', ['id_alokasi' => $id])->row();
    //     $this->load->view('template/header', $data);
    //     $this->load->view('template/sidebar_korlap');
    //     $this->load->view('korlap/alokasi/edit');
    //     $this->load->view('template/footer');
    // }

    // public function edit_alokasi_bum(){
    //     $this->model_alokasi->edit_alokasi();
    //     redirect('page_korlap/alokasi');
    // }

    // public function hapus_alokasi($id){
    //     $this->model_alokasi->hapus_alokasi($id);
    //     redirect('page_korlap/alokasi');
    // }


    public function bantuan(){

    	
        if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {

            if ($this->uri->segment('3') == 'edit_bantuan') {
                return $this->edit_bantuan($this->uri->segment('4'));
            }
     
        }

        if (!empty($this->uri->segment('3'))) {
            if ($this->uri->segment('3') == 'add') {
                return $this->add_bantuan();
            }
        }

        $data['title'] = 'Data Bantuan';
        
        $data['bantuan'] = $this->model_bantuan->get_bantuan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_korlap');
        $this->load->view('korlap/bantuan/index');
        $this->load->view('template/footer');
    }
    
    public function add_bantuan(){
                $data['title'] = 'Tambah Data bantuan';
        
       
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_korlap');
        $this->load->view('korlap/bantuan/add');
        $this->load->view('template/footer');
    }

    public function add_bantuan_bum(){

        $this->model_bantuan->add_bantuan();
        redirect('page_korlap/bantuan');
    }

    public function edit_bantuan($id){

        $data['title'] = 'Data Bantuan';

        $data['bantuan'] = $this->db->get_where('bantuan', ['id_bantuan' => $id])->row();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_korlap');
        $this->load->view('korlap/bantuan/edit');
        $this->load->view('template/footer');
    }

    public function edit_bantuan_bum(){
        $this->model_bantuan->edit_bantuan();
        redirect('page_korlap/bantuan');
    }

    public function hapus_bantuan($id){
        $this->model_bantuan->hapus_bantuan($id);
        redirect('page_korlap/bantuan');
    }


  
    public function posko(){

        
        if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {

            if ($this->uri->segment('3') == 'edit_posko') {
                return $this->edit_posko($this->uri->segment('4'));
            }
     
        }

        if (!empty($this->uri->segment('3'))) {
            if ($this->uri->segment('3') == 'add') {
                return $this->add_posko();
            }
        }

        $data['title'] = 'Data posko';
        
        $data['posko'] = $this->model_posko->get_posko_korlap();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_korlap');
        $this->load->view('korlap/posko/index');
        $this->load->view('template/footer');
    }
    
    public function add_posko(){
                $data['title'] = 'Tambah Data posko';
        
       $data['bencana'] = ['Banjir', 'Gempa Bumi', 'Tsunami', 'Gunung Meletus'];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_korlap');
        $this->load->view('korlap/posko/add', $data);
        $this->load->view('template/footer');
    }

    public function add_posko_bum(){
        
        $this->model_posko->add_posko();
        redirect('page_korlap/posko');
    }

    public function edit_posko($id){

        $data['title'] = 'Data posko';

        $data['bencana'] = ['Banjir', 'Gempa Bumi', 'Tsunami', 'Gunung Meletus'];
        $data['posko'] = $this->db->get_where('posko', ['id_posko' => $id])->row();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_korlap');
        $this->load->view('korlap/posko/edit', $data);
        $this->load->view('template/footer');
    }

    public function edit_posko_bum(){
        $this->model_posko->edit_posko();
        redirect('page_korlap/posko');
    }

    public function hapus_posko($id){
        $this->model_posko->hapus_posko($id);
        redirect('page_korlap/posko');
    }




    
}

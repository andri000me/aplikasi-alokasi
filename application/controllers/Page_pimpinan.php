<?php
class Page_pimpinan extends CI_Controller{
    function __construct(){
        parent::__construct();

        //user bukan level 'pimpinan' ditolak
        if ($this->session->userdata('level') !== 'pimpinan')
            { redirect('auth/logout','refresh');}
        $this->load->model('model_alokasi');
        $this->load->model('model_bantuan');
        $this->load->model('model_posko');
        $this->load->model('model_korlap');
        $this->load->library('PDF');
    }
 

    function index(){

    	$data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_pimpinan');
        $this->load->view('page_pimpinan');
        $this->load->view('template/footer');
    }

    function laporan(){

        
        if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {

            if ($this->uri->segment('3') == 'edit_alokasi') {
                return $this->edit_alokasi($this->uri->segment('4'));
            }
     
        }

        $data['title'] = 'Dashboard';
        // $data['alokasi'] = $this->model_alokasi->get_alokasi_pimpinan();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_pimpinan');
        $this->load->view('pimpinan/laporan/index');
        $this->load->view('template/footer');
    }

    public function cari()
    {

        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');


$query = "
  SELECT * FROM alokasi
  JOIN posko ON alokasi.id_posko = posko.id_posko
  JOIN bantuan ON posko.id_bantuan = bantuan.id_bantuan
  WHERE `alokasi`.`tgl_alokasi` BETWEEN '$dari' AND '$sampai' 
";

$alokasi = $this->db->query($query)->result_array();


         $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
         $pdf->SetMargins(10,30,20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',22);
        // mencetak string 
        $pdf->Cell(190,13,'Laporan Data Alokasi',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(0,5,'Dari Tanggal '.$dari. ' Sampai Tanggal '.$sampai,0,1,'C');
        
      
        // Memberikan space kebawah agar tidak terlalu rapat


     $pdf->Cell(10,8,'',0,1);



        // Field
  $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,8,'No. ',1,0, 'C');
         $pdf->Cell(50,8,'Nama Alokasi',1,0, 'C');
        $pdf->Cell(40,8,'Posko',1,0, 'C');
        $pdf->Cell(30,8,'Tanggal Alokasi',1,0, 'C');
        $pdf->Cell(60,8,'Bantuan',1,1, 'C');
          $pdf->SetFont('Arial','',8);
$i=1;
foreach ($alokasi as $key) {
    $pdf->Cell(10,8,$i,1,0, 'C');
    $pdf->Cell(50,8,$key['nm_alokasi'],1,0, 'B');
    $pdf->Cell(40,8,$key['nm_posko'],1,0, 'B');
    $pdf->Cell(30,8,$key['tgl_alokasi'],1,0, 'C');
    $pdf->Cell(60,8,$key['nama_bantuan'],1,1, 'C');
$i++;
}
 


        








       
        $pdf->Output();
        $pdf->Output();

    }
    
 //    public function add_alokasi($id){
 //                $data['title'] = 'Tambah Data Alokasi';
 //         $data['posko'] = $this->model_posko->get_posko_pimpinan();
 //          // $data['bantuan'] = $this->model_bantuan->get_bantuan();
 //          $data['alokasi'] = $this->db->get_where('posko', ['id_posko' => $id])->row();
 //        $this->load->view('template/header', $data);
 //        $this->load->view('template/sidebar_pimpinan');
 //        $this->load->view('pimpinan/alokasi/add', $data);
 //        $this->load->view('template/footer');
 //    }

 //    public function add_alokasi_bum(){
 //        $this->model_alokasi->add_alokasi();
 //        $this->model_alokasi->update_posko();
 //        redirect('page_pimpinan/alokasi');
 //    }

 //    public function edit_alokasi($id){

 //        $data['title'] = 'Dashboard';

 //         $data['alokasi'] = $this->db->get_where('posko', ['id_posko' => $id])->row();

 // $data['posko'] = $this->model_posko->get_posko_pimpinan();
 // // $data['bantuan'] = $this->model_bantuan->get_bantuan();
 //        $this->load->view('template/header', $data);
 //        $this->load->view('template/sidebar_pimpinan');
 //        $this->load->view('pimpinan/alokasi/edit');
 //        $this->load->view('template/footer');
 //    }

 //    public function edit_alokasi_bum(){
 //        $this->model_alokasi->edit_alokasi();
 //        redirect('page_pimpinan/alokasi');
 //    }

 //    public function hapus_alokasi($id){
 //        $this->model_alokasi->hapus_alokasi($id);
 //        redirect('page_pimpinan/alokasi');
 //    }




    
}

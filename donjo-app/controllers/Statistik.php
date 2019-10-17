<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Statistik extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('laporan_penduduk_model');
		$this->load->model('pamong_model');
		$this->load->model('program_bantuan_model');
		$this->load->model('header_model');
		$_SESSION['per_page'] = 500;
		$this->modul_ini = 3;
	}


	public function index($lap = 0, $o = 0)
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		// $data['kategori'] untuk pengaturan penampilan kelompok statistik di laman statistik
		$data['main'] = $this->laporan_penduduk_model->list_data($lap, $o);
		$data['list_dusun'] = $this->laporan_penduduk_model->list_dusun();
		$data['lap'] = $lap;
		$data['judul_kelompok'] = "Jenis Kelompok";
		$data['o'] = $o;
		$this->get_data_stat($data, $lap);
		$nav['act'] = 3;
		$nav['act_sub'] = 27;
		$header = $this->header_model->get_data();
		$this->load->view('header', $header);
		$this->load->view('nav', $nav);
		$this->load->view('statistik/penduduk', $data);
		$this->load->view('footer');
	}


	private function get_cluster_session()
	{
		$list_session = array('dusun', 'rw', 'rt');
		foreach ($list_session as $session) {
			$data[$session] = $this->session->userdata($session) ?:'';
		}

		if (!empty($data['dusun'])) {
			$dusun = $data['dusun'];
			$data['list_rw'] = $this->laporan_penduduk_model->list_rw($dusun);

			if (!empty($data['rw'])) {
				$rw = $data['rw'];
				$data['list_rt'] = $this->laporan_penduduk_model->list_rt($dusun, $rw);
			}
		}
		return $data;
	}

	private function clear_session()
	{
		unset($_SESSION['log']);
		unset($_SESSION['cari']);
		unset($_SESSION['filter']);
		unset($_SESSION['sex']);
		unset($_SESSION['warganegara']);
		unset($_SESSION['cacat']);
		unset($_SESSION['menahun']);
		unset($_SESSION['golongan_darah']);
		unset($_SESSION['dusun']);
		unset($_SESSION['rw']);
		unset($_SESSION['rt']);
		unset($_SESSION['agama']);
		unset($_SESSION['umur_min']);
		unset($_SESSION['umur_max']);
		unset($_SESSION['pekerjaan_id']);
		unset($_SESSION['status']);
		unset($_SESSION['status_penduduk']);
		unset($_SESSION['status_ktp']);
	}

	public function clear($lap = 0)
	{
		$this->clear_session();
		redirect("statistik/index/$lap");
	}

	public function graph($lap = 0)
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_dusun'] = $this->laporan_penduduk_model->list_dusun();
		$data['lap'] = $lap;
		$this->get_data_stat($data, $lap);
		$nav['act'] = 3;
		$nav['act_sub'] = 27;
		$header = $this->header_model->get_data();

		$this->load->view('header', $header);
		$this->load->view('nav', $nav);
		$this->load->view('statistik/penduduk_graph', $data);
		$this->load->view('footer');
	}


        public function graph_gis_desa($tipe = 0, $lap = 0, $desa = '')
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_dusun'] = $this->laporan_penduduk_model->list_dusun();
		$data['lap'] = $lap;
		$this->get_data_stat($data, $lap);
		
		$this->load->view('statistik/penduduk_graph_gis', $data);
	}

        public function pie($lap = 0)
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_dusun'] = $this->laporan_penduduk_model->list_dusun();
		$data['lap'] = $lap;
		$this->get_data_stat($data, $lap);
		$nav['act'] = 3;
		$nav['act_sub'] = 27;
		$header = $this->header_model->get_data();

		$this->load->view('header', $header);
		$this->load->view('nav', $nav);
		$this->load->view('statistik/penduduk_pie', $data);
		$this->load->view('footer');
	}

       
        public function pie_gis_desa($tipe = 0, $lap = 0, $desa = '')
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_dusun'] = $this->laporan_penduduk_model->list_dusun();
		$data['lap'] = $lap;
		$this->get_data_stat($data, $lap);
		
		$this->load->view('statistik/penduduk_pie', $data);
		
	}

        private function get_data_stat(&$data, $lap)
	{
		$data['stat'] = $this->laporan_penduduk_model->judul_statistik($lap);
		$data['list_bantuan'] = $this->program_bantuan_model->list_program(0);
		if ($lap > 50)
		{
			// Untuk program bantuan, $lap berbentuk '50<program_id>'
			$program_id = preg_replace('/^50/', '', $lap);
			$data['program'] = $this->program_bantuan_model->get_sasaran($program_id);
			$data['judul_kelompok'] = $data['program']['judul_sasaran'];
			$data['kategori'] = 'bantuan';
		}
		elseif ($lap > 20 OR "$lap" == 'kelas_sosial')
		{
			$data['kategori'] = 'keluarga';
		}
		else
		{
			$data['kategori'] = 'penduduk';
		}
	}

	public function dialog_cetak($lap = 0)
	{
		$data['aksi'] = "Cetak";
		$data['pamong'] = $this->pamong_model->list_data(true);
		$data['form_action'] = site_url("statistik/cetak/$lap");
		$this->load->view('statistik/ajax_cetak', $data);
	}

	public function dialog_unduh($lap = 0)
	{
		$data['aksi'] = "Unduh";
		$data['pamong'] = $this->pamong_model->list_data(true);
		$data['form_action'] = site_url("statistik/unduh/$lap");
		$this->load->view('statistik/ajax_cetak', $data);
	}

	public function cetak($lap = 0)
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['lap'] = $lap;
		$data['stat'] = $this->laporan_penduduk_model->judul_statistik($lap);
		$data['config'] = $this->laporan_penduduk_model->get_config();
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['pamong_ttd'] = $this->pamong_model->get_data($_POST['pamong_ttd']);
		$data['laporan_no'] = $this->input->post('laporan_no');
		$this->load->view('statistik/penduduk_print', $data);
	}

	public function unduh($lap = 0)
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['aksi'] = 'unduh';
		$data['lap'] = $lap;
		$data['stat'] = $this->laporan_penduduk_model->judul_statistik($lap);
		$data['filename'] = underscore($data['stat']);
		$data['config']  = $this->laporan_penduduk_model->get_config();
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['pamong_ttd'] = $this->pamong_model->get_data($_POST['pamong_ttd']);
		$data['laporan_no'] = $this->input->post('laporan_no');
		$this->load->view('statistik/penduduk_excel', $data);
	}

	public function rentang_umur()
	{
		$data['lap'] = 13;
		$data['main'] = $this->laporan_penduduk_model->list_data_rentang();

		$header = $this->header_model->get_data();
		$nav['act'] = 3;
		$nav['act_sub'] = 27;

		$this->load->view('header', $header);
		$this->load->view('nav', $nav);
		$this->load->view('statistik/rentang_umur', $data);
		$this->load->view('footer');
	}

	public function form_rentang($id = 0)
	{
		if ($id == 0)
		{
			$data['form_action'] = site_url("statistik/rentang_insert");
			$data['rentang'] = $this->laporan_penduduk_model->get_rentang_terakhir();
			$data['rentang']['nama'] = "";
			$data['rentang']['sampai'] = "";
		}
		else
		{
			$data['form_action'] = site_url("statistik/rentang_update/$id");
			$data['rentang'] = $this->laporan_penduduk_model->get_rentang($id);
		}
		$this->load->view('statistik/ajax_rentang_form', $data);

	}

	public function rentang_insert()
	{
		$data['insert'] = $this->laporan_penduduk_model->insert_rentang();
		redirect('statistik/rentang_umur');
	}

	public function rentang_update($id = 0)
	{
		$this->laporan_penduduk_model->update_rentang($id);
		redirect('statistik/rentang_umur');
	}

	public function rentang_delete($id = 0)
	{
		$this->redirect_hak_akses('h', 'statistik/rentang_umur');
		$this->laporan_penduduk_model->delete_rentang($id);
		redirect('statistik/rentang_umur');
	}

	public function delete_all_rentang()
	{
		$this->redirect_hak_akses('h', 'statistik/rentang_umur');
		$this->laporan_penduduk_model->delete_all_rentang();
		redirect('statistik/rentang_umur');
	}

	public function dusun($tipe = 0, $lap = 0)
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$this->session->unset_userdata('rw');
		$this->session->unset_userdata('rt');
		$dusun = $this->input->post('dusun');
		if ($dusun)
			$this->session->set_userdata('dusun', $dusun);
		else
			$this->session->unset_userdata('dusun');
		redirect("statistik/$tipe_stat/$lap");
	}

	public function rw($tipe = 0, $lap = 0)
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$this->session->unset_userdata('rt');
		$rw = $this->input->post('rw');
		if ($rw)
			$this->session->set_userdata('rw', $rw);
		else
			$this->session->unset_userdata('rw');
		redirect("statistik/$tipe_stat/$lap");
	}

	public function rt($tipe = 0, $lap = 0)
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$rt = $this->input->post('rt');
		if ($rt)
			$this->session->set_userdata('rt', $rt);
		else
			$this->session->unset_userdata('rt');
		redirect("statistik/$tipe_stat/$lap");
	}

	private function get_tipe_statistik($index)
	{
		$tipe_stat = array('index', 'graph', 'pie');
		return $tipe_stat[$index];
	}

       public function load_graph_gis_dusun($tipe = 0, $lap = 0, $dusun = '' )
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_dusun'] = $this->laporan_penduduk_model->list_dusun();
		$data['lap'] = $lap;
                $data['dusun'] = $dusun;
                $this->get_data_stat($data, $lap, $dusun);
               	$this->load->view('statistik/penduduk_graph_gis', $data);
		
	}

        public function load_pie_gis_dusun($tipe = 0, $lap = 0, $dusun = '')
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_dusun'] = $this->laporan_penduduk_model->list_dusun();
		$data['lap'] = $lap;
                $data['dusun'] = $dusun;
		$this->get_data_stat($data, $lap);
		
		$this->load->view('statistik/penduduk_pie_gis', $data);
	}

        public function graph_gis_dusun($tipe = 0, $lap = 0, $dusun = '' )
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$this->session->unset_userdata('rw');
		$this->session->unset_userdata('rt');
		$dusun = $dusun;
		if ($dusun)
			$this->session->set_userdata('dusun', $dusun);
		else
			$this->session->unset_userdata('dusun');

		redirect("statistik/load_graph_gis_dusun/$tipe_stat/$lap/$dusun");
	}

        public function pie_gis_dusun($tipe = 0, $lap = 0, $dusun = '' )
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$this->session->unset_userdata('rw');
		$this->session->unset_userdata('rt');
		$dusun = $dusun;
		if ($dusun)
			$this->session->set_userdata('dusun', $dusun);
		else
			$this->session->unset_userdata('dusun');

		redirect("statistik/load_pie_gis_dusun/$tipe_stat/$lap/$dusun");
	}

        public function load_graph_gis_rw($tipe = 0, $lap = 0, $dusun = '', $rw = '' )
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_rw'] = $this->laporan_penduduk_model->list_rw();
		$data['lap'] = $lap;
                $data['dusun'] = $dusun;
                $data['rw'] = $rw;
                $this->get_data_stat($data, $lap, $rw);
               	$this->load->view('statistik/penduduk_graph_gis', $data);
		
	}

        public function load_pie_gis_rw($tipe = 0, $lap = 0, $dusun = '', $rw = '')
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_rw'] = $this->laporan_penduduk_model->list_rw();
		$data['lap'] = $lap;
                $data['dusun'] = $dusun;
                $data['rw'] = $rw;
		$this->get_data_stat($data, $lap);
		
		$this->load->view('statistik/penduduk_pie_gis', $data);
	}

        public function graph_gis_rw($tipe = 0, $lap = 0, $dusun = '', $rw = '' )
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$this->session->unset_userdata('rt');
                $dusun = $dusun;
		$rw = $rw;
		if ($rw)
                        
			$this->session->set_userdata('rw', $rw);
		else
                        
			$this->session->unset_userdata('rw');

		redirect("statistik/load_graph_gis_rw/$tipe_stat/$lap/$dusun/$rw");
	}

        public function pie_gis_rw($tipe = 0, $lap = 0, $dusun = '', $rw = '' )
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$this->session->unset_userdata('rt');
		$dusun = $dusun;
		$rw = $rw;
		if ($rw)
                        
			$this->session->set_userdata('rw', $rw);
		else
                        
			$this->session->unset_userdata('rw');

		redirect("statistik/load_pie_gis_rw/$tipe_stat/$lap/$dusun/$rw");
	}


        public function load_graph_gis_rt($tipe = 0, $lap = 0, $dusun = '', $rw = '', $rt = '' )
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_rt'] = $this->laporan_penduduk_model->list_rt();
		$data['lap'] = $lap;
                $data['dusun'] = $dusun;
                $data['rw'] = $rw;
                $data['rt'] = $rt;
                $this->get_data_stat($data, $lap, $rt);
               	$this->load->view('statistik/penduduk_graph_gis', $data);
		
	}

        public function load_pie_gis_rt($tipe = 0, $lap = 0, $dusun = '', $rw = '', $rt = '')
	{
		$cluster_session = $this->get_cluster_session();
		foreach ($cluster_session as $key => $value) {
			$data[$key] = $value;
		}
		$data['main'] = $this->laporan_penduduk_model->list_data($lap);
		$data['list_rt'] = $this->laporan_penduduk_model->list_rt();
		$data['lap'] = $lap;
                $data['dusun'] = $dusun;
                $data['rw'] = $rw;
                $data['rt'] = $rt;
		$this->get_data_stat($data, $lap);
		
		$this->load->view('statistik/penduduk_pie_gis', $data);
	}

        public function graph_gis_rt($tipe = 0, $lap = 0, $dusun = '', $rw = '', $rt = '' )
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$dusun = $dusun;
                $rw = $rw;
		$rt = $rt;
		if ($rt)
			$this->session->set_userdata('rt', $rt);
		else
			$this->session->unset_userdata('rt');

		redirect("statistik/load_graph_gis_rt/$tipe_stat/$lap/$dusun/$rw/$rt");
	}

        public function pie_gis_rt($tipe = 0, $lap = 0, $dusun = '', $rw = '', $rt = '' )
	{
		$tipe_stat = $this->get_tipe_statistik($tipe);
		$dusun = $dusun;
                $rw = $rw;
		$rt = $rt;
		if ($rt)
			$this->session->set_userdata('rt', $rt);
		else
			$this->session->unset_userdata('rt');

		redirect("statistik/load_pie_gis_rt/$tipe_stat/$lap/$dusun/$rw/$rt");
	}
}

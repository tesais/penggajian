<?php

class DataAbsensi extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Data Absensi Pegawai";

		// Cek apakah filter bulan diinputkan
		if (isset($_GET['bulan']) && $_GET['bulan'] != '') {
			$bulan = $_GET['bulan'];

			// Query dengan filter bulan
			$data['absensi'] = $this->db->query("
				SELECT 
					data_kehadiran.*, 
					data_kehadiran.nama_karyawan AS nama_pegawai, 
					data_kehadiran.jenis_kelamin, 
					data_kehadiran.nama_jabatan AS jabatan
				FROM data_kehadiran
				WHERE data_kehadiran.bulan = '$bulan'
				ORDER BY data_kehadiran.nama_karyawan ASC
			")->result();
		} else {
			// Jika tidak ada filter, tampilkan semua data
			$data['absensi'] = $this->db->query("
				SELECT 
					data_kehadiran.*, 
					data_kehadiran.nama_karyawan AS nama_pegawai, 
					data_kehadiran.jenis_kelamin, 
					data_kehadiran.nama_jabatan AS jabatan
				FROM data_kehadiran
				ORDER BY data_kehadiran.nama_karyawan ASC
			")->result();
		}

		// Kirim data ke view
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dataAbsensi', $data);
		$this->load->view('templates_admin/footer');
	}
}
?>

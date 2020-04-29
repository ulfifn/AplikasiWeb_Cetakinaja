<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahCetakinaja extends CI_Controller 
{

	
	public function index()
    {
     
    $this->load->view('halaman/dashboard');
	
	}

	public function TambahProfil()
    {
       
 
    $this->load->view('Tambah/Tambahprofil');
	
	}
	public function Tambahclient()
    {
        
 
    $this->load->view('Tambah/TambahClient',);
	
	}
	public function Tambahdesigner()
    {
       
 
    $this->load->view('Tambah/Tambahdesigner' );
	
	}
	public function lokasi()
    {
    $this->load->view('halaman/lokasi');
	
	}
	public function TambahPesanan()
    {
       
 
    $this->load->view('Tambah/TambahPesanan');
	
	}
	public function TambahStruktur()
    {
       
 
    $this->load->view('Tambah/TambahStruktur');
	
	}

	public function Chatclient()
    {
    $this->load->view('Tambah/Chatclient');
	}
	public function About()
    {
    $this->load->view('halaman/About');
	}
	
	public function TambahUser()
    {
    $this->load->view('Tambah/TambahUser');
	}
}


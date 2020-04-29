<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetakinaja extends CI_Controller 
{

	
	public function index()
    {
     
    $this->load->view('halaman/dashboard');
	
	}

	public function Profil()
    {
       
 
    $this->load->view('halaman/Profil');
	
	}
	public function Client()
    {
        
 
    $this->load->view('halaman/Client',);
	
	}
	public function Designer()
    {
       
 
    $this->load->view('halaman/Designer' );
	
	}
	public function Lokasi()
    {
    $this->load->view('halaman/Lokasi');
	
	}
	public function Pesanan()
    {
       
 
    $this->load->view('halaman/Pesanan');
	
	}
	public function Struktur()
    {
       
 
    $this->load->view('halaman/Struktur');
	
	}

	public function Chatclient()
    {
    $this->load->view('halaman/Chatclient');
	}
	public function About()
    {
    $this->load->view('halaman/About');
	}
	public function Contact()
    {
    $this->load->view('halaman/Contact');
	}
	public function User()
    {
    $this->load->view('halaman/User');
	}
}


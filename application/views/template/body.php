<?php
$this->load->view("template/header") ;
$this->load->view("template/sidebar") ;
if($session_data["full_display"]) $this->load->view("template/full_display") ;
$this->load->view($view) ;
$this->load->view("template/footer") ;

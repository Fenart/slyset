<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class melo_achats extends CI_Controller {

    var $data;

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(true);
        $this->layout->ajouter_css('slyset');
        $this->layout->ajouter_css('colorbox');
        $this->layout->ajouter_css('popin');


        //	$this->layout->ajouter_css('shadowbox');
        //   $this->layout->ajouter_js('shadowbox/shadowbox');
        $this->layout->ajouter_js('jquery.tablesorter');
        $this->layout->ajouter_js('jquery.placeheld.min');
        $this->layout->ajouter_js('jquery.colorbox');


        $this->load->model(array('user_model', 'mc_actus_model', 'achat'));
        $this->load->helper('form');

        $this->layout->set_id_background('achats');


        $this->user_id = (is_numeric($this->uri->segment(2))) ? $this->uri->segment(2) : $this->uri->segment(3);

        $sub_data = array();
        $sub_data['profile'] = $this->user_model->getUser($this->user_id);

        $this->data = array(
            'sidebar_left' => $this->load->view('sidebars/sidebar_left', '', TRUE),
            'sidebar_right' => $this->load->view('sidebars/sidebar_right', $sub_data, TRUE)
        );
    }

    public function index($user_id) {
        $uid = $this->session->userdata('uid');
        $infos_profile = $this->user_model->getUser($user_id);

        if ($user_id == $uid) {
            $this->page($infos_profile);
        } else {
            show_404();
        }
    }

    public function page($infos_profile) {

        // $data = array(
        //      'popin'  => $this->load->view('achat/pi_ta_infos', '', TRUE) 
        //    );
        $data = $this->data;
        $uid = $this->session->userdata('uid');

        $user_visited = (empty($infos_profile)) ? $uid : $infos_profile->id;
        if (!empty($infos_profile)) {
            $data['infos_profile'] = $infos_profile;
        }

        $data['cmd'] = $this->achat->get_achat($user_visited);
        //print $this->input->post("article-all");
        $data['total_album_panier'] = 0;
        $data['total_morceaux_panier'] = 0;
        $data['total_document_panier'] = 0;
        $data['total_album_history'] = 0;
        $data['total_morceaux_history'] = 0;
        $data['total_document_history'] = 0;

        foreach ($data['cmd'] as $commande) {
            if ($commande->status == "P" && $commande->Albums_id != null) {
                $data['total_album_panier'] = $data['total_album_panier'] + count($commande);
            }

            if ($commande->status == "P" && $commande->Morceaux_id != null) {
                $data['total_morceaux_panier'] = $data['total_morceaux_panier'] + count($commande);
            }
            if ($commande->status == "P" && $commande->Documents_id != null) {
                $data['total_document_panier'] = $data['total_document_panier'] + count($commande);
            }
            if ($commande->status == "V" && $commande->Albums_id != null) {
                $data['total_album_history'] = $data['total_album_history'] + count($commande);
            }
            if ($commande->status == "V" && $commande->Morceaux_id != null) {
                $data['total_morceaux_history'] = $data['total_morceaux_history'] + count($commande);
            }
            if ($commande->status == "V" && $commande->Documents_id != null) {
                $data['total_document_history'] = $data['total_document_history'] + count($commande);
            }
        }
        $this->layout->view('achat/melo_achats', $data);
    }

    public function delete_panier() {

        $this->achat->delete_panier($this->input->post("commande"));
    }

}
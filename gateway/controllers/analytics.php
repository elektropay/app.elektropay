<?php

/**
 * Analytics Controller
 *
 *
 * @version 1.0
 * @author Richard Rowe
 * @package Custom

 */
class analytics extends Controller
{

    function __construct()
    {
        parent::__construct();

        // perform control-panel specific loads
        CPLoader();
    }

    /**
     * Analytics
     *
     * Reports Overview
     */
//    function index()
//    {
//
//        $this->navigation->PageTitle('Reports');
//        // get log
//        $this->load->model('log_model');
//        $log = $this->log_model->GetClientLog($this->user->Get('client_id'), '', '', 'N');
//        $logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
//        $data['log'] = $log;
//        $data['logcount'] = $logcount;
//        $this->load->view('cp/reports_orders', $data);
//        ini_set('display_errors', 1);
//    }

    function index()
    {
        $this->load->model('charge_model');

        $this->navigation->PageTitle('Analytics');
        $this->load->model('cp/dataset', 'dataset');

        $columns = array(

            array(
                'name' => 'Amount',
                'sort_column' => 'amount',
                'type' => 'text',
                'width' => '10%',
                'filter' => 'amount'),
            array(
                'name' => 'Status',
                'sort_column' => 'status',
                'type' => 'select',
                'options' => array('1' => 'ok', '2' => 'refunded', '0' => 'failed', '3' => 'failed-repeat'),
                'width' => '12%',
                'filter' => 'status'),

            array(
                'name' => 'Customer Name',
                'sort_column' => 'customers.last_name',
                'type' => 'text',
                'width' => '42%',
                'filter' => 'customer_last_name'),
            array(
                'name' => 'Type',
                'sort_column' => 'card_last_four',
                'type' => 'text',
                'width' => '13%',
                'filter' => 'card_last_four'),
            array(
                'name' => 'Date',
                'sort_column' => 'timestamp',
                'type' => 'date',
                'width' => '28%',
                'filter' => 'timestamp',
                'field_start_date' => 'start_date',
                'field_end_date' => 'end_date'
            )
        );

        // set total rows by hand to reduce database load
        $result = $this->db->select('COUNT(order_id) AS total_rows', FALSE)
                ->from('orders')
                ->where('client_id', $this->user->Get('client_id'))
                ->get();
        $this->dataset->total_rows((int) $result->row()->total_rows);

        if ($this->dataset->total_rows > 5000) {
            // we're going to have a memory error with this much data
            $this->dataset->use_total_rows();
        }

        $this->dataset->Initialize('charge_model', 'GetCharges', $columns);
        $this->load->model('charge_model');

        // get total charges
        $total_amount = $this->charge_model->GetTotalAmount($this->user->Get('client_id'), $this->dataset->params);

        // sidebar
        $this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-eye"></i> Recurring</span>','transactions/all_recurring');
        $this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i>Charge</span>','transactions/create');


        $total_clients = $this->charge_model->getActiveClientCount();
        $total_transaction = $this->charge_model->getTransactions();
        $total_failed_transactions = $this->charge_model->GetFaildTransactions(NULL, TRUE);

        $data = array(
            'total_amount' => $total_amount,
            'total_clients' => $total_clients,
            'total_transaction' => $total_transaction,
            'total_failed_transactions' => $total_failed_transactions
        );

        $this->load->view(branded_view('cp/analytics'), $data);
    }

    function get_order_data()
    {
        $this->load->model('charge_model');
        $type = $_POST['type'];
        $revenue = $this->charge_model->GetRevenue($this->user->Get('client_id'), $type);
        echo json_encode($revenue);
        exit();
    }

}

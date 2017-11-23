<?php

/**
 * Charge Model
 *
 * Contains all the methods used to create and search orders.
 *
 * @version 1.0
 * @author Electric Function, Inc.
 * @package OpenGateway

 */
class Charge_model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Create a new order.
     *
     * Creates a new order.
     *
     * @param int $client_id The client ID of the gateway client.
     * @param int $gateway_id The gateway to process this charge with.
     * @param float $amount The amount of the order
     * @param array $credit_card The credit card information
     * @param int $subscription_id The ID # of the recurring charge
     * @param int $customer_id The customer ID to link this order to
     * @param float $customer_ip The IP address of the purchasing customer
     * @param int $coupon_id
     *
     * @return int $order_id The new order id
     */
    function CreateNewOrder($client_id, $gateway_id, $amount, $credit_card = array(), $subscription_id = 0, $customer_id = FALSE, $customer_ip = FALSE, $coupon_id = FALSE)
    {
        $timestamp = date('Y-m-d H:i:s');
        $insert_data = array(
            'client_id' => $client_id,
            'gateway_id' => $gateway_id,
            'subscription_id' => $subscription_id,
            'amount' => $amount,
            'coupon_id' => $coupon_id,
            'timestamp' => $timestamp,
            'refunded' => '0',
            'refund_date' => '0000-00-00 00:00:00'
        );

        if (isset($credit_card['card_num'])) {
            $insert_data['card_last_four'] = substr($credit_card['card_num'], -4, 4);
        }

        if (isset($credit_card['card_type'])) {
            $insert_data['card_type'] = $credit_card['card_type'];
        }

        if (isset($customer_ip) and ! empty($customer_ip)) {
            $insert_data['customer_ip_address'] = $customer_ip;
        }

        if (isset($customer_id)) {
            $insert_data['customer_id'] = $customer_id;
        }

        $this->db->insert('orders', $insert_data);

        return $this->db->insert_id();
    }

    /**
     * Mark Refunded
     *
     * Marks a charge as refunded now
     *
     * @param $client_id The client ID
     * @param $charge_id The charge ID to mark refunded
     *
     * @return boolean TRUE upon success
     */
    function MarkRefunded($charge_id)
    {
        $update_data = array(
            'refunded' => '1',
            'refund_date' => date('Y-m-d H:i:s')
        );

        $this->db->update('orders', $update_data, array('order_id' => $charge_id));
    }

    /**
     * Get Revenue by Day
     *
     * @param int $client_id The client ID
     * @param int $back_days (Optional) How many days to go back?  Default: 30
     * @return array Each day as key, total revenue as value
     */
    function GetRevenueByDay($client_id, $back_days = 30)
    {
        $this->db->select('SUM(orders.amount) AS total_amount');
        $this->db->select('DATE(orders.timestamp) AS day');
        $this->db->where('orders.client_id', $client_id);
        $this->db->where('orders.timestamp >', date('Y-m-d', time() - (60 * 60 * 24 * $back_days)));
        $this->db->where('orders.status', '1');
        $this->db->group_by('DATE(orders.timestamp)');
        $result = $this->db->get('orders');

        $revenue = array();
        foreach ($result->result_array() as $row) {
            $revenue[] = array(
                'revenue' => $row['total_amount'],
                'day' => $row['day']
            );
        }

        return $revenue;
    }

    function GetRevenue($client_id, $type)
    {

        $this->db->select('SUM(orders.amount) AS total_amount');
        $this->db->select('COUNT(orders.order_id) AS total_orders');
        if ($type == 'year') {
            $this->db->like('timestamp', date("Y"));
        }
        if ($type == 'month') {
            $this->db->select("DATE_FORMAT(orders.timestamp, '%M') AS month", FALSE);
        } else {
            $this->db->select('DATE(orders.timestamp) AS day');
        }
        if ($type == 'week') {
            $this->db->where('timestamp >=', date('Y-m-d', strtotime(date('Y-m-d') . ' -7 day')));
            $this->db->where('timestamp <=', date('Y-m-d'));
        }
        $this->db->where('orders.client_id', $client_id);
        if ($type == 'month') {
            $this->db->like('timestamp', date("Y"));
            $this->db->group_by("DATE_FORMAT(orders.timestamp, '%b')");
        } else {
            $this->db->group_by('DATE(orders.timestamp)');
        }
        $result = $this->db->get('orders');

        $revenue = array();
        foreach ($result->result_array() as $row) {
            if ($type == 'month') {
                $monthData = array(
                    'January' => 0,
                    'February' => 0,
                    'March' => 0,
                    'April' => 0,
                    'May' => 0,
                    'June' => 0,
                    'July' => 0,
                    'August' => 0,
                    'September' => 0,
                    'October' => 0,
                    'November' => 0,
                    'December' => 0,
                );

                foreach ($result->result_array() as $row) {
                    switch ($row['month']) {
                        case "January":
                            $monthData['January'] = $row['total_amount'];
                            break;
                        case "February":
                            $monthData['February'] = $row['total_amount'];
                            break;
                        case "March":
                            $monthData['March'] = $row['total_amount'];
                            break;
                        case "April":
                            $monthData['April'] = $row['total_amount'];
                            break;
                        case "May":
                            $monthData['May'] = $row['total_amount'];
                            break;
                        case "June":
                            $monthData['June'] = $row['total_amount'];
                            break;
                        case "July":
                            $monthData['July'] = $row['total_amount'];
                            break;
                        case "August":
                            $monthData['August'] = $row['total_amount'];
                            break;
                        case "September":
                            $monthData['September'] = $row['total_amount'];
                            break;
                        case "October":
                            $monthData['October'] = $row['total_amount'];
                            break;
                        case "November":
                            $monthData['November'] = $row['total_amount'];
                            break;
                        case "December":
                            $monthData['December'] = $row['total_amount'];

                            break;
                    }
                }

                foreach ($monthData as $month => $total_amount) {
                    $revenue[] = array(
                        'y' => round($total_amount, 2),
                        'x' => $month
                    );
                }
            } else {
                $revenue[] = array(
                    'y' => $row['total_amount'],
                    'x' => $row['day']
                );
            }
        }

        return $revenue;
    }

    function GetMonthByRevenue($client_id, $type)
    {

        $this->db->select('SUM(orders.amount) AS total_amount');
        $this->db->select('COUNT(orders.order_id) AS total_orders');
        $this->db->select("DATE_FORMAT(orders.timestamp, '%M') AS month", FALSE);
        $this->db->select("DATE_FORMAT(orders.timestamp, '%Y') AS year", FALSE);
        $this->db->where('orders.client_id', $client_id);
        $this->db->like('timestamp', date("Y"));
        $this->db->group_by("DATE_FORMAT(orders.timestamp, '%b')");
        $result = $this->db->get('orders');

        $revenue = array();
        foreach ($result->result_array() as $row) {
            $monthData = array(
                'January' => array(0, 0),
                'February' => array(0, 0),
                'March' => array(0, 0),
                'April' => array(0, 0),
                'May' => array(0, 0),
                'June' => array(0, 0),
                'July' => array(0, 0),
                'August' => array(0, 0),
                'September' => array(0, 0),
                'October' => array(0, 0),
                'November' => array(0, 0),
                'December' => array(0, 0),
            );

            foreach ($result->result_array() as $row) {
                switch ($row['month']) {
                    case "January":
                        $monthData['January'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "February":
                        $monthData['February'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "March":
                        $monthData['March'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "April":
                        $monthData['April'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "May":
                        $monthData['May'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "June":
                        $monthData['June'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "July":
                        $monthData['July'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "August":
                        $monthData['August'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "September":
                        $monthData['September'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "October":
                        $monthData['October'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "November":
                        $monthData['November'] = array($row['total_amount'], $row['total_orders']);
                        break;
                    case "December":
                        $monthData['December'] = array($row['total_amount'], $row['total_orders']);

                        break;
                }
            }
        }

        return $monthData;
    }

    function GetFaildTransactions($client_id, $graph = FALSE)
    {
        $this->db->select('COUNT(orders.order_id) AS total_amount');
        $this->db->select('DATE(orders.timestamp) AS day');
        if (isset($client_id)) {
            $this->db->where('orders.client_id', $client_id);
            $this->db->group_by('DATE(orders.timestamp)');
        }
        $this->db->where('orders.status', '1');
        $result = $this->db->get('orders');

        if (!$graph) {
            $revenue = array();
            foreach ($result->result_array() as $row) {
                $revenue[] = array(
                    'y' => $row['total_amount'],
                    'x' => $row['day']
                );
            }

            return $revenue;
        }

        if ($result->num_rows() > 0) {
            $order = $result->row_array();

            if (!empty($order['total_amount'])) {
                return $order['total_amount'];
            }
        }

        return 0;
    }

    function GetSuccessfulTransactions($client_id)
    {
        $this->db->select('COUNT(orders.order_id) AS total_amount');
        $this->db->select('DATE(orders.timestamp) AS day');
        $this->db->where('orders.client_id', $client_id);
        $this->db->where('orders.status', '0');
        $this->db->group_by('DATE(orders.timestamp)');
        $result = $this->db->get('orders');

        $revenue = array();
        foreach ($result->result_array() as $row) {
            $revenue[] = array(
                'y' => $row['total_amount'],
                'x' => $row['day']
            );
        }

        return $revenue;
    }

    function getActiveClientCount()
    {
        $this->db->select('COUNT(client_id) AS total_clients');
        $this->db->where('clients.deleted', '0');
        $result = $this->db->get('clients');

        if ($result->num_rows() > 0) {
            $order = $result->row_array();

            if (!empty($order['total_clients'])) {
                return $order['total_clients'];
            }
        }

        return 0;
    }

    function getTransactions()
    {
        $this->db->select('COUNT(orders.order_id) AS total_transaction');
        $result = $this->db->get('orders');

        if ($result->num_rows() > 0) {
            $order = $result->row_array();

            if (!empty($order['total_transaction'])) {
                return $order['total_transaction'];
            }
        }

        return 0;
    }

    public function getRevenueByCountry()
    {
        $result = $this->db->select('SUM(orders.amount) AS total_amount')
                ->select('COUNT(orders.customer_id) AS total_customer')
                ->select('orders.*,customers.*,countries.*')
                ->where('orders.status', '0')
                ->group_by('countries.country_id')
                ->from('orders')
                ->join('customers', 'customers.customer_id = orders.customer_id', 'left')
                ->join('countries', 'countries.country_id = customers.country', 'left')
                ->get();
        $data = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    /**
     * Get total matching revenue
     *
     * Returns the total matching revenue with the relevant filters (same as GetCharges)
     *
     * @param int $client_id The client ID.
     * @param int $params['gateway_id'] The gateway ID used for the order. Optional.
     * @param date $params['start_date'] Only orders after or on this date will be returned. Optional.
     * @param date $params['end_date'] Only orders before or on this date will be returned. Optional.
     * @param int $params['customer_id'] The customer id associated with the order. Optional.
     * @param string $params['customer_internal_id'] The customer's internal id associated with the order. Optional.
     * @param int $params['id'] The charge ID.  Optional.
     * @param string $params['amount'] The amount of the charge.  Optional.
     * @param string $params['customer_last_name'] The last name of the customer.  Optional.
     * @param int $params['status'] Set to ok/failed to filter results.  Optional.
     * @param boolean $params['recurring_only'] Returns only orders that are part of a recurring subscription. Optional.
     *
     * @return string|bool Total amount
     */
    function GetTotalAmount($client_id, $params)
    {
        // Make sure they only get their own charges
        $this->db->where('orders.client_id', $client_id);

        // Check which search paramaters are set

        if (isset($params['gateway_id'])) {
            $this->db->where('orders.gateway_id', $params['gateway_id']);
        }

        $this->load->library('field_validation');

        if (isset($params['start_date'])) {
            $valid_date = $this->field_validation->ValidateDate($params['start_date']);
            if (!$valid_date) {
                die($this->response->Error(5007));
            }

            $start_date = date('Y-m-d H:i:s', strtotime($params['start_date']));
            $this->db->where('timestamp >=', $start_date);
        }

        if (isset($params['end_date'])) {
            $valid_date = $this->field_validation->ValidateDate($params['start_date']);
            if (!$valid_date) {
                die($this->response->Error(5007));
            }

            $end_date = date('Y-m-d H:i:s', strtotime($params['end_date']));
            $this->db->where('timestamp <=', $end_date);
        }

        if (isset($params['customer_id'])) {
            $this->db->where('orders.customer_id', $params['customer_id']);
        }

        if (isset($params['amount'])) {
            $this->db->where('orders.amount', $params['amount']);
        }

        if (isset($params['id'])) {
            $this->db->where('orders.order_id', $params['id']);
        }

        if (isset($params['customer_id'])) {
            $this->db->where('orders.customer_id', $params['customer_id']);
        }

        if (isset($params['customer_last_name'])) {
            $this->db->like('customers.last_name', $params['customer_last_name']);
        }

        if (isset($params['customer_internal_id'])) {
            $this->db->where('customers.internal_id', $params['customer_internal_id']);
        }

        if (isset($params['recurring_only']) && $params['recurring_only'] == 1) {
            $this->db->where('orders.subscription_id <>', 0);
        }

        if (isset($params['recurring_id'])) {
            $this->db->where('orders.subscription_id', $params['recurring_id']);
        }

        if (isset($params['status'])) {
            if ($params['status'] == '1' or $params['status'] == 'ok') {
                $this->db->where('orders.status', '1');
                $this->db->where('orders.refunded', '0');
            } elseif ($params['status'] == '2' or $params['status'] == 'refunded') {
                $this->db->where('orders.refunded', '1');
            } else {
                $this->db->where('orders.status', '0');
            }
        }

        $this->db->join('customers', 'customers.customer_id = orders.customer_id', 'left');
        $this->db->join('countries', 'countries.country_id = customers.country', 'left');

        $this->db->select_sum('amount', 'total_amount');
        $query = $this->db->get('orders');

        $array = $query->result_array();

        $total = $array[0]['total_amount'];

        return $total;
    }

    /**
     * Search Orders.
     *
     * Returns an array of results based on submitted search criteria.  All fields are optional.
     *
     * @param int $client_id The client ID.
     * @param int $params['gateway_id'] The gateway ID used for the order. Optional.
     * @param date $params['start_date'] Only orders after or on this date will be returned. Optional.
     * @param date $params['end_date'] Only orders before or on this date will be returned. Optional.
     * @param int $params['customer_id'] The customer id associated with the order. Optional.
     * @param string $params['customer_internal_id'] The customer's internal id associated with the order. Optional.
     * @param int $params['id'] The charge ID.  Optional.
     * @param string $params['amount'] The amount of the charge.  Optional.
     * @param string $params['customer_last_name'] The last name of the customer.  Optional.
     * @param int $params['status'] Set to ok/failed to filter results.  Optional.
     * @param boolean $params['recurring_only'] Returns only orders that are part of a recurring subscription. Optional.
     * @param int $params['offset'] Offsets the database query.
     * @param int $params['card_last_four'] Last 4 digits of credit card
     * @param int $params['limit'] Limits the number of results returned. Optional.
     * @param string $params['sort'] Variable used to sort the results.  Possible values are date, customer_first_name, customer_last_name, amount. Optional
     * @param string $params['sort_dir'] Used when a sort param is supplied.  Possible values are asc and desc. Optional.
     *
     * @return array|bool Charge results or FALSE upon failure
     */
    function GetCharges($client_id, $params)
    {
        // Make sure they only get their own charges
        $this->db->where('orders.client_id', $client_id);

        // Check which search paramaters are set

        if (isset($params['gateway_id'])) {
            $this->db->where('orders.gateway_id', $params['gateway_id']);
        }

        $this->load->library('field_validation');

        if (isset($params['start_date'])) {
            $valid_date = $this->field_validation->ValidateDate($params['start_date']);
            if (!$valid_date) {
                die($this->response->Error(5007));
            }

            $start_date = date('Y-m-d H:i:s', strtotime($params['start_date']));
            $this->db->where('orders.timestamp >=', $start_date);
        }

        if (isset($params['end_date'])) {
            $valid_date = $this->field_validation->ValidateDate($params['start_date']);
            if (!$valid_date) {
                die($this->response->Error(5007));
            }

            $end_date = date('Y-m-d H:i:s', strtotime($params['end_date']));
            $this->db->where('orders.timestamp <=', $end_date);
        }

        if (isset($params['customer_id'])) {
            $this->db->where('orders.customer_id', $params['customer_id']);
        }

        if (isset($params['amount'])) {
            $this->db->where('orders.amount', $params['amount']);
        }

        if (isset($params['id'])) {
            $this->db->where('orders.order_id', $params['id']);
        }

        if (isset($params['customer_id'])) {
            $this->db->where('orders.customer_id', $params['customer_id']);
        }

        if (isset($params['customer_last_name'])) {
            $this->db->like('customers.last_name', $params['customer_last_name']);
        }

        if (isset($params['customer_internal_id'])) {
            $this->db->where('customers.internal_id', $params['customer_internal_id']);
        }

        if (isset($params['recurring_only']) && $params['recurring_only'] == 1) {
            $this->db->where('orders.subscription_id <>', 0);
        }

        if (isset($params['recurring_id'])) {
            $this->db->where('orders.subscription_id', $params['recurring_id']);
        }

        if (isset($params['card_last_four'])) {
            $this->db->where('orders.card_last_four', $params['card_last_four']);
        }

        if (isset($params['status'])) {
            if ($params['status'] == '1' or $params['status'] == 'ok') {
                $this->db->where('orders.status', '1');
                $this->db->where('orders.refunded', '0');
            } elseif ($params['status'] == '2' or $params['status'] == 'refunded') {
                $this->db->where('orders.refunded', '1');
            } elseif ($params['status'] == '3' or $params['status'] == 'failed_repeat') {
                $this->db->where('orders.status', '0');
                $this->db->where('orders.subscription_id !=', '0');
                $this->db->where('subscriptions.start_date !=', 'subscriptions.end_date', FALSE);
            } else {
                $this->db->where('orders.status', '0');
            }
        }

        if (isset($params['offset'])) {
            $offset = $params['offset'];
        } else {
            $offset = 0;
        }

        if (isset($params['limit'])) {
            $this->db->limit($params['limit'], $offset);
        }

        if (isset($params['sort_dir']) and ( $params['sort_dir'] == 'asc' or $params['sort_dir'] == 'desc' )) {
            $sort_dir = $params['sort_dir'];
        } else {
            $sort_dir = 'DESC';
        }

        $params['sort'] = isset($params['sort']) ? $params['sort'] : '';

        switch ($params['sort']) {
            case 'date':
                $sort = 'orders.timestamp';
                break;
            case 'customer_first_name':
                $sort = 'customers.first_name';
                break;
            case 'customer_last_name':
                $sort = 'customers.last_name';
                break;
            case 'amount':
                $sort = 'orders.amount';
                break;
            default:
                $sort = 'orders.timestamp';
                break;
        }

        $sort_dir = isset($params['sort_dir']) ? $params['sort_dir'] : 'DESC';


        $this->db->order_by($sort, $sort_dir);

        $this->db->select('customers.*');
        $this->db->select('countries.*');
        $this->db->select('orders.*');
        $this->db->select('coupons.coupon_code AS coupon_code');
        $this->db->select('subscriptions.start_date');

        $this->db->join('customers', 'customers.customer_id = orders.customer_id', 'left');
        $this->db->join('countries', 'countries.country_id = customers.country', 'left');
        $this->db->join('subscriptions', 'subscriptions.subscription_id = orders.subscription_id', 'left');
        $this->db->join('coupons', 'coupons.coupon_id = orders.coupon_id', 'left');

        $query = $this->db->get('orders');

        $data = array();
        if ($query->num_rows() > 0) {
            $i = 0;
            foreach ($query->result() as $row) {
                $data[$i]['id'] = $row->order_id;
                $data[$i]['gateway_id'] = $row->gateway_id;
                $data[$i]['date'] = gmt_to_local(strtotime($row->timestamp));
                $data[$i]['amount'] = money_format("%!^i", (float) $row->amount);
                $data[$i]['card_last_four'] = $row->card_last_four;
                $data[$i]['customer_ip_address'] = $row->customer_ip_address;
                $data[$i]['status'] = ($row->status == '1') ? 'ok' : 'failed';
                $data[$i]['refunded'] = $row->refunded;
                if ($row->refunded == '1') {
                    $data[$i]['refund_date'] = gmt_to_local(strtotime($row->refund_date));
                }

                if ($row->subscription_id != 0) {
                    $data[$i]['recurring_id'] = $row->subscription_id;
                }

                // was this a recurring charge (other than the first charge)
                if ($row->subscription_id != 0 and date('Y-m-d', strtotime($row->start_date)) != date('Y-m-d', strtotime($row->timestamp))) {
                    $data[$i]['type'] = 'recurring_repeat';
                } elseif ($row->subscription_id != 0) {
                    $data[$i]['type'] = 'recurring_charge';
                } else {
                    $data[$i]['type'] = 'single_charge';
                }

                $data[$i]['coupon'] = (isset($row->coupon_code)) ? $row->coupon_code : '';

                if ($row->customer_id != 0) {
                    $data[$i]['customer']['id'] = $row->customer_id;
                    $data[$i]['customer']['internal_id'] = $row->internal_id;
                    $data[$i]['customer']['first_name'] = $row->first_name;
                    $data[$i]['customer']['last_name'] = $row->last_name;
                    $data[$i]['customer']['company'] = $row->company;
                    $data[$i]['customer']['address_1'] = $row->address_1;
                    $data[$i]['customer']['address_2'] = $row->address_2;
                    $data[$i]['customer']['city'] = $row->city;
                    $data[$i]['customer']['state'] = $row->state;
                    $data[$i]['customer']['country'] = $row->iso2;
                    $data[$i]['customer']['postal_code'] = $row->postal_code;
                    $data[$i]['customer']['email'] = $row->email;
                    $data[$i]['customer']['phone'] = $row->phone;
                    $data[$i]['customer']['date_created'] = gmt_to_local(strtotime($row->date_created));
                    $data[$i]['customer']['status'] = ($row->active == 1) ? 'active' : 'deleted';
                }

                $i++;
            }
        } else {
            return FALSE;
        }

        return $data;
    }

    /**
     * Get Details of a specific order.
     *
     * Returns array of order details for a specific order_id.
     *
     * @param int $client_id The client ID.
     * @param int $charge_id The order ID to search for.
     *
     * @return array|bool Array with charge info, FALSE upon failure.
     */
    function GetCharge($client_id, $charge_id)
    {
        $params = array('id' => $charge_id);

        $data = $this->GetCharges($client_id, $params);

        if (!empty($data)) {
            return $data[0];
        } else {
            return FALSE;
        }
    }

    /**
     * Get Details of the last order for a customer.
     *
     * @param int $client_id The client ID.
     * @param int $customer_id The customer ID.
     * @param int $gateway_id Filter by gateway
     *
     * @return array|bool Array with charge details or FALSE upon failure
     */
    function GetLatestCharge($client_id, $customer_id, $gateway_id = FALSE)
    {
        $this->db->where('orders.client_id', $client_id);
        $this->db->where('orders.customer_id', $customer_id);

        if (!empty($gateway_id)) {
            $this->db->where('orders.gateway_id', $gateway_id);
        }

        $this->db->where('orders.status', '1');
        $this->db->order_by('timestamp', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('orders');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $this->GetCharge($client_id, $row->order_id);
        } else {
            return FALSE;
        }
    }

    /**
     * Set the status of an order to either 1 or 0
     *
     * @param int $order_id The Order ID
     * @param int $status The status ID.  Default to 0.
     *
     * @return bool TRUE upon success.
     */
    function SetStatus($order_id, $status = 0)
    {
        $update_data['status'] = $status;
        $this->db->where('order_id', $order_id);
        $this->db->update('orders', $update_data);

        return TRUE;
    }

    /**
     * Get order authorization details
     *
     * Returns order authorization information.
     *
     * @param int $order_id The Order ID
     *
     * @return mixed Array containg authorization details
     */
    function GetChargeGatewayInfo($order_id)
    {
        $this->db->select('order_authorizations.*');
        $this->db->where('order_authorizations.order_id', $order_id);
        $this->db->join('order_authorizations', 'orders.order_id = order_authorizations.order_id', 'left');
        $query = $this->db->get('orders');
        if ($query->num_rows() > 0) {
            $array = $query->result_array();
            return $array[0];
        } else {
            return FALSE;
        }
    }

}

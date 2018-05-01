<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
$this->load->library("encrypt");
if (!function_exists('PrintArray')) {

    function PrintArray($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}
if (!function_exists('url_encode')) {

    function url_encode($data) {
        $CI = & get_instance();
        return rawurlencode($CI->encryption->encrypt($data));
    }

}
if (!function_exists('url_decode')) {

    function url_decode($data) {
        $CI = & get_instance();
        return $CI->encryption->decrypt($data);
    }

}
if (!function_exists('bp_hash')) {

    function bp_hash($n) {
        return (((0x0000FFFF & $n) << 16) + ((0xFFFF0000 & $n) >> 16));
    }

}
if (!function_exists('send_sms')) {

    function send_sms($ToNumber,$SendMessage,$sender = NULL) {
        $username = 'target99';
        $password = 'new2018';

        // Message details
        $sender = 'EMEZZO';
        $to = $ToNumber;
        $message = $SendMessage;
        //$message = 'We+just+recieved+your+Order+No.+'. $orderID.',+item-+product+name++has+now+been+confirmed+and+is+being+processed.';
        $reqid = '1';
        $format = '{json|text}';
        $route_id = '7';
        $sendondate = date('d-m-Y') . 'T' . date('H:i:s');
      //  $url = 'http://203.129.225.69/API/WebSMS/Http/v1.0a/index.php?';
        // Prepare data for POST request
        
        $data = 'username=' . $username . '&password=' . $password . '&sender=' . $sender . "&to=" . $to . "&message=" . $message . "&reqid=" . $reqid . "&format=" . $format . "&route_id=" . $route_id;
        $url = "http://203.129.225.69/API/WebSMS/Http/v1.0a/index.php?username=" . urlencode($username) . "&password=" . urlencode($password) . "&sender=" . urlencode($sender) . "&to=" . urlencode($to) . "&message=" . urlencode($message) . "&reqid=" . urlencode($reqid) . "&format=" . urlencode($format) . "&route_id=" . urlencode($route_id);
     /*  print_r($url);die();*/
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

       /* print_r($response);*/
        
        
    }

}
if (!function_exists('check_sms_status')) {

    function check_sms_status($id) {
        $url = "http://sms.srdvtechnologies.com/api/reports.php?authkey=NTRhNzUyOWM1MzM&msg_id=" . urlencode($id);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $curl_scraped_page = curl_exec($ch);
        $bp1 = json_decode($curl_scraped_page);
        curl_close($ch);
        return $bp1;
    }

}
if (!function_exists('bp_pagination')) {

    function bp_pagination($pagination_url, $pagination_segment, $total_row, $per_page) {
        $config = array();
        $config["base_url"] = $pagination_url;
        $config["total_rows"] = $total_row;
        $config["per_page"] = $per_page;
        $config['uri_segment'] = $pagination_segment;
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav><!--pagination-->';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        return $config;
    }

}
if (!function_exists('getAutoincrement')) {

    function getAutoincrement($tablename) {
        $CI = & get_instance();
        $inc = 0;
        $query = $CI->db->query("SHOW TABLE STATUS LIKE '$tablename'");
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $inc = $row->Auto_increment;
        }
        return $inc;
    }

}
if (!function_exists('six_digit_rendom_number')) {

    function six_digit_rendom_number() {
        $num_str = sprintf("%08d", mt_rand(1, 99999999));
        return $num_str;
    }

}

function email_send($to, $subject, $msg) {

    $ci = get_instance();
    $ci->load->library('email');
    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://smtp.gmail.com";
    $config['smtp_port'] = "465";
    $config['smtp_user'] = 'neeraj@embarksoftware.com';
    $config['smtp_pass'] = 'neeraj@001';
    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";

    $ci->email->initialize($config);

    $ci->email->from('neeraj@embarksoftware.com', 'Uwayshop');
    $ci->email->to($to);
    $ci->email->subject($subject);
    $ci->email->message($msg);
    $ci->email->send();
}

function displayLimit($string, $length) {
    if ($length == NULL)
        $length = 130;

    $stringDisplay = substr(strip_tags($string), 0, $length);

    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= ' ...';

    return $stringDisplay;
}

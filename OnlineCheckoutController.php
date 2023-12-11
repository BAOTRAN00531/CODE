<?php 
defined("BASEPATH") OR exit("No direct script access allowed");
class OnlineCheckoutController extends CI_Controller  {

    public function online_checkout(){

        if(isset($_POST['momo'])){
               echo'momo';
        }elseif(isset($_POST['vnpay'])){
               echo 'vnpay';
        }
}
}
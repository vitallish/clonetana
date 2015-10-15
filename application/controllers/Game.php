<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 3/3/14
 * Time: 7:25 AM
 */
class Game extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('language');
        $this->load->model('soc');

    }

    public function index(){
//        This will load the list of current games

    }
    public function create(){
//        Load view to create a new game


    }
    public function view(){
//        Load a specific game by url segment
//        Need to read who the player is and output the proper game view




    }











}
<?php
namespace Admin\Controller;
use Think\Controller;


class NewsController extends Controller {
    public function index(){
    	$this->display();
    }

    public function add()
    {
    	$this->display();
    }
}
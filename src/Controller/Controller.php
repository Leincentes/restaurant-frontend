<?php
declare(strict_types=1);

namespace RF\Controller;

use eftec\bladeone\BladeOne;

class  Controller {
    protected $views;
    protected $cache;
    protected $blade;

    public function __construct() {
        $this->views =  BASE_PATH . '/resources/views';
        $this->cache = BASE_PATH . '/resources/cache';
        $this->blade = new BladeOne($this->views,$this->cache,BladeOne::MODE_DEBUG);
    }
    public function index() {
        
        echo $this->blade->run('index');
    }
    public function food() {
        echo $this->blade->run('food');
    }
    public function about() {
        echo $this->blade->run('about');
    }
    public function faq() {
        echo $this->blade->run('faq');
    }
}
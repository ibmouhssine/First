<?php

App::uses('Controller', 'Controller');


class AppController extends Controller {
	public $components = array('Session','DebugKit.Toolbar');

	function beforeFilter() {
        if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
            $this->layout = 'admin';
        } 
    }
}

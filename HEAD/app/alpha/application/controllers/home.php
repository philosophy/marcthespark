<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Home extends CI_Controller {
        function index() {
            $data['title'] = 'Marc the Spark Ninja';
            $data['content'] = 'profile/index';

            $this->parser->parse('layouts/application', $data);
        }

    }

?>

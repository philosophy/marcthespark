<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Resume extends CI_Controller {
        function index() {
            $data = file_get_contents(PUBLICPATH.'/resume/resume.docx'); // Read the file's contents
            $name = 'MarcLambertAgas.docx';

            force_download($name, $data);
        }

    }
?>

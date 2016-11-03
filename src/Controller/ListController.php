<?php

class ListController
{
    public function listAction($request)
    {
        $path = __ROOTDIR__.'var/students-list.xml';

        $students = simplexml_load_file($path);

        return array(
            'template' => 'list',
            'data' => $students->student
        );
    }
}

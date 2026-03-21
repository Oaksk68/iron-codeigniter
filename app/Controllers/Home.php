<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $jsonPath = FCPATH . 'data/page_content.json';

        $jsonContent = file_get_contents($jsonPath);
        $pageData = json_decode($jsonContent, true);

        $data = [
            'pageData' => $pageData
        ];
        return view('home', $data);
    }
}

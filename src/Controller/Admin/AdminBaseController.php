<?php


namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBaseController extends AbstractController
{
    public function renderDefault() {
        return [
            'title' => 'default for admin- Значение по умолчанию для админки'
        ];
    }

}
<?php

namespace App\Controller;

use Github\Client;
use App\Model\GitHubInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RequestController extends AbstractController
{

    public function request()
    {
        $myRepo = new GitHubInfo(new Client(),'repo','trndo','HmWrkSymfony',['sha' => 'master']);
        $info = $myRepo->getInfo();


        return $this->render('github_info/request.html.twig',['info'=>$info,
            'repo'=>$myRepo->getRepo()
            ]);
    }
}
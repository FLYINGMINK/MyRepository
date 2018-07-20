<?php
namespace App\Controller;

class HelloController extends AppController
{
    public function initialize()
    {
        $this->name = 'Hello';
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('honoka');
        #ブランチ2
    }
    public function index()
    {
        
    }

}
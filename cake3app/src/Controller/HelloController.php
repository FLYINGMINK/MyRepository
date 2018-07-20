<?php
namespace App\Controller;

class HelloController extends AppController
{
    public function initialize()
    {
        $this->name = 'Hello';
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('honoka');
 #ブランチ1
        $this->viewBuilder()->autoLayout(false);
#ブランチ2
        #test    }
    public function index()
    {
        
    }

}
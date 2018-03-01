<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MenuController extends Controller
{
    public function menu()
    {
        $menuList = mt_rand(0, 100);

        return $this->render('menu.html.twig', array(
            'menu' => $menuList,
        ));
    }
	
}



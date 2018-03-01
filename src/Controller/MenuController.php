<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MenuController extends Controller
{
    function menu()
    {
        $menuList = $array = 
				array(
					"menu1"=>array(
						"nazwa" => "Strona głowna",
						"link" => "/home",
						"children" =>array(
							)
						),
					"menu2"=>array(
						"nazwa" => "informacje",
						"link" => "http://webcodemaster.pl",
						"children" =>array(
							)
						),
					"menu3"=>array(
						"nazwa" => "oferta",
						"link" => "http://webcodemaster.pl",
						"children" =>array(
							"menu1"=>array(
								"nazwa" => "sprzedaz",
								"link" => "http://webcodemaster.pl"
								),
							"menu2"=>array(
								"nazwa" => "zakupy",
								"link" => "http://webcodemaster.pl"
								),
							)
						),
					"menu4"=>array(
						"nazwa" => "kontakt",
						"link" => "http://webcodemaster.pl",
							"children" =>array(
								"menu1"=>array(
									"nazwa" => "oddziały",
									"link" => "http://webcodemaster.pl"
									),
								"menu2"=>array(
									"nazwa" => "telefony",
									"link" => "http://webcodemaster.pl"
									),
							)
						)		
		);
        return $this->render('menu.html.twig', array(
            'menu' => $menuList,
        ));
    }
}

<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ArticleController extends Controller
{
    public function articleList()
    {
		$articles = $array = 
				array(
					"article1"=>array(
						"title" => "Sed ut perspiciatis unde omnis iste natus error sit",
						"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					),
					"article2"=>array(
						"title" => "Lorem ipsum dolor sit amet",
						"content" => "Lusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					)			
		);
        return $this->render(
            'articleList.html.twig',
            array('articles' => $articles)
        );
    }
}
	




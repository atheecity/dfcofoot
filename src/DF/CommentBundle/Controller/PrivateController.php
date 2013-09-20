<?php 

namespace DF\CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Exception\ParseException;

class PrivateController extends Controller 
{
	
	public function getInfoCommentAction()
	{
		return new Response($this->container->getParameter('nbAbusif'));
	}
	
}
<?php

namespace DF\ManageMatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use JMS\SecurityExtraBundle\Annotation\Secure;


class PublicController extends Controller
{
	
	public function showMatchAction($match_id)
	{
		$em = $this->getDoctrine()->getManager();
		$match = $em->getRepository('DFMatchBundle:Matchs')->find($match_id);
		
		if (!$match) {
			throw $this->createNotFoundException(
					'Aucun match trouvé avec cet id : '.$match_id
			);
		}
		
		return $this->render('DFManageMatchBundle:Public:show-match.html.twig', array(
			'match' => $match,
		));
	}
	
	public function teamAction($match_id, $type)
	{
		$em = $this->getDoctrine()->getManager();
		$match = $em->getRepository('DFMatchBundle:Matchs')->find($match_id);
		
		if (!$match) {
			throw $this->createNotFoundException(
				'Aucun match trouvé avec cet id : '.$match_id
			);
		}
		
		if ($type == 'home')
			return $this->render('DFManageMatchBundle:Public:team.html.twig', array(
				'equipe' => $match->getEquipeDom(),
				'composition' => $match->getFeuilleMatch()->getCompositionDom(),
			));
		elseif ($type == 'away')
			return $this->render('DFManageMatchBundle:Public:team.html.twig', array(
					'equipe' => $match->getEquipeExt(),
					'composition' => $match->getFeuilleMatch()->getCompositionExt(),
			));
	}
	
}

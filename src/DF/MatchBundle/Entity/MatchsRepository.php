<?php

namespace DF\MatchBundle\Entity;

use Doctrine\ORM\EntityRepository;
use DF\MatchBundle\DFMatchBundle;

/**
 * MatchsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MatchsRepository extends EntityRepository
{
	public function getCalendrierResultatsDfco($id_saison, $id_competition)
	{
		$qb = $this->createQueryBuilder('m')
			->where('m.equipeDom = 1 or m.equipeExt = 1')
			->join('DF\MatchBundle\Entity\Calendrier', 'c')
			->andWhere('c.competition = 2')
			->andWhere('c.saison = 1')
			->orderBy('c.competition');
		
		return $qb->getQuery()->getResult();
	}
	
	public function getDernierMatch()
	{
		$dateNow = new \DateTime();
		
		$qb = $this->createQueryBuilder('m')
			->where('m.equipeDom = 1 or m.equipeExt = 1')
			->andWhere('m.date < :dateNow')
			->setParameter('dateNow', $dateNow)
			->setMaxResults(1)
			->orderBy('m.date', 'DESC');

		try {
			$match = $qb->getQuery()->getSingleResult();
		} catch(\Doctrine\Orm\NoResultException $e) {
			$match = null;
		}
		
		return $match;
	}
	
	public function getProchainMatch()
	{
		$dateNow = new \DateTime();
		
		$qb = $this->createQueryBuilder('m')
			->where('m.equipeDom = 1 or m.equipeExt = 1')
			->andWhere('m.date > :dateNow')
			->setParameter('dateNow', $dateNow)
			->setMaxResults(1)
			->orderBy('m.date', 'ASC');
		
		try {
			$match = $qb->getQuery()->getSingleResult();
		} catch(\Doctrine\Orm\NoResultException $e) {
			$match = null;
		}
		
		return $match;
	}
	
	public function getMatchByClub($club, $saison_id, $competition_id)
	{
		$qb = $this->createQueryBuilder('m')
			->join('m.calendrier', 'c')
			->where('c.competition = :competition')
			->andWhere('c.saison = :saison')
			->andWhere('m.scoreDom IS NOT NULL')
			->andWhere('m.scoreExt IS NOT NULL')
			->andWhere('m.equipeDom = :club or m.equipeExt = :club')
			->setParameter('competition', $competition_id)
			->setParameter('saison', $saison_id)
			->setParameter('club', $club);
		
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * Liste tout les matchs par competition et par saison
	 * 
	 * @param \DF\MatchBundle\Entity\Competition $competition
	 * @param \DF\MatchBundle\Entity\Saison $saison
	 * @return Ambigous <multitype:, \Doctrine\ORM\mixed, \Doctrine\ORM\Internal\Hydration\mixed, \Doctrine\DBAL\Driver\Statement, \Doctrine\Common\Cache\mixed>
	 */
	public function getAllMatchCompetition(\DF\MatchBundle\Entity\Competition $competition, \DF\MatchBundle\Entity\Saison $saison)
	{
		$qb = $this->createQueryBuilder('m')
			->join('m.calendrier', 'c')
			->where('c.competition = :competition')
			->andWhere('c.saison = :saison')
			->setParameter('competition', $competition)
			->setParameter('saison', $saison);
		
		return $qb->getQuery()->getResult();
	}
	
}
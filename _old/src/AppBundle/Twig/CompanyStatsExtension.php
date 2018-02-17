<?php
namespace AppBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

class CompanyStatsExtension extends \Twig_Extension{
	protected $doctrine;
	
	public function __construct(RegistryInterface $doctrine) {
		$this->doctrine = $doctrine;
	}
	
	public function getFilters() {
		return array(
			new \Twig_SimpleFilter('company_stats', array(
				$this,
				'companyStatsFilter'
			))
		);
	}
	
	public function companyStatsFilter($company){
		$opinion_repo = $this->doctrine->getRepository('BackendBundle:Opinion');
		
		$company_opinions = $opinion_repo->findBy(array('company' => $company));
		
		$result = array(
			'opinions' => count($company_opinions)
		);
		
		return $result;
	}
	
	public function getName() {
		return 'company_stats_extension';
	}
}
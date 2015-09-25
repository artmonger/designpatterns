<?php namespace App\Patterns\Decorator;

class OilChange implements CarService {

	protected $carService;

	function __construct(CarService $carService) {
		$this->carService = $carService;
	}
	
	public function getCost()
	{
	    return 29;
	}

	public function getDescription()
	{
	    return $this->carService->getDescription() . ', and Oil Change.';
	}
}
<?php namespace App\Patterns\Decorator;

class TireRotation implements CarService {

	protected $carService;

	function __construct(CarService $carService) {
		$this->carService = $carService;
	}

	public function getCost()
	{
	    return 15 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ', and Tire Rotation.';
	}
}
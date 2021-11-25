<?php

interface CarService
{
    public function price();
    public function description();
}

class BasicInspection implements CarService
{
    public function price()
    {
        return 25;
    }

    public function description()
    {
        return "Basic inspection";
    }
}

class OilChange implements CarService
{
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function price()
    {
        return $this->carService->price() + 10;
    }

    public function description()
    {
        return $this->carService->description() . ", and oil change";
    }
}

class TireRotation implements CarService
{
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function price()
    {
        return $this->carService->price() + 30;
    }

    public function description()
    {
        return $this->carService->description() . ", and tire rotation";
    }
}

$carService = new TireRotation(new OilChange(new BasicInspection()));
echo $carService->price();
echo $carService->description();
<?php

class MarkerType{
    public function __construct(
        public string $name,
        public string $iconPath,
        public string $color,

    ){}

    public function draw($lat , $long)
    {
        echo "Drawing {$this->name} marker at ($lat, $long) with icon '{$this->iconPath}' and color '{$this->color}'\n";
    }

}

class MarkerFactory{
    private static array $markerTypes=[];

    public static function getMarkerType(string $name, string $iconPath, string $color):MarkerType{
        $key = "$name-$iconPath-$color";

        if(!isset(self::$markerTypes[$key]))
        {
            self::$markerTypes[$key] = new MarkerType($name,$iconPath,$color);
        }

        return self::$markerTypes[$key];
    }
}

class Marker {
    public function __construct(
        private float $lat,
        private float $long,
        private MarkerType $type

    ){}

    public function draw()
    {
        $this->type->draw($this->lat,$this->long);
    }
}
///////////////////////////////////////////////////////////

$markers=[];

for ($i=0; $i < 1000; $i++) { 
    $type = MarkerFactory::getMarkerType("Restaurant","/icons/restaurant.ico","blue");
    $markers[] = new Marker(35.7+rand(0,100)/1000 , 51.5+rand(0,100)/1000,$type);
}

for ($i=0; $i < 1000; $i++) { 
    $type = MarkerFactory::getMarkerType("Shop","/icons/shop.ico","red");
    $markers[] = new Marker(35.7+rand(0,100)/1000 , 51.5+rand(0,100)/1000,$type);
}

foreach ($markers as $marker) {
    $marker->draw();
}
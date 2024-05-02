<?php 
class Facade{
    public function findApartments($place, $divId){
        $appFInder = new ApartmentFinder();
        $goLocator = new GeoLocator();
        $googleMap = new GoogleMap();
     $apartments =    $appFInder->locateApartment($place);
     foreach($apartments as $apartment){
            $location[] = $goLocator->getLocations($apartment);
     }
        $googleMap->initialize();
        $googleMap->drawLocation($location);
        $googleMap->dispatch($divId);
    }
}


?>
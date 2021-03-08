<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

    
    <?php
        $city_name = "kaunas";
        $wheather_data=Http::get('https://api.meteo.lt/v1/places/'.$city_name.'/forecasts/long-term')->json();
        $weather_forcast_day_1 = $wheather_data['forecastTimestamps']['0']['conditionCode'];
        $weather_forcast_day_2 = $wheather_data['forecastTimestamps']['24']['conditionCode'];
        $weather_forcast_day_3 = $wheather_data['forecastTimestamps']['24']['conditionCode'];
        //dd($wheather_data);
        print_r($weather_forcast_day_1); 
        echo '<br/>';
        print_r($weather_forcast_day_2);
        echo '<br/>';
        print_r($weather_forcast_day_3);
    ?>
   
</body>

</html>
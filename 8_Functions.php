<?PHP
    function totalmarks($marksInEach)
    {
        $sum =0;
        foreach($marksInEach as $value){
            $sum += $value;
        }
        return $sum;
    }
    $marks = [50,30,20,60,40];
    totalmarks($marks);

    echo totalmarks($marks);

?>
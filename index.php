<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUST Capital Test Task</title>
</head>
<body>

<?php 

$current_page_number = 4;
$record_per_page = 10;
$total_records_overall = 152;

function pagination( $total, $perPage, $curPage) {

    $totalPages = ceil( $total / $perPage);

    if( $curPage > $totalPages ) {

        printf( 'ERROR. CURRENT PAGE NUMBER IS BIGGER THAN NUMBER OF PAGES. ');

        return;

    }

    printf( 'Page ' . $curPage . ' of ' . $totalPages );
    echo '<br>';

    $alplabet = range('a', 'z');

    if( $totalPages > sizeof($alplabet) ) {

        printf( 'ERROR. TOO MANY PAGES TO SORT BY ALPHABET. ');

        return;

    }

    $pageLetters = [];
    
    for ($i=0; $i < $totalPages; $i++) { 
        if( $i === $curPage - 1 ){

            $letter = '<strong>' . $alplabet[ $i ] . '</strong>';

        } else {

            $letter = $alplabet[ $i ];

        }

        array_push( $pageLetters , $letter );
    }
    
    printf( '< ' . strtoupper( implode( ' ' , $pageLetters ) ) . ' >');

}

pagination( $total_records_overall , $record_per_page , $current_page_number);

?>

<script src="./script.js"></script>

    
</body>
</html>
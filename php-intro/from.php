<?php
//EXERCISE 1

$variable1 = 'hello';
$variable2 = 4;
$variable3 = ['foo', 'bar'];

//EXERCISE 2

$variable1 = 4;
$variable1 = 'hello';

//EXERCISE 3

$numbers = [3, 5, 16, 3, 4, 18];
$result = $numbers[0];

for($i = 1; $i < count( $numbers); $i++)
{
    $result += $numbers[$i];
}

echo 'Result = '.$result;

//EXERCISE 4 

print('This is a string' . 'This is another string');

//EXERCISE 5

$my_float = 3.5;
$my_int = (int)$my_float;
$my_float2 = 5.3;
$my_int2 = intval($my_float2);

//EXERCISE 6

$my_var1 = 'Hello';

if(isset($my_var2)){
    echo $my_var2;
}
else
{
    echo '<br>excersise 6 ' . $my_var1 . '<br>';
}

//EXERCISE 7

$check_var = "What time is it?";

switch($check_var){
    case 'hello':
        print('greetings');
        break;
    case 'bye':
        print('good bye');
        break;
    default:
        print('It\'s party time!');
        break;
}

//EXERCISE 8

$student_2 = ['name'=>'Skippy', 'class'=>'English', 'grade'=>75];
//print_r($student_2);

//EXERCISE 9

$student = new stdClass();
$student->name = 'Skippy';
$student->class = 'English';
$student->grade = 75;

//print_r($student);


//EXERCISE 10

$num_array = [35, 2, 14, 56, 65, 52];
$num_array_count = count($num_array);

function find_greatest_num_and_index($direction)
{
    global $num_array; //declares $num_array at the local scope

    $greatest = null;
    $greatest_index = null;
    if($direction >= 0) //if the paramater is greater than or equal to 0...
    {
        $i = 0;//..start at 0...
        $increment = 1;//..increment by 1
        $end_loop = count($num_array);//stop at last element
    }
    else
    {
        $i = count($num_array); //start at 6
        $increment = -1; //count down
        $end_loop = 0; //end at zero
    }

    while( $i != $end_loop) //while the value of i is not the end of the loop
    {
        if( $num_array[$i] > $greatest ) //greatest is set to null, how are we comparing null to a number?
        {
            $greatest = $num_array[$i];
            $greatest_index = $i;
        }
        $i += $increment;
    }
    return ['greatest' => $greatest,
        'greatest_index' => $greatest_index
    ];
}

print_r(find_greatest_num_and_index(-1));

?>

<script src="to.js"></script>
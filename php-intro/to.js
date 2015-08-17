//EXERCISE 1

var variable1 = 'hello';
var variable2 = 4;
var variable3 = ['foo', 'bar'];

console.log(variable1 + variable2 + variable3);


//EXERCISE 2

var variable1 = 4;
var variable1 = 'hello';

console.log(variable1);
//EXERCISE 3
var numbers = [3, 5, 16, 3, 4, 18];
var result = numbers[0];

for(var i = 1; i < numbers.length; i++){
	result += numbers[i];
}

console.log(result);

//EXERCISE 4 

console.log('this is a string' + 'this is another string');


//EXERCISE 5

var my_float = 3.5;
var my_int = parseInt(my_float);
var my_float2 = 5.3;
var my_int2 = parseInt(my_float2);
console.log(my_int);
console.log(my_int2);

//EXERCISE 6

var my_var2; //needs to be defined or it will through an error.
var my_var1 = 'Hello';
if(my_var2 != undefined) {
	console.log('my_var2 is defined: ' + my_var2);
}else {
	console.log('my_var2 is not defined and my_var1 is: ' + my_var1);
}


//EXERCISE 7

var check_var = "What time is it?";

switch(check_var){
	case 'hello':
		console.log('greetings');
		break;
	case 'bye':
		console.log('good bye');
		break;
	default:
		console.log('It\'s party time!');
		break;
}


//EXERCISE 8

var student = {
	'name':'skippy',
	'class':'English',
	'grade': 75
};


//EXERCISE 9

var student_2 = {};

student_2.name = 'skippy';
student_2.class = 'English';
student_2.grade = 75;

//EXERCISE 10


var num_array = [35, 2, 14, 56, 65, 52];
var num_array_count = num_array.length;

function find_greatest_num_and_index(direction) {
	var greatest = null;
	var greatest_index = null;
	if(direction >= 0) {
		var i = 0;
		var increment = 1;
		var end_loop = num_array_count;
	}
	else {
		var i = num_array_count;
		var increment = -1;
		var end_loop = 0;
	}
	while( i != end_loop) {
		if(num_array[i] > greatest) {
			greatest = num_array[i];
			greatest_index = i;
		}
		i += increment;
	}
	var greatest_info = {'greatest': greatest, 'greatest_index': greatest_index}
	return greatest_info;

}

console.log(find_greatest_num_and_index(1));






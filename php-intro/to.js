//EXERCISE 1
    var one = "hello";
    var two = 4;
    var three = ["foo", "bar"];

//EXERCISE 2
    var one = 4;
    var one = "hello";

//EXERCISE 3
    var numbers = [3, 5, 16, 3, 4, 18];
    var results = null;

    for (var i = 0; i < numbers.length; i++) {
        var newNum = numbers[i];
        console.log(newNum);
        results += newNum;
        console.log("Result =", results);
    }


//EXERCISE 4
    console.log("This is a string" + "This is another string");

//EXERCISE 5
    var float = 3.5;
    var int = parseFloat(float);
    var float2 = 5.3;
    var int2 = parseInt(float2);

//EXERCISE 6
    var var1 = "Hello";
    if (var1 === null) {
        console.log(var2);
    } else {
        console.log(var1);
    }

//EXERCISE 7
    var check_var = "What time is it?";
    switch(check_var) {
        case "hello":
            console.log('greetings');
            break;
        case "bye":
            console.log('good bye');
            break;
        default:
            console.log("It's party time!");
            break;
    }


//EXERCISE 8
    var student = {
        name: "Skippy",
        class: "English",
        grade: 75,
    }

//EXERCISE 9
 var student = new Object();
    student.name = "Skippy";
    student.class = "English";
    student.grade = 75;


//EXERCISE 10
    var num_array = [35, 2, 14, 56, 65, 52];
    function find_greatest_num_and_index(direction){
        var greatest = null;
        var greatest_index = null;
        if (direction >= 0) {
            var i = 0;
            var increment = 1;
            var end_loop = num_array.length;
        } else {
            var i = num_array.length;
            var increment = -1;
            var end_loop = 0;
        }
        while(i != end_loop) {
            if(num_array[i] > greatest) {
                greatest = num_array[i];
                greatest_index = i;
            }
            i += increment;
        }
        console.log('greatest', greatest, ' greatest-index', greatest_index);
    }
find_greatest_num_and_index(1);

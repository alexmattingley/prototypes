<?php
session_start();
print_r($_SESSION);
?>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<?php
if(!empty($_SESSION['user_id'])){
    print_r($_POST);
    $title = $_POST['title'];
    $details = $_POST['details'];
    $timestamp = $_POST['timestamp'];
    $favColor = $_POST['favorite_color'];
    $user_id = $_SESSION['user_id'];
    require('mysql_connect.php');
    $query = "INSERT INTO `second_todo_items`(`id`, `title`, `details`, `timestamp`, `user_id`) VALUES (17, '$title','$details', $timestamp ,'$user_id')"; //how do I auto increment the id here?
    $results = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) > 0){
        print('mysqli_affected_rows is true');
        print_r($results);
    }else {
        print('something is not working, its probably the id breaking things again.');
    }
}else{
    print('you are either logged out or your credentials are wrong');
}
?>
<button>Logout</button>
<script>

    //logout button calls this.
    function logout_call(){
        $.ajax({
           url: 'logout.php',
           method: "POST",
           cache: false,
            dataType:'text',
            success: function(response){
                console.log("response:" , response);
            }
        })
    }

    function index_select_call(){
        $.ajax({
            url: 'index_select.php',
            method: "POST",
            cache: false,
            dataType: 'json',
            success: function(response){
                console.log("response from index_select:", response);
                var last_element_id = response[response.length-1]["id"];
                console.log(last_element_id);
                //so the issue is that there is really no easy way to take this variable and make it accessible to the php above:
                //Some ideas: Put it in the DOM and then acccess it...calll the document directly in php. #just coder things.
            }
        })
    }
    $('button').click(function(){
        logout_call();
    });

    $(document).ready(function() {
        index_select_call();
    });

</script>




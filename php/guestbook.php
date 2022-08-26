<?php

    require_once 'config.php';
    require_once 'connect.php';
    require_once 'structure.php';



    $html = "<div class='sections'>Error: An error occured :(";

    $conn = create_connection();

    if(isset($_POST['submitInput']) && isset($_POST['nameInput']) && isset($_POST['messageInput'])){


        if(strlen(trim($_POST["nameInput"])) > 0 && strlen(trim($_POST['messageInput'])) > 0){
            if(strlen($_POST["nameInput"]) < 32 && strlen($_POST['messageInput']) < 254){

                $sql = "INSERT INTO `guestbook` (`id`, `name`, `message`) VALUES (NULL, '".$_POST['nameInput']."', '".$_POST['messageInput']."');";

                $data = $conn->query($sql);

                if(!$data){
                    $html = "<div class='sections'>Error: Could not add entry.</div>";
                }else{
                    $html = "";
                }
            }else{
                $html = "<div class='sections'>Error: Name(32 characters MAX) or message(254 characters MAX) are to long.</div>";
            }
        }else{
            $html = "<div class='sections'>Error: Name or message are to empty.</div>";
        }
    }



    $sql = "SELECT * FROM guestbook";
    $data = $conn->query($sql);

    if($data->num_rows > 0){
        $html = $html . "<div class='sections'><h4>Guestbook:</h4><ul>";
        while($row = ($data->fetch_assoc())){
            $html = $html . "<li>" . $row["name"] . ": " . $row["message"] . "</li>";
        }
        $html = $html . "</ul>";

    } else {
        $html = "<div class='sections'><h4>No guestbook entries found</h4>";
    }

    $html = $html . "</div><div class='separator' id='sepA'></div><div class='sections'>
        <form id='guestbookForm' name='guestbookForm' action='guestbook.php' method='POST'>
            Nickname: <input class='input' id='nameInput' name='nameInput' type='text'>
            <br>
            Message:  <input class='input' id='messageInput' name='messageInput' type='text'>
            <br>
            <input id='submitInput' name='submitInput' type='submit' value='Send'>
        </form>
    </div>";

    create_header();
    create_content($html);
    create_footer();


?>

<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:login.php');
}
include "../admin2/pages/config.php";
include "header-footer/header.php";

 // redirect with javascript
 $redirect = 
    '<script>
        setTimeout(function(){
        window.location = "playvideo.php";
        }, 500);
    </script>';
 // redirect with javascript



if(isset($_POST["update"])) {
    $id = $_POST["id"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    
    $update = "UPDATE `reviews` SET `id`='$id', `rating`='$rating', `review`='$review' WHERE `id`=$id";

    $update_run = mysqli_query($conn, $update);
    if($update_run){
        echo "$redirect";
    }
}




if (isset($_GET["id"])) { 
    $idget = $_GET["id"];
    $select = "SELECT * FROM `reviews` WHERE `id` = $idget";

    $select_run = mysqli_query($conn, $select);

    if ($select_run) { 
        while ($row = mysqli_fetch_assoc($select_run)){
            $id = $row["id"];
            $rating = $row["rating"];
            $review = $row["review"];
      
        }
    } else {
        echo "Error";
    }

?>




<div class="container" style="margin-top: 90px;">

    <div class="main-panel" >
        <div class="content-wrapper" >
            
        


<div class="col-12 grid-margin"><br><br>
    <div class="card bg-dark">
        <div class="card-body">
            <h4 class="card-title text-light">Modify Review</h4>
            <form method="POST">
                
                <div class="row" style="display: flex; justify-content: center; align-items: center;">
                    <div class="col-md-6" >
                        <div class="form-group row">
                        <!-- <label class="col-sm-3 col-form-label">ID</label> -->
                        <div class="col-sm-12">
                            <input type="hidden" class="form-control text-secondary" name="id" value="<?php echo $id ?>" >
                        </div>
                        </div>
                    </div>
                </div>


<div class="row" style="display: flex; justify-content: center; align-items: center;">       
    
    <div class="col-md-6">
        <div class="form-group row">
            <!-- <label class="col-sm-3 col-form-label">Song Title</label> -->
            <div class="col-sm-12">
            <label class="text-light" for="fname">Rating:</label>
              <select class="form-control" name="rating" id="">
              <option hidden value="">please Select</option>
              <option value="I just Love it 😍">I just Love it 😍</option>
              <option value="I just Like it 😎">I just Like it 😎</option>
              <option value="It is Awesome 😄">It is Awesome 😄</option>
              <option value="I don't Like it 😒">I don't Like it 😒</option>
              <option value="I just Hate it 😡">I just Hate it 😡</option>

             </select>
        </div>
        </div>  
    </div>      
</div>

<div class="row" style="display: flex; justify-content: center; align-items: center;">       
    
    <div class="col-md-6">
        <div class="form-group row">
            <!-- <label class="col-sm-3 col-form-label">Song Title</label> -->
            <div class="col-sm-12">
            <label class="text-light" for="uname">Review:</label>
            <textarea class="form-control" name="review" id="" placeholder="please Modify Review" cols="30" rows="10"><?php echo $review ?></textarea>
        </div>
        </div>
    </div>      
</div>







<div class="text-center mt-3">
    <input class=" btn-lg" type="submit" value="Update" name="update">
</div>
</form>
</div>
</div>
<br><br>
</div>

        </div></div></div>


 <!-- chatbot -->
 <div class="container chatty">
    <div class="chatbox">
        <div class="chatbox__support" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            <div class="chatbox__header">
                <div class="chatbox__image--header">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzIiyV0XgtyeLBS0OWmk8lMM649VIc4CLzrA&s" alt="image" style="width: 55px; height: 55px; border-radius: 50px;">
                </div>
                <div class="chatbox__content--header">
                    <h4 class="chatbox__heading--header" style="margin-bottom: -2px;">Chat support</h4>
                    <p class="chatbox__description--header" style="margin-bottom: 0;">Hi. My name is Sound. How can I help you?</p>
                </div>
            </div>
            <div class="chatbox__messages">
                <div></div>
            </div>
            <div class="chatbox__footer">
                <input type="text" placeholder="Write a message...">
                <button class="chatbox__send--footer send__button">Send</button>
            </div>
        </div>
        <div class="chatbox__button">
            <button><img src="./images/chatbox-icon.svg" /></button>
        </div>
    </div>
</div>

<script src="js/app.js"></script>



<?php
} else {
    echo "";
} ?>







<?php
include "header-footer/footer.php";
?>
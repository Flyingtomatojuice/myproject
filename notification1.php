<?php
    include "dashboard.php";
    include("functions.php");
    include "include.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="notif.css">
    <title>Visvis Logistics Service</title>
</head>
    <body>
        <div class="main-notif-container">
            <div class="notif-container">
                <?php
                    $query = "SELECT status as count, COUNT(*) AS total FROM ( SELECT status FROM inquiry UNION ALL SELECT status FROM jobcontact) t WHERE status='unread'";
                       $result = $con->query($query);
                    	if($result->num_rows>0)
                    	{
                    		$row = mysqli_fetch_array($result);
                    		$total = $row['total'];
                    	}
                ?>
                    <div class="notif-text">
                        <div class="text">
                            Notifications <span> <?php echo $total; ?> </span>
                        </div>
                        <div class="button-container">
                            <button id="show-button">Show Notifications</button>
                            <button id="hide-button" style="display: none">Hide Notifications</button>
                            <!-- <button id="hide-button" style="display: none">Hide Notifications</button> -->
                        </div>
                    </div>
                    <form id="form" class="form-container" method="POST">
                        <div class="list">
                            <input 
                                <?php if(isset($_POST['contact_us'])) echo "class=active" ?>
                                type="submit" name="contact_us" value="CONTACT US"
                            />
                            <div class="sub-list">
                                <input 
                                    <?php if(isset($_POST['inquiry'])) echo "class=active" ?> 
                                    type="submit" name="inquiry" value="Inquiry" 
                                />
                                <input 
                                    <?php if(isset($_POST['greetings'])) echo "class=active" ?>
                                    type="submit" name="greetings" value="Greetings"
                                />
                                <input 
                                    <?php if(isset($_POST['requirements'])) echo "class=active" ?>
                                    type="submit" name="requirements" value="Requirements"
                                />
                            </div>
                            <input 
                                <?php if(isset($_POST['comments'])) echo "class=active" ?>
                                type="submit" name="comments" value="COMMENTS"
                            />
                        </div>
                    </form>
                <?php
                    
                ?>
            </div>
            <div 
                <?php 
                    if(isset($_POST['contact_us']) || isset($_POST['inquiry']) || isset($_POST['greetings']) ||
                        isset($_POST['requirements']) || isset($_POST['comments'])){
                            echo "class=notif-message-container";
                    }
                ?>>
                <div class="notif">
                    <?php
                        if(isset($_POST['contact_us'])) {     
                            $query = "SELECT * from inquiry WHERE status='unread' order by id DESC";
                            if(count(fetchAll($query))>0){
                                foreach(fetchAll($query) as $i){
                        ?>
                            <div class="message-container">
                                <a href="view.php?id=<?php echo $i['id'] ?>">
                                    <div class="date-text">
                                        <?php echo date('F j, Y, g:i ',strtotime($i['date']))?>
                                    </div>
                                    <div class="message-text">
                                        <?php echo ucfirst($i['name'])." sent you a " . ucfirst($i['type'])."."; ?>
                                    </div>
                                </a>
                            </div>
                        <?php
                                }
                            }else{
                                echo "No Records yet.";
                            } 
                        }
        
                        if(isset($_POST['inquiry'])) {     
                            $query = "SELECT * from inquiry WHERE type='Inquiry' AND status='unread' order by id DESC";
                            if(count(fetchAll($query))>0){
                                foreach(fetchAll($query) as $i){
                        ?>
                            <div class="message-container">
                                <a href="view.php?id=<?php echo $i['id'] ?>">
                                    <div class="date-text">
                                        <?php echo date('F j, Y, g:i ',strtotime($i['date'])) ?>
                                    </div>
                                    <div class="message-text">
                                        <?php echo ucfirst($i['name'])." sent you an ".ucfirst($i['type'])."."; ?>
                                    </div>
                                </a>
                            </div>
                        <?php
                                }
                            }else{
                            echo "No Records yet.";
                            }          
                        }
        
                        if(isset($_POST['greetings'])) {
                            $query = "SELECT * from inquiry WHERE type='Greetings' AND status='unread' order by id DESC";
                            if(count(fetchAll($query))>0){
                                foreach(fetchAll($query) as $i){
                        ?>
                            <div class="message-container">
                                <a href="view.php?id=<?php echo $i['id'] ?>">
                                    <div class="date-text">
                                        <?php echo date('F j, Y, g:i ',strtotime($i['date'])) ?>
                                    </div>
                                    <div class="message-text">
                                        <?php echo ucfirst($i['name'])." sent you ".ucfirst($i['type'])."."; ?>
                                    </div>
                                </a>
                            </div>
                        <?php
                                }
                            }else{
                                echo "No Records yet.";
                            }
                        }
        
                        if(isset($_POST['requirements'])) { 
                            $query = "SELECT * from inquiry WHERE type='Requirements' AND status='unread' order by id DESC";
                            if(count(fetchAll($query))>0){
                                foreach(fetchAll($query) as $i){
                        ?>
                            <div class="message-container">
                                <a href="view.php?id=<?php echo $i['id'] ?>">
                                    <div class="date-text">
                                        <?php echo date('F j, Y, g:i ',strtotime($i['date'])) ?>
                                    </div>
                                    <div class="message-text">
                                        <?php echo ucfirst($i['name'])." sent you ".ucfirst($i['type'])."."; ?>
                                    </div>
                                </a>
                            </div>
                        <?php
                            }
                            }else{
                                echo "No Records yet.";
                            }           
                        }
        
                        if(isset($_POST['comments'])) {
                            $query = "SELECT * from jobcontact WHERE status='unread' order by id DESC";
                            if(count(fetchAll($query))>0){
                                foreach(fetchAll($query) as $i){
                        ?>
                            <div class="message-container">
                                <a href="view1.php?id=<?php echo $i['id'] ?>">
                                    <div class="date-text">
                                        <?php echo date('F j, Y, g:i ',strtotime($i['date'])) ?>
                                    </div>
                                    <div class="message-text">
                                        <?php echo ucfirst($i['name'])." left a comment."; ?>
                                    </div>
                                </a>
                            </div>
                        <?php
                                }
                            }else{
                                echo "No Records yet.";
                            }             
                        }
                    ?>
                </div>
            </div>
        </div>
        <script>
            const showButton = document.getElementById("show-button");
            const hideButton = document.getElementById("hide-button");
            const formContainer = document.getElementById("form");

            showButton.addEventListener("click", () => {
                formContainer.style.height = "220px";
                formContainer.style.transition = ".5s";
                showButton.style.display = "none";
                hideButton.style.display = "block";
            })

            hideButton.addEventListener("click", () => {
                formContainer.style.height = "0";
                formContainer.style.transition = ".5s";
                hideButton.style.display = "none";
                showButton.style.display = "block";
            })
        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

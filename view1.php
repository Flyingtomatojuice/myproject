<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UPDATE</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .vertical-center{
           margin-top: 8vh;
           
        }
        .update-bg{
            background-image: url('./assets/images/services-bg.jpg');
            background-size: cover;
        }
        .update-form-bg{
            background-image: url('./assets/images/home5.png');
            background-size: cover;
        }
        .update-border{
            
            border-style: solid;
            border-width: 5px;
            opacity: 0.88;
            transition: 1s;
        }
        .update-border:hover{
            opacity: 1;
            border-image: linear-gradient(45deg, rgb(0,143,104), rgb(250,224,66)) 1;
        }
        .message-box{
            height: 400px;
            Overflow-y:scroll;
        }
        .subms-1{
            margin-left:4px;
        }
    </style>

</head>

<body>
<div class="vertical-center">
    <!--Container Start-->
    <div class="container col-md-6 align-items-center justify-content-center bg-light p-3 shadow-lg update-border">
        <div class="mb-2 mb-1"><sub>Notification</sub></div>
        
       
        <?php
            // "dashboard.php";
            include("functions.php");
            $id = $_GET['id'];
            $query ="UPDATE jobcontact SET status = 'read' WHERE ID = $id;";
            performQuery($query);
            $query = "SELECT * from jobcontact where ID = '$id';";
        ?>

        <div class="justify-content-center">
            <div>
                <!--Title/Type-->
                <h1 class="text-success pb-0 mb-0">
                <?php                   
                    if(count(fetchAll($query))>0){
                        foreach(fetchAll($query) as $i){
                                echo "COMMENTS<br>";
                            
                        }
                    }
                ?>
                </h1>
                <!--From/Email/Number-->
                <div class="subms-1 mb-2">
                    <sub class="h6 text-muted">
                        <?php
                        if(count(fetchAll($query))>0){
                            foreach(fetchAll($query) as $i){
                                
                                    echo "From: ".($i['name'])."<br>";
                                    echo "Email: ".($i['email'])."<br>";
                                    echo "Number: ".($i['number'])."<br>";
                                
                            }
                        }
                        ?>
                    </sub>
                </div>
            </div>

            <hr class="mt-1">

            <!--Message Area-->
            <div class="message-box">
            <p class="text-dark p-1">
                <?php
                    if(count(fetchAll($query))>0){
                        foreach(fetchAll($query) as $i){
                                echo ucfirst($i['message']);
                        }
                    }
                ?>
            </p>
            </div>

            <hr>

            <div class="rounded text-right">
                <a href="notification1.php"><input type="button" value=Back class="btn btn-secondary btn-lg"></a>
                <a href="https://mail.google.com/mail/u/0/"><input type="button" value=Reply class="btn btn-success btn-lg"></a>
            </div>
        </div>
    </div>
    <!--Container End-->
</div>
</body>
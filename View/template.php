<!DOCTYPE html>
<html lang="FR">

<head>
    <title><?=$title;?></title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?=$description;?>">

    <base href="<?=$root;?>" />

    <link rel="icon" type="image/png" href="" />
    
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="Public/css/queries.css" />
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php require_once('Shared/header.php');?>   
<?php require_once('Shared/navbar.php');?> 
    
    <div class="container bg-light" id="main">
        <?= $content; ?>
    </div>

<?php require_once('Shared/footer.php');?>    

    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--NAVBAR-->
    <script type="text/javascript" src="Public/js/navbar.js"></script>

<?php
    if (isset($_GET['controller']) && $_GET['controller'] === 'Research') {
        if (isset($_GET['action'])) {
            $regex = '/(kanji|onyomi|kunyomi|meaning)/';
            if (preg_match($regex, $_GET['action'])) { 
?>
    <!--RESEARCH-->
    <script type="text/javascript" src="Public/js/research.js"></script>
<?php
            }
        }
    }

    if (isset($_GET['controller']) && $_GET['controller'] === 'Research') {
        if (isset($_GET['action']) && $_GET['action'] === 'result') {
?>
    <!--RESULT-->
    <script type="text/javascript" src="Public/js/ajax.js"></script>
    <script type="text/javascript" src="Public/js/result.js"></script>
<?php
        }
    }

    if (isset($_GET['controller']) && $_GET['controller'] === 'Connection') {
        if (isset($_GET['action']) && $_GET['action'] === 'inscription') {
?>
    <!--RESULT-->
    <script type="text/javascript" src="Public/js/inscription.js"></script>
<?php
        }
    }
?>

</body>
</html>
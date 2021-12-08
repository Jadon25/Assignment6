<?php
$msg = "";

if (isset($_POST['upload'])) {
    $target = "image/" . basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "weijy3", "qwerty123321", "assignment6");
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $Itype = "team";
    $sql = "INSERT INTO images (image, text, Itype) VALUES ('$image', '$text', '$Itype')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

if (isset($_POST['upload2'])) {
    $target = "image/" . basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "weijy3", "qwerty123321", "assignment6");
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $Itype = "player";
    $sql = "INSERT INTO images (image, text, Itype) VALUES ('$image', '$text', '$Itype')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Team</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Team.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400|Roboto+Slab:100,200,300,400,500,600,700,800,900">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": ""
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Team">
    <meta property="og:type" content="website">
</head>

<body data-home-page="Team.html" data-home-page-title="Team" class="u-body">
    <header class="u-black u-clearfix u-header u-header" id="sec-4ba9">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse u-custom-font u-font-roboto-slab" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase;">
                    <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                                    </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">

                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <br>
            <p class="u-custom-font u-font-lobster u-text u-text-default u-text-1">R10228025 Assignment6</p>
        </div>
    </header>
    <section class="u-align-center u-clearfix u-palette-5-light-2 u-section-1" id="carousel_79b1">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-tab-links-align-center u-tabs u-tabs-1">
                <ul class="u-spacing-15 u-tab-list u-unstyled" role="tablist">
                    <li class="u-tab-item" role="presentation">
                        <a class="active u-active-palette-3-base u-button-style u-tab-link u-text-active-black u-text-body-color u-text-hover-grey-75 u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Teams</a>
                    </li>
                    <li class="u-tab-item" role="presentation">
                        <a class="u-active-palette-3-base u-button-style u-tab-link u-text-active-black u-text-body-color u-text-hover-grey-75 u-tab-link-2" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false">Players</a>
                    </li>
                </ul>
                <div class="u-tab-content">
                    <div class="u-align-center u-container-style u-palette-5-light-3 u-tab-active u-tab-pane u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <form method="POST" action="index.php" enctype="multipart/form-data">
                                <input type="hidden" name="size" value="1000000">
                                <div>
                                    <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="image"><br>
                                </div>
                                <div>
                                    <textarea id="text" cols="40" rows="4" name="text" placeholder="Image description..."></textarea><br>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-warning" name="upload" value="Upload Image">UPLOAD</button>
                                </div>
                            </form><br><br><br>
                            <?php
                            $db = mysqli_connect("localhost", "weijy3", "qwerty123321", "assignment6");
                            $sql = "SELECT * FROM images WHERE Itype ='team'" ;
                            $result = mysqli_query($db, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div id='img_div'" . "class='u-image u-image-circle' u-image-1>";
                                echo "<img src='image/" . $row['image'] . "' height='512' width='512'> ";
                                echo "<p class='u-custom-font u-font-lobster u-text u-text-1'>" . 'Image' .'&nbsp' . $row['ID'] . "</p>" ;
                                echo "<p class='u-custom-font u-font-roboto-slab u-text u-text-2'>" . $row['text'] . "</p>" ."<br><br><br>";
                                
                                echo "</div>";
                            }
                            ?>

                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-palette-5-light-3 u-tab-pane u-tab-pane-2" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">
                        <div class="u-container-layout u-container-layout-2">
                        <form method="POST" action="index.php" enctype="multipart/form-data">
                                <input type="hidden" name="size" value="1000000">
                                <div>
                                    <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="image"><br>
                                </div>
                                <div>
                                    <textarea id="text" cols="40" rows="4" name="text" placeholder="Image description..."></textarea><br>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-warning" name="upload2" value="Upload Image">UPLOAD</button>
                                </div>
                            </form><br><br><br>
                            <?php
                            $db = mysqli_connect("localhost", "weijy3", "qwerty123321", "assignment6");
                            $sql = "SELECT * FROM images WHERE Itype ='player'" ;
                            $result = mysqli_query($db, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div id='img_div'" . "class='u-image u-image-circle' u-image-1>";
                                echo "<img src='image/" . $row['image'] . "' height='512' width='512'> ";
                                echo "<p class='u-custom-font u-font-lobster u-text u-text-1'>" . 'Image' .'&nbsp' . $row['ID'] . "</p>" ;
                                echo "<p class='u-custom-font u-font-roboto-slab u-text u-text-2'>" . $row['text'] . "</p>" ."<br><br><br>";
                                
                                echo "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<html lang="en">
    <head>
    <title>
            Your mood today
        </title>
<?php
if (isset($_POST["s"])) {
  $img_file = $_FILES["img_file"]["name"];
  $validExt = array("jpg", "png", "jpeg", "bmp", "gif");
  if ($img_file == "") {
    $msg = errorMessage( "Attach an image");
  } elseif ($_FILES["img_file"]["size"] <= 0 ) {
    $msg = errorMessage( "Image is not proper.");
  } else if ( !in_array($ext, $validExt) )  {
    $msg = errorMessage( "Not a valid image file");
  } else {
    // upload script here
  }
}
?>
        <style>
            section{
                border: gold .3rem solid;
                padding: 1.2rem;
            }
            article{
                padding: 1.4rem;
                margin-top: .5rem;
            }
            .moods{
                width: 15%;
                border-radius: 300px;
                border: thistle .3rem solid;
            }
            #joy{
                width: 20%;
                border-radius: 300px;
                border: thistle .3rem solid;
            }
        </style>
        <meta charset="utf-8">
    </head>
    <body style="background-color: thistle; text-align: center; padding: 3rem;">
        <section>
            <strong><em>“ Because of your smile, you make life more beautiful.” <br>– Thich Nhat Hanh.</em></strong>
            <br><br><br><br>
            <form method="post" action="path.php" name="f" enctype="multipart/form-data"  onSubmit="return validateImage();">
                <input type="file" name="img_file" id="img_file" />
                <input type="submit" class="submit_button" value="Submit" name="s">
            </form>
        </section>
        <article>
            <br><br>
            <strong>What's your mood today?</strong>
            <br><br>
            <a href=""><img class="moods" src="anger.jpg"></a>
            <a href=""><img  id="joy" src="joy.gif"></a>
            <a href=""><img class="moods" src="disgust.jpg"></a>
            <a href=""><img class="moods" src="sadness.png"></a>
        </article>
        <button><a href="bot.htm">GO BACK</a></button>

    </body>
</html>
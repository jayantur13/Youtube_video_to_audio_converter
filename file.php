<!-- You can change the file name if you want too,add or change things in file.To check this use a localhost such as XAMPP or WAMP or use any web free host-->
<!-- Used html+css+bootstrap+php-->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<style type="text/css">
*
{
	padding:0;
	margin:0;
}
body
{
 background-color:grey;
}
.container
{
	position:relative;
	top:100px;
	left:200px;
}
</style>
</head>
<body>
<div class="container text-center">
        <div class="row">
            <div class="col-sm-8">

                <h4>Video to audio converter (Using API of <a href="http://www.youtubeinmp3.com/api/">youtubeinmp3.com</a>)</h4>
				<hr />
                <form role="form">
                    <div class="form-group float-label-control">
                        <label for="">Enter a youtube watch link (Something like https://www.youtube.com/watch?v=XvUSsh3gdO4)</label>
                        <input type="text" name="val" class="form-control">
                    </div>
					<div>
					  <input type="submit" style="position:relative;left:320px;align:center;background-color:lightcyan;width:70px;height:50px;" name="btnsearch" class="form-control" value="Search">
					</div>
                </form>
				<?php

		if(isset($_REQUEST["btnsearch"]))
		{
		$link = $_REQUEST["val"];
    echo '<iframe style="width:230px;height:60px;border:0;overflow:hidden;" scrolling="no" src="//www.youtubeinmp3.com/widget/button/?video=//www.youtubeinmp3.com/fetch/?format=json&video='.$link.'"&color=c91818>';
	  <!--This will generate a download button,by using our youtube watch link,we're making here an api call with a proper format-->
		}
		?>
        </div>
        </div>
        </div><br><br><br><br><br><br> <!--Use more css if you want rather than break-->

<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-12">
    <p style="font-family:Arial;">Jayant Navrange &copy;<br />
Free to use.Licensed under Creative Commons Attribution <br /></p>
    </div>
  </div>

</footer>
</body>
</html>


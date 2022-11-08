<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax File Upload</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        #upload_progress{
            z-index: 100;
            position: absolute;
            visibility: hidden;
            text-align: center;
            width: 400px;
            border: 1px solid darkgrey;
        }
        form{
            text-align: center;
            width: 390px;
            padding: 5px;
            border: 1px solid darkgrey;
        }
    </style>
</head>
<body>
    <header></header>
    <main>
        <p id="upload_progress">
            Loading <br>
            <!-- <img src="https://flevix.com/wp-content/uploads/2019/12/Progress-Loading-1.gif" alt=""> -->
        </p>
        <p id="result"></p>
        <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="start_upload();">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000">
            File: <input type="file" name="myFile">
                <input type="submit" name="submitBtn" value="Upload">
        </form>
    </main>
    <footer>
        <iframe id="upload_target" name="upload_target" src="#" style="width: 0; height: 0; border: 0 solid white">
            <script type="text/javascript">stop_upload(<?php echo $result; ?>);</script>
        </iframe>
    </footer>

    <script>
        function start_upload(){
            document.querySelector("#upload_progress").style.visibility = "visible";
            return true;
        }
        function stop_upload(success){
            if(success === 1){
                document.querySelector("#result").innerHTML = "<span class='msg'>The file has been uploaded successfully</span><br><br>";
            }
            else{
                document.querySelector("#result").innerHTML = "<span class='emsg'>Error occurred!</span><br><br>";
            }

            document.querySelector("#upload_progress").style.visibility = "hidden";
            return true;
        }
    </script>
</body>
</html>
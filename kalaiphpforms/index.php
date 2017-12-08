<html lang="en">
<head>
    <title>Simple Form with image upload preview using PHP and Mysql</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>

        <form action="action.php" method="post" enctype="multipart/form-data">

                    
                            <lable align="right">Name:</lable>
                            <input type="text" name="name" required/><br>
                            <lable align="right">Email:</lable>
                            <input type="text" name="email" required/><br>
                            <lable align="right">Image:</lable>  <br>                          
                            <input type="file" name="image" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="100px" />

                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
                            
                            <lable align="right">Address</lable>
                            <input type="text" name="address" required/><br>
                            <input type="submit" name="register" value="submit" />
                                     

        </form>
</body>
</html>
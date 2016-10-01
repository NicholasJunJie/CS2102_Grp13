<?php
    
    $dbconn = pg_connect("host=localhost port=5432 dbname=projectdb user=postgres password=cs2102")
    or die('Could not connect: ' . pg_last_error());
   
    session_start();
    if (isset($_POST['loginAcc']))     
    {
        if (empty($_POST['email']) || empty($_POST['password'])) 
          {
            echo '<script language="javascript">';
            echo 'alert("MISSING INPUT")';
            echo '</script>';
          }
         else
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query = "SELECT * FROM project.account WHERE email='$email' AND password='$password'";
            $result = pg_query($query) or die('Query failed: ' . pg_last_error()); //MUST ALWAYS EXECUTE QUERY
            

            if(pg_num_rows($result) == 1)
            {

                $_SESSION['login_user']=$email;
         echo "<script>location.href = 'Main.php'</script>"; 
              
            }
            else
                {
                     echo '<script language="javascript">';
                     echo 'alert("INVALID DETAILS")';
                     echo '</script>';
                }         
        }

    }
?>

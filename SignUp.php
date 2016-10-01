    <?php
                                $firstName = pg_escape_string($_POST['firstName']);
                                $lastName = pg_escape_string($_POST['lastName']);
                                $email = pg_escape_string($_POST['email']);
                                $password = pg_escape_string($_POST['password']);
                                $confirmPass = pg_escape_string($_POST['confirmPass']);
                                $contactNum = pg_escape_string($_POST['contactNum']);           
                                
                                if(isset($_POST['register'])){

                                    $dbconn = pg_connect("host=localhost port=5432 dbname=projectdb user=postgres password=cs2102")
                                                or die('Could not connect: ' . pg_last_error());
                                        
                                    $setPath = pg_query($dbconn, "SET search_path TO project");
                                    if (!$setPath) {
                                        die("Failed to set schema: " . pg_last_error());
                                    }
                                        
                                    $query = "INSERT INTO account (password, first_name, last_name, email, contact_num)
                                                    VALUES ('$password', '$firstName', '$lastName', '$email', $contactNum)";
                                        
                                    $result = pg_query($dbconn, $query) 
                                                or die('Insert failed: ' . pg_last_error());
                                                    
                                    pg_close($dbconn);

                                }
                            ?>

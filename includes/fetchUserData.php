<?php  
                        $getUserId = $_SESSION['id'];
                        $selectUserId = mysqli_query($con, "SELECT * FROM register WHERE id='$getUserId' ") or die(mysqli_error());
                        $fetchUserId = mysqli_fetch_array($selectUserId);
                        $phone = $fetchUserId['phoneNumber'];
                        $regno = $fetchUserId['examNumber'];
                        $dept = $fetchUserId['department'];
                        $level = $fetchUserId['level'];
                        $image = $fetchUserId['passport'];
                        
                    ?>
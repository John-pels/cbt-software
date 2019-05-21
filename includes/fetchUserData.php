<?php  
                        $getUserId = $_SESSION['id'];
                        $selectUserId = mysqli_query($con, "SELECT * FROM register WHERE reg_id='$getUserId' ") or die(mysqli_error());
                        $fetchUserId = mysqli_fetch_array($selectUserId);
                        $phone = $fetchUserId['phone'];
                        $regno = $fetchUserId['reg_no'];
                        $dept = $fetchUserId['dept'];
                        $level = $fetchUserId['level'];
                        $image = $fetchUserId['image'];
                        
                    ?>
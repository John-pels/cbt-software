<?php  
                            // Inserting student information into the timer
                            $takeExam = $_SESSION['id'];
                            $timei = date("g:ia");
                            $selectTime = mysqli_query($con, "SELECT * FROM timer WHERE student_id ='$takeExam'");
                            $selectTimeRow = mysqli_num_rows($selectTime);
                            $fetchTime = mysqli_fetch_assoc($selectTime);

                            // Checking if the student Id exist in timer table
                            if ( $selectTimeRow > 0 ) {
                                // echo "<script> window.location='instruction.php'; </script>";
                            } 
                            // If it doesn't exist then insert into the timer table
                            else if ( $selectTimeRow <=0 ){
                                $insertTime = mysqli_query ($con, "INSERT INTO timer (student_id,timer) VALUES ('$takeExam', CURRENT_TIMESTAMP)");
                            }

                            ?>
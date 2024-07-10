<?php
    include('dbcon.php');

    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];

        $check = "SELECT * FROM student WHERE ID = '$ID'";
        $check = mysqli_query($conn, $check);

        $row = mysqli_fetch_assoc($check);
        
    
        if($row['attended'] == 'Yes'){
            echo "<script>
                    window.alert('RECORD ALREADY UPDATED');
                    window.location.href='search.php';
                </script>";
        }else{
            
            $attended = $row['attended'];

            $sql = "UPDATE students SET attended = '$attended'";
            $sql = mysqli_query($conn, $sql);

            if($sql){
                echo "<script>
                    window.alert('UPDATED SUCCESFULLY');
                    window.location.href='search.php';
                </script>";
            }
        }
    }

?>
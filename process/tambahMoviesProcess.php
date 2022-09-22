<?php 
if(isset($_POST['submit'])){ 
    
    include('../db.php');
    
    $judul = $_POST['inputJudul']; 
    $genre = $_POST['inputGenre'];
    $release = $_POST['inputRelease']; 
    $season = $_POST['inputSeason']; 
    $synopsis = $_POST['inputSynopsis']; 

        $query = mysqli_query($con, 
            "INSERT INTO movies(judul, genre, realese, season, membership) 
                VALUES
            ('$judul', '$genre', '$release', '$season', '$synopsis')") 
                or die(mysqli_error($con));  
            
        if($query){ 
            echo 
                '<script> 
                alert("Tambah Film Berhasil"); 
                window.location = "../index.php" 
                </script>'; 
        }else{ 
            echo 
                '<script> 
                alert("Tambah Film Gagal"); 
                </script>'; 
        }
    
}else{ 
    echo 
        '<script> 
        window.history.back() 
        </script>'; 
}

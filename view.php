<?php
    require_once 'dbcon.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <!-- <link rel="stylesheet" href="ttps://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"> -->
    
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
</head>

<body>
    <div class="d-flex vh-100 justify-content-center align-items-center">
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Modification</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $qry = "SELECT * FROM tbluser";
                    $res = $con -> query($qry);

                    if(!$res){
                        die("Data not found");
                    }
                    else
                    {
                        while( $row = $res -> fetch_assoc())
                        {
                            ?>
                                <tr>
                                    <th><?php echo $row['Name']?></th>
                                    <td><?php echo $row['City']?></td>
                                    <td><?php echo $row['Gender']?></td>
                                    <td><?php echo $row['Username']?></td>
                                    <td><?php echo $row['Password']?></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary me-2"><i class="bi bi-pencil-square"></i></a>
                                        <a href="delete.php?id=<?php echo $row['UserID']?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="index.php" class="btn btn-primary">Add User</a>
</body>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        let table = new DataTable('#myTable');
    </script>

    <?php
        if(($code = $_GET['msg']) == null){
            die;
        }
        elseif(($code = $_GET['msg']) == 123){
            echo"
            <script>
            Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success'
            });
            </script>";
        }
    ?>  
</html>
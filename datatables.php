<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></link>
</head>
<body> 
    <table>
        <thead>
            <tr>
                <td>Breed</td>
                <td>Size</td>
                <td>Children</td>
                <td>Low Shedding</td>
            </tr>
        </thead>
        <?php
        include 'connect.php';
        $sql = "SELECT * FROM dogs";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><?php echo $row['breed']; ?></td>
                <td><?php echo $row['size']; ?></td>
                <td><?php echo $row['children']; ?></td>
                <td><?php echo $row['lowshedding']; ?></td>
            </tr>

        <?php endwhile ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('table').DataTable();
        });
    </script>
</body>
</html>
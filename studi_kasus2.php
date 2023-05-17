<!DOCTYPE html>
<html>
<head>
    <title>Studi Kasus 2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script type="text/javascript" charset= "utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>    
</head>

<body>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fitri</td>
                <td>20</td>
                <td>Banaran</td>
            </tr>
            <tr>
                <td>Desiana</td>
                <td>19</td>
                <td>Watudandang</td>
            </tr>
            <tr>
                <td>Afani</td>
                <td>18</td>
                <td>Prambon</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').dataTable();
    });
</script>


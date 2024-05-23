<!DOCTYPE html>
<html lang="en" class="journaliste-page-styles">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN_SOCER </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../style.css">
</head>

<style>
.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

.table-secondary,
.table-secondary>td,
.table-secondary>th {
    background-color: #d6d8db;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}

.table-bordered td,
.table-bordered th {
    border: 1px solid #dee2e6;
}

.table td,
.table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

th {
    text-align: inherit;
}

table {
    border-collapse: collapse;
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-warning {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107;
}
</style>

<?php include'home_header.php'; ?>
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th scope="col">#</th>

            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td style="color: red;">Mohamed</td>
            <td>yahia</td>
            <td style="color: red;">641896156</td>
            <td>med@gmail.com</td>

            <td>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <!-- Repeat similar structure for other rows -->
        <!-- ... -->
    </tbody>
</table>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

<footer>
    <?php include '../footer.php';?>
</footer>

</html>
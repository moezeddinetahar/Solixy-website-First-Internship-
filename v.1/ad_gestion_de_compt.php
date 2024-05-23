<!DOCTYPE html>
<html lang="en" class="journaliste-page-styles">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ADMIN_SOCER </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/Solixy%20web-site/v.1/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>

<style>
.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}
.table-secondary, .table-secondary>td, .table-secondary>th {
    background-color: #d6d8db;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
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
  button:hover {
    color: blue;
  }


</style>

<?php include'home_header.php'; ?>
<body>


  <?php
    require_once("config.php");

    // Vérifier la connexion à la base de données
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Récupérer les données de la table "accounts"
    $sql = "SELECT * FROM accounts";
    $result = mysqli_query($db, $sql);
    ?>

    <!-- Le reste de votre code HTML -->

    <?php
    // Afficher les données de la table dans un tableau
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="table table-bordered">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom d'utilisateur</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom de famille</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['family']; ?></td>
                        <td><?php echo $row['datebirth']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <!-- Add a form around the delete button -->
                            <form method="post">
                                <input type="hidden" name="userId" value="<?php echo $row['id']; ?>">
                    			<button type="submit" class="btn btn-danger" onclick="deleteUser(<?php echo $row['id']; ?>, '<?php echo $row['username']; ?>')">Delete</button>
                            </form>
                        </td>                   
                         </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


<script>
    function deleteUser(userId, userName) {
        var confirmationMessage = 'Are you sure you want to delete user "' + userName + '"?';

        if (confirm(confirmationMessage)) {
            // Send an AJAX request to delete the user
            $.ajax({
                type: "POST",
                url: "delete_user.php",
                data: {
                    userId: userId
                },
                success: function (response) {
                    // You can update the table row in the success callback if deletion is successful
                    // For example, remove the row from the table without reloading the entire page
                    $('#userRow_' + userId).remove();
                },
                error: function (error) {
                    console.error("Error deleting user:", error);
                }
            });
        }
    }
</script>




        <?php
        require_once("config.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["userId"])) {
            // Récupérer l'identifiant de l'utilisateur à supprimer
            $userId = $_POST["userId"];

            // Supprimer le compte de la table
            $sql = "DELETE FROM accounts WHERE id = $userId";

            if (mysqli_query($db, $sql)) {
                echo '<p style="color: red;">Compte supprimé avec succès</p>';
            } else {
                echo "Erreur: " . $sql . "<br>" . mysqli_error($db);
            }
        } else {
            echo "Erreur: Identifiant de l'utilisateur non spécifié.";
        }
        ?>

    <?php
    } else {
        echo "Aucun compte trouvé dans la base de données.";
    }

    // Fermer la connexion à la base de données
    mysqli_close($db);
    ?>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

<footer>
	<?php include 'C:/wamp64/www/Solixy web-site/v.1/footer.php';?>
</footer>
</html>
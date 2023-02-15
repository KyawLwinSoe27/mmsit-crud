<?php require_once "./templates/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Lists</h3>

            <?php 
                $sql = "SELECT * FROM my";
                $query = mysqli_query($conn,$sql);

                $totalSql = "SELECT sum(money) AS total FROM my";
                $totalQuery = mysqli_query($conn, $totalSql);
                
            ?>
            <p>total Lists = <?= $query->num_rows;?></p>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Money</th>
                        <th>Actions</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($query)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['money'] ?></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class=""></i></a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                            <td><?= $row['created_at'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">Total</td>
                        <td colspan="2"><?= mysqli_fetch_assoc($totalQuery)['total'] ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php require_once "./templates/footer.php" ?>

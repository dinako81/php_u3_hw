<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Clients List</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach($clients as $client) : ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>Name</b></th>
                                    <th scope="col"><b>Surname</b></th>
                                    <th scope="col"><b>Personal code</b></th>
                                    <th scope="col"><b>Account number</b></th>
                                    <th scope="col"><b>Account balance</b></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?= $client['name'] ?></td>
                                    <td><?= $client['surname'] ?></td>
                                    <td><?= $client['personal_code'] ?></td>
                                    <td><?= $client['acc_number'] ?></td>
                                    <td><?= number_format($client['acc_balance'], 2, ',', ' ') ?> Eur</td>
                                    <td>
                                        <a href="<?= URL ?>clients/addfunds/<?= $client['id'] ?>"
                                            class="btn btn-success">Add
                                            funds</a>
                                    </td>
                                    <td>
                                        <a href="<?= URL ?>clients/withdrawfunds/<?= $client['id'] ?>"
                                            class="btn btn-primary">Withdraw funds</a>
                                    </td>
                                    <td>
                                        <form action="<?= URL ?>clients/delete/<?= $client['id'] ?>" method="post">
                                            <button type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
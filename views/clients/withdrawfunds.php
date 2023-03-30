<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Withdraw Funds</h1>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>clients/withdrawfunds/<?= $client['id'] ?>" method="post">
                        <div class="mb-3">
                            Name: <b><?= $client['name'] ?></b>
                        </div>
                        <div class="mb-3">
                            Surname: <b><?= $client['surname'] ?></b>
                        </div>
                        <div class="mb-3">
                            Account balance: <b> <?= number_format($client['acc_balance'], 2, ',', ' ') ?> Eur
                        </div>
                        <div class="mb-3">
                            <input type="text" name="acc_balance" placeholder="euro">
                            <div class="form-text"><i>(Withdraw some money here)</i></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Withdraw Funds</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Funds</h1>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>clients/addfunds/<?= $client['id'] ?>" method="post">
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
                            <div class="form-text"><i>(Add some money here)</i></div>
                        </div>
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="tt" name="tt"
                                <?= $client['tt'] ? 'checked' : '' ?>>
                            <label class="form-check-label" for="tt">Married</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Add Funds</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
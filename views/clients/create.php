<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Client</h1>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>clients/create" method="post">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="name">
                            <div class="form-text">Please add client name here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Surname</label>
                            <input type="text" class="form-control" name="surname">
                            <div class="form-text">Please add client surname here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Personal code</label>
                            <input type="text" class="form-control" name="personal_code">
                            <div class="form-text">Please add client personal code here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Account number</label>
                            <input readonly type="text" class="form-control" name="acc_number">
                            <div class=" form-text"> </div>
                        </div>
                        <div class="mb-3 invisible">
                            <label class="form-label">Client Account balance</label>
                            <input type="number" class="form-control " name="acc_balance" value="0">
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="tt" name="tt">
                            <label class="form-check-label" for="tt">Married</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
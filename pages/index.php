<?php include 'header.php';?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-center text-white">String Word Count</div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label bg-primary text-white">Your String</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="string" value="<?php echo isset($result['string']) ? $result['string'] : '' ; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label bg-primary text-white">Total World</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="<?php echo isset($result['word']) ? $result['word'] : '' ; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label bg-primary text-white">Total Character</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="<?php echo isset($result['character']) ? $result['character'] : '' ; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>



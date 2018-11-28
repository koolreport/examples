<div class="report-content">
    <div class="text-center">
        <h1>Customer Orders</h1>
        <p class="lead">Select customer then display their orders</p>
    </div>
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <?php $this->subReport("customerselecting"); ?>
        </div>
    </div>
    
    <?php $this->subReport("listorders"); ?>
</div>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col mt-2">
                <button class="btn btn-primary" id="<?php echo($ceo[0]['id'])?>">
                    <?php echo ($ceo[0]['first_name'].' '.$ceo[0]['middle_name'].' '.$ceo[0]['surname'].
                    ' ['.$ceo[0]['position_name'].']')?>
                </button>
            </div>
        </div>
        <div class="row hidden <?php echo ($ceo[0]['id']); ?>">

        </div>
    </div>
</body>

</html>


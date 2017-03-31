<div class="row">
    <div class="col-lg-12">
        <h2>Блог</h2>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="btn btn-success" href="/blog/index/"><i class="glyphicon glyphicon-chevron-left"></i> Все записи</a>
            </div>
            <div class="well-lg">
                <div class="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1><?php echo $this['post']->author; ?> <small><?php echo date('d.m.Y, в H:i', $this['post']->date); ?></small></h1>
                                    <p><?php echo $this['post']->text; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
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
                                    <h1><?php echo $this['blog_post']->author; ?> <small><?php echo date('d.m.Y, в H:i', $this['blog_post']->date); ?></small></h1>
                                    <p><?php echo $this['blog_post']->text; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>Комментарии</span>
            </div>
            <?php if (!empty($this['comments'])): ?>
                <?php foreach ($this['comments'] as $c): ?>
                    <div class="well-lg">
                        <div class="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5 class="media-heading"><strong><?php echo $c->author; ?></strong> <small><?php echo date('d.m.Y, в H:i', $c->date); ?></small></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><?php echo $c->text; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="well-lg">
                    <div class="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <h4>Комментариев пока нет :(</h4>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Добавить запись</div>
            <div class="form-wrapper">
                <form id="add-comment" class="form-horizontal well-lg" action="#add-comment" method="post" enctype="multipart/form-data">
                    <?php if (isset($this['action_result'])): ?>
                        <div class="col-lg-offset-2 alert alert-<?php echo $this['action_result']['result']; ?>">
                            <?php echo $this['action_result']['data']; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group<?php echo (isset($this['validation_errors']) && $this['validation_errors']['author']) ? ' has-error' : ''; ?>">
                        <label for="name" class="col-lg-2 control-label">Ваше имя</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="author" placeholder="Игнат Подоконников"
                                   value="<?php echo (isset($this['post']) && $this['post']['author']) ? $this['post']['author'] : ''; ?>">
                        </div>
                    </div>
                    <div class="form-group<?php echo (isset($this['validation_errors']) && $this['validation_errors']['text']) ? ' has-error' : ''; ?>">
                        <label for="text" class="col-lg-2 control-label">Текст комментария</label>
                        <div class="col-lg-10">
                            <textarea rows="5" class="form-control" id="text" name="text" placeholder="Круто!"><?php echo (isset($this['post']) && $this['post']['text']) ? $this['post']['text'] : ''; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<h2>Блог</h2>
<?php if (!empty($this['top_posts'])): ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Популярное (<?=count($this['top_posts'])?>)</span>
                </div>



                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($this['top_posts'] as $k => $p): ?>
                            <div class="item<?php echo ($k == 0) ? ' active' : '' ?>">
                                <div class="well-lg">
                                    <div class="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-lg-offset-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5 class="media-heading"><strong><?php echo $p->author; ?></strong> <small><?php echo date('d.m.Y, в H:i', $p->date); ?>
                                                                (<?php echo $p->comments . ' ' . ending($p->comments, ['комментарий', 'комментария', 'комментариев']) ?>)</small></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <p><?php echo trim_text($p->text, 100); ?></p>
                                                        <a class="btn btn-success" href="/blog/post/<?php echo $p->id ?>">Читать полностью</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                    
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Назад</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Вперед</span>
                    </a>
                </div>                
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>Все записи</span>
            </div>
            <?php if (!empty($this['all_posts'])): ?>
                <?php foreach ($this['all_posts'] as $p): ?>
                    <div class="well-lg">
                        <div class="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5 class="media-heading"><strong><?php echo $p->author; ?></strong> <small><?php echo date('d.m.Y, в H:i', $p->date); ?>
                                                    (<?php echo $p->comments . ' ' . ending($p->comments, ['комментарий', 'комментария', 'комментариев']) ?>)</small></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><?php echo trim_text($p->text, 100); ?></p>
                                            <a class="btn btn-success" href="/blog/post/<?php echo $p->id ?>">Читать полностью</a>
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
                                    <h4>Записей пока нет :(</h4>
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
                <form id="add-post" class="form-horizontal well-lg" action="#add-post" method="post" enctype="multipart/form-data">
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
                        <label for="text" class="col-lg-2 control-label">Текст</label>
                        <div class="col-lg-10">
                            <textarea rows="5" class="form-control" id="text" name="text" placeholder="Текст"><?php echo (isset($this['post']) && $this['post']['text']) ? $this['post']['text'] : ''; ?></textarea>
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
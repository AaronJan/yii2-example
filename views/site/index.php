<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = '留言板';

?>

<div class="page-welcome">
    <div class="ui container">

        <!-- 注册、登陆提示 start -->
        <!--
        <div class="ui stacked segment">
            <div class="ui two column middle aligned relaxed fitted stackable grid">
                <div class="center aligned column">
                    <a href="{{ url('/auth/login') }}" class="huge blue ui labeled icon button">
                        <i class="signup icon"></i>
                        登陆
                    </a>
                </div>
                <div class="ui vertical divider">
                    或
                </div>
                <div class="center aligned column">
                    <a href="{{ url('/auth/register') }}" class="huge green ui labeled icon button">
                        <i class="signup icon"></i>
                        注册
                    </a>
                </div>
            </div>
        </div>
        -->
        <!-- 注册、登陆提示 end -->

        <!-- 留言区域 start -->
        <div class="ui grid">
            <div class="column sixteen wide">
                <div class="ui segment">
                    <h2 class="ui dividing header">留言板</h2>

                    <?php foreach ($models as $model) { ?>
                        <div class="ui feed">
                            <div class="event">
                                <div class="label">
                                    <img src="/image/user.png">
                                </div>
                                <div class="content">
                                    <div class="summary">
                                        <span class="ui blue label"><?= $model->user->name ?></span>
                                        <?= $model->content ?>
                                        <!-- Haven't been implemented yet
                                        <div class="date">
                                            1 day ago
                                        </div>
                                        -->
                                    </div>
                                    <!-- Haven't been implemented yet
                                    <div class="meta">
                                        <a class="like">
                                            <i class="like icon"></i> Like
                                        </a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Pagination start -->
                    <div class="ui column center aligned">
                        <?php
                        echo LinkPager::widget([
                            'pagination' => $pages,
                        ]);
                        ?>
                    </div>
                    <!-- Pagination end -->

                    <div class="ui divider"></div>

                    <?php $flashedMsgs = Yii::$app->session->getAllFlashes(); ?>

                    <?php if (isset($flashedMsgs['success'])) { ?>
                        <div class="ui primary inverted green segment">
                            <p><?= $flashedMsgs['success'] ?></p>
                        </div>
                    <?php } ?>

                    <?php if (isset($flashedMsgs['errors'])) { ?>
                        <div class="ui primary inverted red segment">
                            <?php foreach ($flashedMsgs['errors'] as $eachMsg) { ?>
                                <p><?= $eachMsg ?></p>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <form action="/message/store" method="post" class="ui form">
                        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                        <input type="hidden" name="user_id" value="1">

                        <div class="field">
                            <label for="comment-textarea">留言</label>
                            <textarea id="comment-textarea" name="content"></textarea>
                        </div>

                        <button type="submit" class="ui submit button green fluid">发布</button>
                    </form>
                    <!--
                    <div class="ui info message">
                        <p>
                            登陆后即可留言！
                        </p>
                    </div>
                    -->

                </div>
            </div>
        </div>
        <!-- 留言区域 end -->
    </div>
</div>


<?php
/*
foreach ($models as $model) {
    echo $model->content . '<br>';
}

// display pagination
echo LinkPager::widget([
    'pagination' => $pages,
]);
?>
*/
?>


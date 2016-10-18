<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
    
    <div class="alert alert-success">Test View</div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
        </tbody>
    </table>
    
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-default">Default</button>
    <input type="button" class="btn btn-success" value="success">
    <input type="button" class="btn btn-warning" value="warning">
    <input type="submit" class="btn btn-danger" value="danger">
    
</div>

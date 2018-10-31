<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo $userinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userinfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Userinfo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($userinfo) ?>
    <fieldset>
        <legend><?= __('Edit Userinfo') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('sex');
            echo $this->Form->control('birthday');
            echo $this->Form->control('hight');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

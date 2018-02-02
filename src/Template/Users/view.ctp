<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Changelogs'), ['controller' => 'Changelogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Changelog'), ['controller' => 'Changelogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Changelogs') ?></h4>
        <?php if (!empty($user->changelogs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Changelog Category Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->changelogs as $changelogs): ?>
            <tr>
                <td><?= h($changelogs->id) ?></td>
                <td><?= h($changelogs->title) ?></td>
                <td><?= h($changelogs->changelog_category_id) ?></td>
                <td><?= h($changelogs->description) ?></td>
                <td><?= h($changelogs->priority) ?></td>
                <td><?= h($changelogs->url) ?></td>
                <td><?= h($changelogs->status) ?></td>
                <td><?= h($changelogs->user_id) ?></td>
                <td><?= h($changelogs->created) ?></td>
                <td><?= h($changelogs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Changelogs', 'action' => 'view', $changelogs->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Changelogs', 'action' => 'edit', $changelogs->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Changelogs', 'action' => 'delete', $changelogs->], ['confirm' => __('Are you sure you want to delete # {0}?', $changelogs->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

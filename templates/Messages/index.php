<div>
    <?= $this->Form->create($message) ?>
    <?= $this->Form->control('text') ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div>
    <ul>
    <?php foreach ($messages as $message): ?>
        <li><?= h($message->text) ?></li>
    <?php endforeach; ?>
    </ul>
</div>

<?php require('partials/head.php'); ?>

  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li>
        <?php if ($task->completed) :?>
          <strike>
        <?php endif; ?>

        <?php echo $task->description; ?>

        <?php if ($task->completed) :?>
          </strike>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>

<?php require('partials/footer.php') ?>

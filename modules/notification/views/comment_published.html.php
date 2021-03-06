<?php defined("SYSPATH") or die("No direct script access.") ?>
<html>
  <head>
    <title><?= html::clean($subject) ?> </title>
  </head>
  <body>
    <h2><?= html::clean($subject) ?></h2>
    <table>
      <tr>
        <td><?= t("Comment:") ?></td>
  <td><?= nl2br(html::purify($comment->text)) ?></td>
      </tr>
      <tr>
        <td><?= t("Author Name:") ?></td>
        <td><?= html::clean($comment->author_name()) ?></td>
      </tr>
      <tr>
        <td><?= t("Author Email:") ?></td>
        <td><?= html::clean($comment->author_email()) ?></td>
      </tr>
      <tr>
        <td><?= t("Author URL:") ?></td>
        <td><?= html::clean($comment->author_url()) ?></td>
      </tr>
      <tr>
        <td><?= t("Url:") ?></td>
        <td>
          <a href="<?= $comment->item()->url(array(), true) ?>#comments">
            <?= $comment->item()->url(array(), true) ?>#comments
          </a>
        </td>
      </tr>
    </table>
  </body>
</html>

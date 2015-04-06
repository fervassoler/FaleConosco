<h1>Posts do Blog</h1>
<table>
    <tr>
        <th>Título</th>
        <th>Data de Criação</th>
    </tr>

    <?php foreach ($posts as $post): ?>
    <tr class="<?php echo $post['Post']['read']?'read':'unread';?>">
        <td>
            <?php $subject = $post['Post']['subject'];

            switch ($subject) {
                case 0:
                    $subject = "Consumidor";
                    break;
                case 1:
                    $subject = "Profissional";
                    break;
                case 2:
                    $subject = "Lojista";
                    break;
                case 3:
                      $subject = "Estudantes";
                      break;
                case 4:
                       $subject = "Outros";
                       break;
            }
            echo $this->Html->link( $subject,
                              array('controller' => 'posts', 'action' => 'view',
                              $post['Post']['id']));
            ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
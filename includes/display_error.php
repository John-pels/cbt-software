<?php   if (isset($_SESSION['msg'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?> text-center positioning">
     <?php  echo ($_SESSION['msg']);
             unset($_SESSION['msg']);
     ?>
    </div>

    <?php endif ?>
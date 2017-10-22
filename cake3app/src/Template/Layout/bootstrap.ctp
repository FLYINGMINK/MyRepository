    <!DOCTYPE html>
    <html>
      <head>
        <?=$this->Html->charset(); ?>
        <title>
            <?=$this->fetch('title'); ?>
        </title>
        <?php
            echo $this->Html->css('bootstrap');
            //echo $this->Html->script('bootstrap');

            //echo $this->fetch('meta');
            //echo $this->fetch('css');
            //echo $this->fetch('script');
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <div id="header">*** Header ***</div>
        <div id="content">
            <?=$this->fetch('content'); ?>
        </div>
        <div class="btn-group">
            <button class="btn">Left</button>
            <button class="btn">Middle</button>
            <button class="btn">Right</button>
        </div>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#">Action</a></li>
            <li><a tabindex="-1" href="#">Another action</a></li>
            <li><a tabindex="-1" href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">Separated link</a></li>
        </ul>
        <div id="footer">*** This is test. ***</div>
        <?=$this->Html->script('bootstrap'); ?>
        <script src="http://code.jquery.com/jquery.js"></script>
      </body>
    </html>
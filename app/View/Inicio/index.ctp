<h1 class="offset4">Bienvenido</h1></br>	
<div class="row">
    <div class="span6 offset3">
    <div id="myCarousel" class="carousel slide">

        <div class="carousel-inner">
            <div class="active item">
                <?php echo $this->Html->image('wellcome.gif', array('height' => '100', 'width' => '500')); ?>

            </div>
            <div class="item">
                <?php echo $this->Html->image('2.jpg', array('height' => '100', 'width' => '500')); ?>
            </div>
            <div class="item">
                <?php echo $this->Html->image('3.jpg', array('height' => '100', 'width' => '500')); ?>
            </div>
            <div class="item">
                <?php echo $this->Html->image('4.jpg', array('height' => '100', 'width' => '500')); ?>
            </div>
        </div>
         <?php echo $usuario ?>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
        </div>
</div>



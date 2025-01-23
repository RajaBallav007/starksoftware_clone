

<?php if(isset($cardType) && $cardType === 'color'): ?> 
<div class="blockchain__card bg-light p-4 rounded-1" style="background-color: <?= $bgColor; ?> !important;"> 
    <figure class="icon">
        <img src="<?= $icon;?>" alt="icon" width="65" height="65" loading="lazy" class="img-fluid object-fit-contain">
    </figure>
    <h3 class="fs-4 fw-bold text-white"><?= $title;?></h3>
    <p class="text-white"><?= $desc;?></p>
</div>
<?php elseif(isset($cardType) && $cardType === 'solution'): ?>
<div class="game_solution__card bg-white text-center p-4 rounded-3" style="box-shadow: 0px 0px 8px 0px #0000001A;"> 
    <figure class="icon">
        <img src="<?= $icon;?>" alt="icon" width="70" height="70" loading="lazy" class="img-fluid object-fit-contain">
    </figure>
    <h3 class="fs-4 fw-bold text-dark"><?= $title;?></h3>
    <p class="mb-0"><?= $desc;?></p>
</div>
<?php else: ?>
<div class="blockchain__card bg-light p-4 rounded-3"> 
    <figure class="icon">
        <img src="<?= $icon;?>" alt="icon" width="70" height="70" loading="lazy" class="img-fluid object-fit-contain">
    </figure>
    <h3 class="fs-4 fw-bold text-dark"><?= $title;?></h3>
    <p><?= $desc;?></p>
</div>
<?php endif; ?>
<?php
$bannerInfo = 0;
$title = 'Currenty Alert | Portal Trader';
$produto = 'Currenty Alert';
include "header.php";
?>

<div class="courses">
    <div class="container">
        <h2 class="w3ls_head"><?php if(isset($produto)){ echo $produto; }?></h2>
        <p class="w3layouts_para">Fusce quis leo in augue ultricies tincidunt a quis mi. Donec at massa nec sem eleifend fermentum.</p>
        <div class="agileits_w3layouts_team_grids w3ls_courses_grids">
            <div class="col-md-6 w3ls_banner_bottom_left w3ls_courses_left">
                <div class="w3ls_courses_left_grids">
                    <div class="w3ls_courses_left_grid">
                        <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sobre o Produto</h3>
                        <p>Pellentesque convallis diam consequat magna vulputate malesuada.
                            Cras a ornare elit.Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar  Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
                    </div>
                    <div class="w3ls_courses_left_grid">
                        <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Benefícios</h3>
                        <p>Pellentesque convallis diam consequat magna vulputate malesuada.
                            Cras a ornare elit.Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar  Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
                    </div>


                </div>
            </div>

            <div style="" class="col-md-6 agileits_courses_right">
                <img src="images/finance1.jpg" alt=" " class="img-responsive">
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include "footer.php"; ?>

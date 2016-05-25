



<div class="portfolio-container">           
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="port-filter">
                    <ul>
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".photography">Photography</a></li>
                        <li><a href="#" data-filter=".webdesign">Web design</a></li>
                        <li class=""><a href="#" data-filter=".branding ">Branding </a></li>
                        <li><a href="#" data-filter=".illustration ">Illustration </a></li>
                        <li><a href="#" data-filter=".applications">Applications </a></li>
                        <li><?php
                            if (isset($_SESSION["user"])) {
                                echo '<p style="text-align:center"><kbd>Welcome! ' . $_SESSION["user"] . '</kbd></p>';
                            } else {
                                
                            }
                            ?>
                        </li>
                    </ul>


                </nav>

                <div class="classic-portfolio col-4-portfolio portfolio">
                    <?php
                    $list = db_select_list("SELECT tblId,tblName,tblDescription,tblImage FROM tblproduct");
                    foreach ($list as $value) {
                        ?>
                        <div class="project-item applications illustration  ">
                            <div class="project-image">
                                <img width="800" height="200" src="
                                <?php
                                $pic = $value["tblImage"];
                                echo ' public/images/course/' . $pic;
                                ?>" alt="">
                                <div class="overlay">
                                </div>
                            </div>
                            <div class="project-info">
                                <ul class="project-cat"> 
                                </ul>
                                <h4><a href="index.php?action=loadingPage&id=<?php echo $value["tblId"];?>"><?php echo $value["tblName"]; ?></a></h4>
                                <p>
                                    <?php echo $value["tblDescription"]; ?> 
                                </p>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="project-item webdesign branding applications photography">
                        <div class="project-image">
                            <img src="public/images/project/project-2-2.jpg" alt="">
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="project-info">
                            <ul class="project-cat">
                                <li><a href="#">Photography</a></li>
                            </ul>
                            <h4><a href="single-portfolio.html">Modern Design</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex hic, facilis aliquam dolor autem ...
                            </p>
                        </div>
                    </div>

                    <div class="project-item webdesign branding applications photography">
                        <div class="project-image">
                            <img src="public/images/project/project-2-2.jpg" alt="">
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="project-info">
                            <ul class="project-cat">
                                <li><a href="#">Photography</a></li>
                            </ul>
                            <h4><a href="single-portfolio.html">Modern Design</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex hic, facilis aliquam dolor autem ...
                            </p>
                        </div>
                    </div>

                    <div class="project-item webdesign branding applications photography">
                        <div class="project-image">
                            <img src="public/images/project/project-2-2.jpg" alt="">
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="project-info">
                            <ul class="project-cat">
                                <li><a href="#">Photography</a></li>
                            </ul>
                            <h4><a href="single-portfolio.html">Modern Design</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex hic, facilis aliquam dolor autem ...
                            </p>
                        </div>
                    </div>

                    <div class="project-item webdesign branding applications photography">
                        <div class="project-image">
                            <img src="public/images/project/project-2-2.jpg" alt="">
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="project-info">
                            <ul class="project-cat">
                                <li><a href="#">Photography</a></li>
                            </ul>
                            <h4><a href="single-portfolio.html">Modern Design</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex hic, facilis aliquam dolor autem ...
                            </p>
                        </div>
                    </div>




                </div>
                <ul class="pagination-cm"> 
                    <li class="total-pages"> Pages 1 of 3</li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">></a></li>
                </ul>
            </div>  
        </div>
    </div>
</div>
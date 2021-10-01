<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://i.pinimg.com/originals/01/41/f6/0141f60d4c2b891035b4dacf9e887a60.jpg" height="700"; width="350"; alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">29 Agustus 2021</div>
                            <?= "Creamy Vegan Pink Pasta" ?>
                            <p style="text-align: justify;" class="card-text">Pasta merah muda?! Ketika kami mendengar tentang hidangan yang lembut ini, kami tahu bahwa kami harus mencobanya! Peringatan spoiler? Sukses besar!
                            Saus tomat yang kaya dan gurih berpadu dengan krim kacang mete vegan dan mie untuk semangkuk kebaikan yang paling menenangkan. Hanya 10 bahan dan 30 menit yang 
                            dibutuhkan untuk hidangan utama atau sampingan yang ramah di hari kerja ini. Ayo buat pasta!</p>
                            <a class="btn btn-primary" href="#!">Resep →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://minimalistbaker.com/wp-content/uploads/2021/06/FRESH-Watermelon-Salad-with-Cucumber-and-Mint-Plant-based-just-10-ingredients-and-perfect-for-summer-minimalistbaker-recipe-plantbased-glutenfree-watermelon-cucumber-salad-6.jpg" height="700"; width="350"; alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">29 Agustus 2021</div>
                                    <h2 style="font-family: fantasy;" class="card-title h4">Minty Watermelon Cucumber Salad</h2>
                                    <p style="text-align: justify;" class="card-text">Bersiaplah untuk musim panas dalam mangkuk! Salad semangka segar dan berair ini penuh dengan rasa berkat semangka manis, mentimun renyah, daun mint cerah, bawang bombay, sedikit bumbu dari jalapeos, dan pepitas (atau pistachio) yang renyah. 
                                        Semuanya seimbang dengan indah dengan feta vegan asin dan saus jeruk nipis.</p>
                                    <a class="btn btn-primary" href="#!">Resep →</a>
                                </div>
                            </div>
                            
                            <?php 
                                require_once "post.php";
                            
                            ?>

                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">7</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">Halo! Selamat Datang di Hrdini Site</div>
                    </div>
                </div>
            </div>
        </div>
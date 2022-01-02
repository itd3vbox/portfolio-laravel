<section class="p-projects" id="projects">

    <h2>Projects</h2>

    <div class="list">
    
        <div class="projects">

            @for($i = 0; $i < 4; $i++)
            <article class="project">
                <img src="https://preview.colorlib.com/theme/calvin/assets/img/gallery/xgallery4.png.pagespeed.ic.3BAHAxRLqd.webp" 
                    alt="Demo">
                <div class="content">
                    <h6>
                        <span class="name">Project X</span>
                        <span class="date">0000-00-00</span>
                    </h6>

                    <div class="links">
                        <a href="#" class="button-icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="button-icon">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </div>
            </article>
            @endfor

        </div>

        <div class="pagination">
            <div class="prev"><div>Prev</div></div>
            <div class="next"><div>Next</div></div>
        </div>

    </div>

</section>
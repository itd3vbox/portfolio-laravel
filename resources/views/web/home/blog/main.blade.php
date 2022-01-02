<section class="p-blog" id="blog">

    <h2>Blog</h2>

    <div class="list">

        <div class="articles">

            @for($i = 0; $i < 3; $i++)
            <article class="article">
            
                <div class="block-1">
                    <img src="https://preview.colorlib.com/theme/calvin/assets/img/gallery/xgallery4.png.pagespeed.ic.3BAHAxRLqd.webp" 
                        alt="Demo">

                    <div class="btn-show">
                        <div class="button-icon">
                            <i class="fas fa-file"></i>
                        </div>
                    </div>
                </div>

                <div class="block-2">

                    <h6>Article 1</h6>

                    <div class="text">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Quod quae molestias assumenda eligendi ratione? Asperiores minima tempore 
                            doloribus veritatis eos, 
                            ad numquam nam sint quibusdam quis corrupti assumenda et expedita.
                            ...
                        </p>
                    </div>

                </div>

                <div class="block-3">
                    <div class="likes">
                        <div class="button-icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="value">1</div>
                    </div>
                    <div class="date-latest">
                        <span class="new">New</span> 0000-00-00
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

    @include('web.home.blog.dialog-show.main')

</section>
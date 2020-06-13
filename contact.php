<?php
include 'functions.php';
tmpl_header('Contact')
?>
<div id="templatemo_middle">
    <div id="mid_left">
        <div id="mid_title">Lorem ipsum dolor sit amet</div>
        <p>Sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>nostrud exercitation ullamco laboris nisi ut aliquip exa com consequat. Duis aute irure dolor in reprehenderit.</p>
        <a href="#" class="viewall"></a>
    </div>
    <img src="images/templatemo_icon_01.png" alt="free for job" />
    <a class="templatemo_middle_man" href="http://ru.forwallpaper.com" title="Нажмите здесь, чтобы посетить"  target="_blank"></a>
</div> <!-- end of middle -->

<div id="templatemo_main">

    <div class="cbox_fw">
        <div class="cbox_large float_l">
            <h2>Contact Information</h2>
            <p>Cras viverra posuere nunc, non aliquet nibh sagittis tempor. Nulla congue, purus consequat placerat volutpat, massa ipsum tempus est, ut pulvinar metus orci quis risus. Duis vitae nulla tortor, ac egestas justo. Aliquam urna augue, dapibus sed pellentesque ut, luctus sed nisi. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            <div id="contact_form">
                <form method="post" name="contact" action="#">

                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>
                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>

                    <label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                    <div class="cleaner h10"></div>

                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>

                    <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                    <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

                </form>
            </div>

            <div class="cleaner h20"></div>
        </div>
        <div class="cbox_small float_r">
            <h2>Recent Posts</h2>
            <div class="rp_box">
                <img src="images/templatemo_image_09.png" alt="image 1" />
                <p>Nunc varius, odio lobortis tempor mollis, sapien risus dapibus ligula...</p>
                <a href="#" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                <div class="cleaner"></div>
            </div>

            <div class="rp_box">
                <img src="images/templatemo_image_07.png" alt="image 2" />
                <p>Donec aliquet, neque eget mattis lacinia, dolor mauris ultricies diam...</p>
                <a href="#" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                <div class="cleaner"></div>
            </div>

            <div class="rp_box">
                <img src="images/templatemo_image_08.png" alt="image 3" />
                <p>Vestibulum sem urna, euismod ornare malesuada eget, vehicula id enim...</p>
                <a href="#" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                <div class="cleaner"></div>
            </div>

            <div class="rp_box">
                <img src="images/templatemo_image_09.png" alt="image 4" />
                <p>Ut turpis nulla, tincidunt rutrum condimentum ac, tempor lacinia turpis...</p>
                <a href="#" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                <div class="cleaner"></div>
            </div>
        </div>
        <div class="cleaner"></div>
    </div>

</div> <!-- end of main -->

</div>
</div>
<?php
tmpl_footer()
?>
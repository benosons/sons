<footer id="footer" class="bg-dark dark">

    <div class="footer-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0 text-center text-md-left">
                    <p class="mb-2"><span class="typing">Would you like to get my CV in PDF?</span></p>
                    <a href="#" class="btn btn-primary btn-sm">Download my CV</a>
                </div>
                <div class="spread-icons col-md-6 text-center text-md-right">
                    <a href="https://www.github.com/benosons/" target="_blank" class="icon icon-sm icon-white icon-hover"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/retno-sonjaya/" target="_blank" class="icon icon-sm icon-white icon-hover"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/benosons/" target="_blank" class="icon icon-sm icon-white icon-hover"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/benosons" target="_blank" class="icon icon-sm icon-white icon-hover"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/benosons/" target="_blank" class="icon icon-sm icon-white icon-hover"><i class="fa fa-facebook"></i></a>
                    <p class="text-muted mt-3 mb-0">&copy; <?php echo date("Y"); ?> Benosons | All Rights Reserved<br>
                    <!-- Made with love by <a href="http://suelo.pl" target="_blank" class="link-inherit">Suelo</a>.</p> -->
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- Window - Message -->
<div id="message-window" class="window window-primary">
    <svg class="window-background" viewBox="0 0 1920 1080" preserveAspectRatio="none"></svg>
    <div class="window-inner">
        <section class="section dark">
            <div class="section-content">
                <div class="container">
                    <!-- Section Header -->
                    <div class="section-header">
                        <img src="assets/img/photos/developer/avatar-sm.png" alt="" class="section-header-image">
                        <div class="section-header-content">
                            <span class="typing">I am waiting for a message from you :)</span>
                        </div>
                    </div>
                    <!-- Section Content -->
                    <form class="contact-form form-text"
                    data-message-error="Opps... Something went wrong - please try again later"
                    data-message-success="Thanks! You will recieve a responsve in 24h!" data-validate>
                        <div class="form-group">Hello! My name is <input name="name" type="text" class="form-control-text" required> and here is my message:</div>
                        <div class="form-group"><textarea name="message" cols="30" rows="4" class="form-control-text" required></textarea></div>
                        <div class="form-group">I will left you my e-mail - please reply: <input name="email" type="email" class="form-control-text" required></div>
                        <button class="btn btn-white btn-lg">Send message!</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<button class="window-toggle" data-target="#message-window"><i class="fa fa-comments"></i><i class="fa fa-times"></i></button>

<div class="modal modal-video fade" id="modalVideo" role="dialog">
    <button class="close" data-dismiss="modal"></button>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <iframe height="500"></iframe>
        </div>
    </div>
</div>

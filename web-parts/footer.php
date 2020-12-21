<section class="aw-footer">
    <div class="container">
        <div class="aw-footer__wrapper">
            <div class="aw-footer__text">
                <div class="aw-footer__text-title">Leave a Message</div>
                <div class="aw-footer__text-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ante tortor, fermentum quis rutrum ac, tempor quis augue.</div>
            </div>
            <div class="aw-footer__form">
                     <form action="index.php" metod="post" >
                     <div class="aw-footer__email">
                        <input class="aw-form__input" type="text" name="name" placeholder="Full name"/> 
                    </div>
                    <div class="aw-footer__email">
                        <input class="aw-form__input" type="text" name="Email" placeholder="Email"/> 
                    </div>
                    <div class="aw-footer__email">
                        <input class="aw-form__input" type="text" name="subject" placeholder="Subject"/> 
                    </div>
                    <div class="aw-footer__message">
                        <textarea class="aw-form__textarea" name="message" placeholder="Message" ></textarea>
                    </div>
                        <!-- <button class="aw-footer__btn" type="button">Link to website</button> -->
                        <button class="aw-footer__buttons" type="submit" name="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        link to website
                        </button>
                    </form>
                    <!-- php email -->
                        <?php 
                            if(isset($_POST['submit'])) {
                                $name = $_POST['name'];
                                $subject = $_POST['subject'];
                                $mailFrom = $_POST['mail'];
                                $message = $_POST['message'];

                                $mailTo = "atadzantajyrov020@gmail.com";
                                $headers = "From: ".$mailFrom;
                                $txt = "you have received an e-mail from".$name.".\n\n".$message;

                                mail($mailTo, $subject, $txt, $headers);
                                header("Location: index.php?mailsend");
                            }
                            ?>

                    <!-- php email -->

            </div>
    </div>
    </div>
    <div class="aw-copyright">
        <div class="aw-copyright__text">
        Copyright © 2020
        </div>
                <!-- <a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#!"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="#!"><i class="fa fa-github" aria-hidden="true"></i></i></a> -->
</div>
</section>

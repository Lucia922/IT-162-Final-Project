<?php 
include 'includes/header.php';
?>
    <section class="pic">
        <h2>РЧКЧ СВЕЛО</h2>
    </section>

    <div class="form">
        <h3> Newsletter </h3>
        <p> To receive updates from RukuSvelo <br> 
            please register your email address here. <p>
        <form class='newsForm' action="https://formsubmit.co/jinheebyoun@gmail.com" method="POST">
            <input type="hidden" name="_subject" value="New submission!">
            <input type="email" name="email" placeholder="email" required><br>
            <input type="hidden" name="_next" value="https://rukusvelo.com/IT-162-Final-Project/thankyou.php">
            <button type="submit">SUBSCRIBE</button>
        </form>
    </div>

<?php
include 'includes/footer.php';
?>
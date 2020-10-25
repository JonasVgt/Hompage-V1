<!DOCTYPE html>
<style>
footer {
    display: flex;
    flex-direction: column;
    align-items: normal;
    overflow: hidden;
    width: 100%;
    background-color: #4b4b4b;
    text-align: center;
    overflow: hidden;
}

.social-media-link {
    margin: 0pt;
    padding: 3pt;
    width: 20pt;
    height: 20pt;

}

#licence {
    background-color: darkslategray;
    margin: 0;
}
</style>

<footer id="contact">

    <?php
    include("contactform.php");
    ?>



    <div>
        <a href="mailto: jonas17voigt@gmail.com" target="_blank">
            <img class="social-media-link" src="Icons/Mail.svg" type="image/svg" /></a>

        <a href="https://youtube.com" target="_blank">
            <img class="social-media-link" src="Icons/Youtube.svg" type="image/svg" /></a>

        <a href="https://github.com" target="_blank">
            <img class="social-media-link" src="Icons/Github.svg" type="image/svg" /></a>

        <a href="https://twitter.com" target="_blank">
            <img class="social-media-link" src="Icons/Twitter.svg" type="image/svg" /></a>
    </div>

    <p id="licence">2020 Jonas Voigt</p>


</footer>
<div id="info-container" class="header">
    <?php $this->load->view('profile/meta'); ?>

    <section id="profile-banner">
        <div id="info">
            <p>My name is Marc Lambert Agas, a passionate programmer and a web developer enthusiast. I am an engineer with extra motivation to be able to help business projects achieve its goal.</p>
            <span class="block bold">"no sacrifice, no victory"</span>
        </div>
        <div id="share-buttons">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://marcthespark.byethost22.com/" data-text="Check out marcthespark" data-via="marc_lambert">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </section>
</div>

<section id="" class="content">
    <article class="aside">
        <a class="ads" href="http://byethost.com" target="_blank"><?php echo image_asset('vendor/byethost/byethost.gif', '', array('width'=>180, 'height'=>130, 'alt'=>'Byet Hosting')) ?></a>

        <div id="resume">
            <span>
                <i class="icon"></i>
                <?php echo anchor(site_url('resume'), 'Download Resume', array('target' => '_blank')); ?>
            </span>
        </div>
    </article>
    <section class="container">
        <article class="primary">
            <section id="updates-wall">
                <header>Updates:</header>
                <div class="update">
                    <span>Will attend Ruby Conference in Singapore on May 18-19, cool!</span>
                </div>
            </section>
            <?php $this->load->view('profile/_projects.php'); ?>
        </article>
    </section>
</section>
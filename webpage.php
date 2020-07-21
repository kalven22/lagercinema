
<?php

    if (isset($_GET["page"])) {
    if ($_GET["page"] == "ntr")
    {
        $type = "Cinema News";
        $heading = "NTR in Aravindha Sametha";

        $image = "ntr.jpg";
        $youtubesrc="https://www.youtube.com/embed/mRmuVYP36Hs";
        $text = "";

        $alternateText = "";

        $tweet = '<div class="container">


                    <div class="row">
                        <div class="col-2"></div>

                        <div class="col-8">
<!--Tweet Begins -->



<!--Tweet Ends -->
                            </div>

                            <div class="col-2"></div>
                        </div>

                    </div>';




    }

    else if ($_GET["page"] == "nationalfive")
    {
        $pagetitle = "Royal Wedding";
        $type = "Entertainment News";
        $heading = "'Royal Wedding' Set on May 19, 2018";
        $creator = "By Lager Reviewer‍ 9:23 PM PDT, May 18, 2018";
        $text = "Ambitioni dedisse scripsisse iudicaretur. Cras mattis
                        iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate
                        felis rhoncus. Praeterea iter est quasdam res quas ex communi.
                        At nos hinc posthac,
                        sitientis piros Afros. Petierunt uti
                        sibi concilium totius Galliae in diem certam indicere. Cras
                        mattis iudicium purus sit amet fermentum.
                    Ambitioni dedisse </br>scripsisse iudicaretur. Cras mattis
                    iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate
                    felis rhoncus.Working";

        $alternateText = "Ambitioni dedisse scripsisse iudicaretur. Cras mattis
                        iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate
                        felis rhoncus. Praeterea iter est quasdam res quas ex communi.
                        At nos hinc posthac,
                        sitientis piros Afros. Petierunt uti
                        sibi concilium totius Galliae in diem certam indicere. Cras
                        mattis iudicium purus sit amet fermentum.
                    Ambitioni dedisse </br>scripsisse iudicaretur. Cras mattis
                    iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate
                    felis rhoncus.Working";

        $tweet = '<div class="container">


                    <div class="row">
                        <div class="col-2"></div>

                        <div class="col-8">


                            <blockquote class="twitter-tweet" data-lang="en">
                                <p lang="en" dir="ltr">Red and Liz&#39;s journey continues.
                                    <a href="https://twitter.com/hashtag/TheBlacklist?src=hash&amp;ref_src=twsrc%5Etfw">#TheBlacklist</a> will return on
                                    <a href="https://twitter.com/nbc?ref_src=twsrc%5Etfw">@NBC</a>.
                                    <a href="https://t.co/63RK04rZYZ">pic.twitter.com/63RK04rZYZ</a><
                                    /p>&mdash; The Blacklist (@NBCBlacklist)
                                    <a href="https://twitter.com/NBCBlacklist/status/995484510673297408?ref_src=twsrc%5Etfw">May 13, 2018</a>
                                </blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>

                            <div class="col-2"></div>
                        </div>

                    </div>';
    }

}

include("inc/header.php");

?>

                    <!-- php ends -->


<div class="container">
     <div class="row">


          <div class="col-md-8">

            <div class="page-header-logo mb-3"><?php echo $heading; ?></div>

           <img src="images/<?php echo $image; ?>" class="img-fluid newsimg mb-3"  alt="Tech Picture" >
        <!--youtube video-->
           <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $youtubesrc; ?>"  allowfullscreen></iframe>
            </div>

            <!--/youtube video-->
            <p class="text-muted">

              <?php echo $text; ?>
           </p>

             <?php echo $tweet; ?>

             <p>
              <?php echo $alternateText; ?>
              </p>


          </div>


          <div class="col-md-1">
            <!-- left for space -->
          </div>


          <div class="col-md-3">




          </div>


    </div>
</div>





 <?php include("inc/footer.php"); ?>







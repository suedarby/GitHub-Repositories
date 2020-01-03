<?php define("TITLE", "Experience")?>
<?php include 'includes/header.php'; ?>
<section class="container"><!--page title-->
    <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h2 class="card-title suedarbylg"><?php echo TITLE;?></h5>
    </div>
        </div>
            </div>
                </div>
</section>

     <!--content-->
<!--Accordion Goes on OWN page for each experience, achievements, projects-->
<div class ="container"> 
<div id="accordion">
  <div class="card">
    <div class="card-header blue-gradient" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <h3>Current Activities</h3>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <p>While hunting for a new position I am definitely not idle! I have been doing everything from design, drafting and construction of my daughter's Senior Prom Dress to gardening to coding websites and engaging in online courses in web development, marketing, programming languages, photography and more. I am also active with a couple of groups as a volunteer for website work, event planning and social media.</p> 
        <a href="website.php" class="btn btn-primary">Website Network</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header blue-gradient" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h3>Paid Work</h3>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       <p> I have many years of paid work in a variety of industries. I started in retail working for a fabric store cutting fabrics and trims. I have worked in Yellowstone National Park as a cashier, Boxford MA as a Crafts Instructor for a summer camp and a crafts store, I've tutored and taught computer classes in college  and stocked and run a gift shop in a wild life theme park! I spent a winter in Steamboat<div class="form-group">
       
       </div> Springs, CO as a cashier as well. All before I had kids!</p> 
       <p> In the last few years I've written technical books on pattern drafting along with patterns, done career counseling, computer instruction, website development, and most recently been the administratve support for a team for the State of Alaska. I am looking to dig into my technical writing more along with website and app coding.</p>
        <a href="http://www.sue-a-darby.com/experience/" class="btn btn-primary">Experience</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header blue-gradient" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <h3>Volunteer Work</h3>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <p>I've done a lot of things as a volunteer. I've designed and coded websites for several individuals with old versions of HTML before CSS was thought of! I've managed modern websites for a couple groups. I've also worked in a pre-school classroom. I've even done some marketing and graphic design work.</p>
        <a href="http://www.sue-a-darby.com/experience/" class="btn btn-primary">Experience</a>
      </div>
    </div>
  </div>
</div>
<p></p>
<?php include 'includes/footer.php';?>
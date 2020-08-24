<?php
define('TITLE','About us');
define('PAGE','About us');
include('dbConnection.php');
include('header.php');

?>

<div class="col-sm-12 col-md-10 " >
    <!--- To display 3 divisions -->
   <div class="row text-center mx-5 mt-5 mb-5">
     <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
       <div class="card text-white bg-success mb-3"
       style="max-width: 21rem;">
           <h5 class="card-header ">Projects completed</h5>
            <div class="card-body">
            <h4 class="card-title">526</h4>
            <a class="btn text-white" href="#">view</a>
            </div>
       </div>  
     </div>
     <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
       <div class="card text-white bg-warning mb-3"
       style="max-width: 21rem;">
           <h5 class="card-header">Current Projects</h5>
            <div class="card-body">
            <h4 class="card-title">39</h4>
            <a class="btn text-white" href="#">view</a>
            </div>
       </div>  
     </div>
     <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
       <div class="card text-white bg-info mb-3"
       style="max-width: 21rem;">
           <h5 class="card-header"> Company Branches</h5>
            <div class="card-body">
            <h4 class="card-title">12 countries</h4>
            <a class="btn text-white" href="#">view</a>
            </div>
       </div>  
     </div>
   </div>
           <!--- To display 4 parts of services -->
          <div class="mx-3 text-center">
           <div class=" head bg-secondary text-white p-3 ">ABOUT US </div>
           </div>

           <section class="services-area mx-2 mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-justify services-title">
                        
                        <p class="para ">
                        This establishes the main-axis, thus defining the direction flex items are placed in the 
                        flex container. Flexbox is (aside from optional wrapping) a single-direction layout concept.
                         Think of flex items as primarily laying out either in horizontal rows or vertical columns.
                         This defines the default size of an element before the remaining space is distributed. 
                         It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means “look at
                         my width or height property” (which was temporarily done by the main-size keyword until 
                         deprecated). The content keyword means “size it based on the item’s content” – this
                          keyword isn’t well supported yet,so it’s hard to test and harder to know what its 
                          brethren max-content, min-content, and fit-content do.
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12" >
                            <div class="services">
                                <div class="sevices-img text-center py-4   ">
                                    <img src="./img/s1.png" alt="Services-1" class = "img-thumbnail"  >
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">PHP Development</h5>
                                    <p class="card-text text-secondary">
                                        Some quick example text to build on the card
                                        title and make up
                                        the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/s2.png" alt="Services-2" class = "img-thumbnail">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">JavaScript Development</h5>
                                    <p class="card-text text-secondary">
                                        Some quick example text to build on the card
                                        title and make up
                                        the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12" >
                            <div class="services">
                                <div class="sevices-img text-center py-4  ">
                                    <img src="./img/s3.png" alt="Services-3" class = "img-thumbnail" >
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">HTML Development</h5>
                                    <p class="card-text text-secondary">
                                        Some quick example text to build on the card
                                        title and make up
                                        the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12" >
                            <div class="services">
                                <div class="sevices-img text-center py-4 ">
                                    <img src="./img/s4.png" alt="Services-4" class = "img-thumbnail" >
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">CSS Development</h5>
                                    <p class="card-text text-secondary">
                                        Some quick example text to build on the card
                                        title and make up
                                        the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<?php
// include footer.php file
include ('footer.php');
?>
</html>         
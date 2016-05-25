


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
    
    
    function choose()
    {
        if (this.id == "answer1")
        {
  var b1 =  document.getElementById("answer1");    
    b1.className = "btn btn-success btn-lg";
        }
        else
        {
              var b2 =  document.getElementById(this.id);    
    b1.className = "btn btn-danger btn-lg";

        }
    
    }
</script> 
<div class="pages-header-container">         
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12">
                <div class="pages-header">

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12">





                                <h3 class="title-un">Which language is used to code ios's application</h3>
                                <p class="title-un-des">
                                    <a href="#" title="" data-toggle="popover" data-placement="right" data-content="Java and .Net are not right answers">Hint</a>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <button id="answer1" onclick="choose();" type="button" class="btn btn-default btn-lg">Swift</button>
                                <button id="answer2" type="button" class="btn btn-default btn-lg">Java</button>
                                <button type="button" class="btn btn-default btn-lg">.Net</button>
                                <button type="button" class="btn btn-default btn-lg">C#</button>
                            </div>




                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

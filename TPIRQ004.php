<DOCTYPE html>
<head>
<body>
<?Php require_once("inc/templates/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h3>Third Party Risk Management</h3>
                <h4>Inherent Risk Questionnaire</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="insert_TPIRQ004.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div style="margin-top: 60px;" class="text-center">
                    <p>4. What is the estimated total value (in GBP) of the engagement? </p>
                            <p><select value="TPIRQ004" id="TPIRQ004" class="form-control">
                                <option value="TPIRQ004">Select...</option>
                                <option value="TPIRQ004">R100,000-00 to R200,000-00</option>
                                <option value="TPIRQ004">R200,000-00 to R300,000-00</option>   
                                <option value="TPIRQ004">R300,000-00 to R400,000-00</option>
                                <option value="TPIRQ004">R400,000-00 to R500,000-00</option>
                                <option value="TPIRQ004">R500,000-00 to R600,000-00</option>
                                <option value="TPIRQ004">R500,000-00 to R600,000-00</option>
                                <option value="TPIRQ004">R600,000-00 to R700,000-00</option>
                                <option value="TPIRQ004">R800,000-00 to R900,000-00</option>
                                <option value="TPIRQ004">R1000,000-00 to R1,500,000-00</option>
                            </select></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <div style="margin-top:80px;">
                        <input name="next" type="submit" value="Next" class="btn btn-primary">
                        </br></br></br></br></br></br>
                        <a href="http://localhost:8080/irq/TPIRQ001.php?restartSession=true">Re-start Questionnaire</a>
                        <!-- <a href="Questionnaire4.php">.</a> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?Php require_once("inc/templates/footer.php"); ?>
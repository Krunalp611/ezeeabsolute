<?php include "includes/header.php"; ?>
<style>    
    .error-title{
        font-size: 135px;
        font-weight: 700;
        color: #CDCDCD;
        margin-top:10px;
        text-align:center;
    }
    .error_contant{margin-bottom: -20px;}
    .error_contant p{
        text-align:center;
        padding-bottom: 50px;
        line-height: 30px;}
    .error_contant p .whoops{/*color:  #4965f9;*/ font-weight: 700;}
    .error_contant p a:hover{text-decoration: none;}
    .prosection h3, .prosection h1{margin:0px; padding-bottom:10px;}
    .prosection{padding:40px 10px;}
</style>
<div class="pagetitle">
    <div class="container">
        <h1>Page not found</h1>
    </div>
</div>
<div class="error_contant">
    <h1 class="error-title">404</h1>
    <p><span class="whoops">Whoops!</span> The page you are looking for does not exist, it has either been renamed, moved, deleted or never existed.<br>Please try going back to the <a href="index.php"><span class="whoops">Home Page</span></a> or trying to navigate from here.</p>
</div>


<?php include "includes/footer.php"; ?>
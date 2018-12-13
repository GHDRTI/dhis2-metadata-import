<?php

require_once 'header.php';

?>

    <div class="jumbotron">
        <p>Welcome to the DHIS2 import tool, a tool written in PHP designed to be run locally to provide a CSV import file for providing a one way synchronization of data element values</p>
        <a href="info.php">info</a>
        <p>&nbsp;</p>
        <p>
            <a class="btn btn-lg btn-primary" href="https://github.com/PHPOffice/PHPSpreadsheet" role="button"><i class="fa fa-github fa-lg" title="GitHub"></i>  Fork us on Github!</a>
            <a class="btn btn-lg btn-primary" href="https://phpspreadsheet.readthedocs.io" role="button"><i class="fa fa-book fa-lg" title="Docs"></i>  Read the Docs</a>
        </p>


    </div>

 <h1> Login to the source DHIS2 </h1>

 <form action="index.php" method="post" enctype="multipart/form-data">
        <h2>Upload Mapping File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect"
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
        <input type="submit" value="Upload File" />
    </form>
   

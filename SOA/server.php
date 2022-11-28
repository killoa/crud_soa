
<?php   
    if(isset($_POST['cos'])){
        $x = $_POST['cosinput'];
        $page= $_POST['page'];
        try{
            $soapclient = new SoapClient('http://127.0.0.1:8000/maths/?wsdl');
            
            $result = $soapclient->cos(array('x' => $x));
           $simpleRes= $result->cosResult;
           header("Location: calc.php?page=$page&result=$simpleRes");
        }
        catch (SoapFault $e)
        {
            echo $e->getMessage();
        }
    }
        
        if(isset($_POST['sin'])){
            $x = $_POST['sininput'];
            $page= $_POST['page'];
            try{
                $soapclient = new SoapClient('http://127.0.0.1:8000/maths/?wsdl');
                $result = $soapclient->sin(array('x' => $x));
           $simpleRes= $result->sinResult;
           header("Location: calc.php?page=$page&result=$simpleRes");
        }
        catch (SoapFault $e)
        {
            echo $e->getMessage();
        }

    } 

    if(isset($_POST['max'])){
        $x = $_POST['xinput'];
        $y = $_POST['yinput'];

        $page= $_POST['page'];
        try{
            $soapclient = new SoapClient('http://127.0.0.1:8000/maths/?wsdl');
            $result = $soapclient->max(array('x' => $x, 'y' => $y));
       $simpleRes= $result->maxResult;
       header("Location: calc.php?page=$page&result=$simpleRes");
    }
    catch (SoapFault $e)
    {
        echo $e->getMessage();
    }

} 

if(isset($_POST['min'])){
    $x = $_POST['xinput'];
    $y = $_POST['yinput'];

    $page= $_POST['page'];
    try{
        $soapclient = new SoapClient('http://127.0.0.1:8000/maths/?wsdl');
        $result = $soapclient->min(array('x' => $x, 'y' => $y));
   $simpleRes= $result->minResult;
   header("Location: calc.php?page=$page&result=$simpleRes");
}
catch (SoapFault $e)
{
    echo $e->getMessage();
}

} 


?>

<?php
     $to ='pthiyokunaagrolestari@gmail.com';
     $from = 'rakaardiansyah23@gmail.com';
     $subject = 'Html Eamil Check';
     $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Untitled Document</title>
                </head>

                <body>
                <div style="width:400px; height:400px; background-color:#096; color:#FFF">
                <h1>Welcome to inet shopping site</h1>
                <p>
                Dear Raka Ardiansyah,
                We have received your Cash-On-Delivery order. We need to confirm your order by call. We will get in touch with you soon on Your order               will be processed only after confirmation.
                For the payment, please pay Rs. 4000 cash to the courier person when he delivers the product.
                "Please call us on 8882248819 to confirm after you deposit the amount."
                </div>
                </body>
                </html>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if(mail($to, $subject, $message, $headers)){
        echo 'ok';
    }
    else{
        echo 'error';
    }

?>
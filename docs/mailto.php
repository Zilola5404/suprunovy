<?php
include('phpmailer.php');
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")){ 
	$from_name='Clinic';
	$from_email='noreply@xn--b1avdcfeoc9e.xn--p1ai';
	$to_name='Sergey Suprunov';
        //$to_email = 'info@супруновы.рф'; 
        //$to_email = 'zagorovsky_v@mail.ru'; 
        $to_email = 'ssk-suprunovi@mail.ru'; 
        $subject = 'Запись на прием'; 
        $body = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
						<p>Имя: '.$_POST['name'].'</p>
						<p>Телефон: '.$_POST['tel'].'</p>
						<p>Контактный почтовый адрес: '.$_POST['email'].'</p>                        
						<p>Желательная дата приема: '.$_POST['date'].'</p>
						<p>Желательное время приема: '.$_POST['time'].'</p>                        
                    </body>
                </html>'; 
        phpmailer_mail($from_name, $from_email, $to_name, $to_email, $subject, $body); 

}
header ( 'Location: http://xn--b1avdcfeoc9e.xn--p1ai'  );
exit ();
?>

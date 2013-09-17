<?php
class Mail{
		

		/*
		*  Message which will be send to the user
		*/
		
		private $message = '';
		/*
		*  Email from which mail will send
		*/

		private $headers = '';
		
		
		/*
		*  Public variable which is used to define where the mail will go
		*/
		private $to= '';

		/*
		*  Message which will be send to the user
		*/
		
		private $subject = 'Mail From Elpunto de Venta Important';
		
		
		/*
		* public function which take parameter as recievers mail as well as the message and then send the mail
		* @returns whether mail is sent or not in string format
		*/
		
		function sendMail($to,$message,$email_sender){
			$this->to = $to;
			$this->message = $message;
			$this->headers = "Content-type: text/html; charset=utf-8\r\n;From:".$email_sender."\r\n";
			 $whetherMailSent = $this->mailFunction();
			
			return $whetherMailSent;
		}
		
		function mailFunction(){
			

			$retval  = mail($this->to,$this->subject,$this->message,$this->headers);			
			
			//temp codes ends here
			
			if( $retval == 1 )  
			   {
			  return 'mailsent';
			   }
			 else
			   {
				  return "Message could not be sent";
			   }

		}
		
		
		
		
		/**testing****/
		
		// function to send the informationof the company to the admin when he fills the contact form
		
		/*function sendInformation($name,$company_name,$city,$email,$phone_no,$comments){
			
			$company_email = $this->manage_content->getValue_where('company_info','company_email','company_name',$company_name);
			$message = $name."from".$company_name."lives in".$city."want to say".$comments;
			$mailsent = $this->mail_function->sendMail($company_email[0]['company_email'],$message,$email);
			$mailsent1 = $this->mail_function->sendMail($email,'your mail sent',$company_email[0]['company_email']);
			$mailsent = $mailsent."to the admin";          //confirmation of sending mail to the admin
			$mailsent1 = $mailsent1."to the ad owner";     //confirmation of sending mail to the adowner
			return $mail = array("firstmail" =>$mailsent,"secondMail" =>$mailsent1);
		}*/
		
		// function to send the information to the admin when he fills the contact form
		function contactToAdmin($name,$company_name,$city,$email,$phone_no,$comments,$admin_email){
			
			
			$message = "Sender Name:".$name."<br/>From:".$email."<br/>Company:".$company_name."<br/>City:".$city."<br/>Contact No.:".$phone_no."<br/>Comments:".$comments;
			$mailsent = $this->sendMail($admin_email,$message,$email);
			return $mailsent;
		}
		

		
	
}


?>
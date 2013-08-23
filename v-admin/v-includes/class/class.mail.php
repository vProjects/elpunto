<?php
class Mail{
		

		/*
		*  Message which will be send to the user
		*/
		
		private $message = '';
		


		
		
		/*
		*  Public variable which is used to define where the mail will go
		*/
		private $to= '';

		/*
		*  Message which will be send to the user
		*/
		
		private $subject = 'Mail From WC GROUP Important';
		
		
		/*
		* public function which take parameter as recievers mail as well as the message and then send the mail
		* @returns whether mail is sent or not in string format
		*/
		
		function sendMail($to,$message){
			$this->to = $to;
			$this->message = $message;
			
			 $whetherMailSent = $this->activationLink();
			
			return $whetherMailSent;
		}
		
		function activationLink(){
			
			
			$headers = "From: wcgroup@wcgroup.co.in" . "\r\n";

			$retval  = mail($this->to,$this->subject,$this->message,$headers);			
			
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
		

		
	
}


?>
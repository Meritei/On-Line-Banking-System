<?php
// forming a class that will hold all  banking operations methods
// banking methods will include depositing,checking balance and withdrawing


class  bankaccount  
                {
	

//this will take three  variables
//--->$balance                	
//----->$deposit
//------->$withdraw
                    $amount = 0 ;
                    $balance = 0 ;

                 public function  deposit ($amount)
                             {
                                 $this->balance = ($this->balance )+ $amount;
                                  
                                  return balance;
                             } 


                      public function  balance ($balance)
                             {

                         $showbalance = echo "Outstanding balance" . $this->balance . '<br>';

                          return $showbalance;

                             }
                           

                              public function  withdraw ($amount)
                             { 
                                if($this->balance < $amount)
                                   {
                                    $answerback = echo "withdraw impossible .insufficient balance in your account.Your outstanding balance is" . $this->balance ;

                                    return $answerback ;

                                   }
                                      else
                                        {

                                         $outstandingbalance =  $this->balance = $this->balance - $amount;

                                         $withdrawanswer = echo "your balance is now : " .$outstandingbalance;

                                                return  $withdrawanswer ;
                                     
                                         }

                             
                             }


                  } 

?>
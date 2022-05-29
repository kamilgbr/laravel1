<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars1;
use App\Models\UserCar;
use Illuminate\Http\Response;
use Illuminate\Http\Cookie;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Cookie as HttpFoundationCookie;

class MycarController extends Controller
{
 

        public function index(Request $request)
        {      
            $marka= request('q_marka');
            $model = request('q_model');
            $od = request('q_rok_produkcji_od');
            $do = request('q_rok_produkcji_do');
            $skrzynia = request('q_skrzynia');
            $paliwo = request('q_paliwo');
            $moc_od = request('q_moc_od');
            $moc_do = request('q_moc_do');
            $pojemnosc_od = request('q_pojemność_od');
            $pojemnosc_do = request('q_pojemność_do');
            $nadwozie = request('q_typ_nadwozia');
            
            error_log("Marka: ".$marka);
            error_log("Model: ".$model);
            error_log("ROK OD: ".$od);
            error_log("ROK DO: ".$do);
            error_log("Skrzynia: ".$skrzynia);
            error_log("Paliwo: ".$paliwo);
            error_log("Moc od: ".$moc_od);
            error_log("Moc do: ".$moc_do);
            error_log("Pojemność od: ".$pojemnosc_od);
            error_log("Pojemność do: ".$pojemnosc_do);
            error_log("Nadwozie: ".$nadwozie);
    
          
            $cars = Cars1::all();
            $test2 = UserCar::all();
          

            $call = $cars->filter(function($choose){
    
          
                
                // if(request('q_marka') == "Mercedes")
                // {
                        
                //     $choose-> Marka_pojazdu = 'Mercedes-Benz';
                //     error_log("Marka: ".$choose-> Marka_pojazdu);
        
                //         if($choose->Marka_pojazdu && 
                //             $choose->Model_pojazdu == request('q_model') && 
                //             ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
                //             $choose->Skrzynia_biegów == request('q_skrzynia') && 
                //             $choose->Rodzaj_paliwa == request('q_paliwo') &&
                //             ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do')) &&
                //             ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_od')) &&
                //             $choose->Typ_nadwozia == request('q_typ_nadwozia'))
                //         {
                          
                //              return true;
                        
                //         }
            
                //    return false;
                // }

                
                        //Jeżeli nadwozie

                        if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_pojemność_od') == 0 &&
                            request('q_pojemność_do') == 0 &&
                            request('q_paliwo') == NULL &&
                            request('q_moc_od') == 0 &&
                            request('q_skrzynia') == NULL &&
                            request('q_moc_do') == 0
                           
                          
                        )
                            

                        {
                                if( 
                                   
                     
                                    $choose->Typ_nadwozia == request('q_typ_nadwozia')
                                  )
                                
                                {
                                     return true;
                                }
                            
                            return false;

                        }

    //Jeżeli paliwo

    if( 
        request('q_marka')== NULL &&
        request('q_model')== NULL &&
        request('q_rok_produkcji_od')== NULL &&
        request('q_rok_produkcji_do')== NULL &&
        request('q_pojemność_od') == 0 &&
        request('q_pojemność_od') == 0 &&
        request('q_skrzynia') == NULL &&
        request('q_moc_od')== 0 &&
        request('q_moc_do')== 0 &&
        request('q_typ_nadwozia') == NULL 
       
    
        
        )
        {
            
        
            if( 
                
                $choose->Rodzaj_paliwa == request('q_paliwo')
                
               
                )
            {
              
                 return true;
            
            }
        
        return false;
        } 

          //Jeżeli moc 
                        
          if( 
            request('q_marka') == NULL &&
            request('q_model') == NULL &&
            request('q_rok_produkcji_od') == NULL &&
            request('q_rok_produkcji_do') == NULL &&
            request('q_paliwo') == NULL &&
            request('q_pojemność_od') == 0 &&
            request('q_pojemność_od') == 0 &&
            request('q_typ_nadwozia') == NULL &&
            request('q_skrzynia') == NULL 
        )
            {
              
            
                if( 
                    
                  
                    ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do'))
                    
                   
                    )
                {
                  
                     return true;
                
                }
            
            return false;
            }  

            
                         //Jeżeli skrzynia

                         if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_pojemność_od') == 0 &&
                            request('q_pojemność_do') == 0 &&
                            request('q_paliwo') == NULL &&
                            request('q_typ_nadwozia') == NULL &&
                            request('q_moc_od') == 0 &&
                            request('q_moc_do') == 0
                           
                          
                        )
                            

                        {
                                if( 
                                   
                                    $choose->Skrzynia_biegów == request('q_skrzynia')
                                  )
                                
                                {
                                  
                                     return true;
                                }
                            
                            return false;

                        } 

                         //Jeżeli skrzynia i nadwozie

                         if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_paliwo') == NULL &&
                            request('q_moc_od') == 0 &&
                            request('q_moc_do') == 0 &&
                            request('q_pojemność_od') == 0 &&
                            request('q_pojemność_do') == 0 
                           
                         
                           
                          
                        )
                            

                        {
                                if( 
                                   
                                    $choose->Skrzynia_biegów ==  request('q_skrzynia') &&
                                    $choose->Typ_nadwozia == request('q_typ_nadwozia')
                                  )
                                
                                {
                                     return true;
                                }
                            
                            return false;

                        }

                          //Jeżeli pojemnosc

                          if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_paliwo') == NULL &&
                            request('q_skrzynia') == NULL &&
                            request('q_typ_nadwozia') == NULL &&
                            request('q_moc_od') == 0 &&
                            request('q_moc_do') == 0
                           
                          
                        )
                            

                        {
                                if( 
                                    ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_do'))
                                 
                                )

                                {
                                  
                                     return true;
                                }
                            
                            return false;

                        } 


                //Jeżeli tylko marka i model    

                if( request('q_rok_produkcji_od') == NULL && 
                    request('q_rok_produkcji_do') == NULL &&
                    request('q_skrzynia') == NULL &&
                    request('q_paliwo') == NULL &&
                    request('q_moc_od')== 0 &&
                    request('q_moc_do')== 0 &&
                    request('q_pojemność_od')== 0 &&
                    request('q_pojemność_od')== 0 &&
                    request('q_typ_nadwozia')== NULL
                    )
                {
                        
        
                        if( $choose->Marka_pojazdu == request('q_marka') && 
                            $choose->Model_pojazdu == request('q_model')
                            )
                        {
                          
                             return true;
                        
                        }
            
                   return false;
                }

                //Jeżeli tylko model marka i rok produkcji  

                if( 
                request('q_skrzynia') == NULL &&
                request('q_paliwo') == NULL &&
                request('q_moc_od')== 0 &&
                request('q_moc_do')== 0 &&
                request('q_pojemność_od')== 0 &&
                request('q_pojemność_od')== 0 &&
                request('q_typ_nadwozia')== NULL
                )
            {
                    
    
                    if( $choose->Marka_pojazdu == request('q_marka') && 
                        $choose->Model_pojazdu == request('q_model') && 
                        ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do'))
                     
                       )
                    {
                      
                         return true;
                    
                    }
        
               return false;
            }

             //Jeżeli tylko model marka i skrzynia 

            if( request('q_rok_produkcji_do')== NULL &&
                request('q_rok_produkcji_od')== NULL &&
               
                request('q_paliwo') == NULL &&
                request('q_moc_od')== 0 &&
                request('q_moc_do')== 0 &&
                request('q_pojemność_od')== 0 &&
                request('q_pojemność_od')== 0 &&
                request('q_typ_nadwozia')== NULL
                )
            {
                    
    
                    if( 
                        $choose->Skrzynia_biegów == request('q_skrzynia')&&
                        $choose->Marka_pojazdu == request('q_marka') && 
                        $choose->Model_pojazdu == request('q_model')
                       
                        )
                    {
                      
                         return true;
                    
                    }
        
               return false;
            }
            //Jeżeli marka model i paliwo

            if( request('q_rok_produkcji_do')== NULL &&
            request('q_rok_produkcji_od')== NULL &&
           
            request('q_skrzynia') == NULL &&
            request('q_moc_od')== 0 &&
            request('q_moc_do')== 0 &&
            request('q_pojemność_od')== 0 &&
            request('q_pojemność_od')== 0 &&
            request('q_typ_nadwozia')== NULL
            )
        {
                

                if( 
                    $choose->Rodzaj_paliwa == request('q_paliwo')&&
                    $choose->Marka_pojazdu == request('q_marka') && 
                    $choose->Model_pojazdu == request('q_model')
                   
                    )
                {
                  
                     return true;
                
                }
    
           return false;
        }

          //Jeżeli marka model i moc
        if( request('q_rok_produkcji_do')== NULL &&
            request('q_rok_produkcji_od')== NULL &&
            request('q_paliwo') == NULL &&
            request('q_skrzynia') == NULL &&
        
            request('q_pojemność_od')== 0 &&
            request('q_pojemność_od')== 0 &&
            request('q_typ_nadwozia')== NULL
            )
        {
                

                if( 
                    ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do')) &&
                    $choose->Marka_pojazdu == request('q_marka') && 
                    $choose->Model_pojazdu == request('q_model')
                   
                    )
                {
                  
                     return true;
                
                }
    
           return false;
        }

           //Jeżeli marka model i pojemność

        if( request('q_rok_produkcji_do')== NULL &&
        request('q_rok_produkcji_od')== NULL &&
        request('q_paliwo') == NULL &&
        request('q_skrzynia') == NULL &&
        request('q_moc_od')== 0 &&
        request('q_moc_do')== 0 &&
        request('q_typ_nadwozia')== NULL
        )
    {
            

             if( 
                $choose->Marka_pojazdu == request('q_marka') && 
                $choose->Model_pojazdu == request('q_model') && 
                ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_od'))
                
                )
            {
              
                 return true;
            
            }

       return false;
    }

   //Jeżeli marka model i nadwozie

    if( request('q_rok_produkcji_do')== NULL &&
    request('q_rok_produkcji_od')== NULL &&
    request('q_paliwo') == NULL &&
    request('q_skrzynia') == NULL &&
    request('q_moc_od')== 0 &&
    request('q_moc_do')== 0 &&
    request('q_pojemność_od')== 0 &&
    request('q_pojemność_od')== 0
  
    )
{
        

        if( 
            $choose->Typ_nadwozia == request('q_typ_nadwozia') &&
            $choose->Marka_pojazdu == request('q_marka') && 
            $choose->Model_pojazdu == request('q_model')
           
            )
        {
          
             return true;
        
        }

   return false;
}

//Jeżeli rok 
if(  request('q_skrzynia') == NULL &&
request('q_marka')== NULL &&
request('q_model')== NULL &&
request('q_paliwo') == NULL &&
request('q_moc_od')== 0 &&
request('q_moc_do')== 0 &&
request('q_pojemność_od')== 0 &&
request('q_pojemność_od')== 0 &&
request('q_typ_nadwozia')== NULL

)
{
    

    if( 
        ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do'))
        
       
        )
    {
      
         return true;
    
    }

return false;
}



//Jeżeli rok i paliwo

if( request('q_skrzynia') == NULL &&
request('q_marka')== NULL &&
request('q_model')== NULL &&
request('q_moc_od')== 0 &&
request('q_moc_do')== 0 &&
request('q_pojemność_od')== 0 &&
request('q_pojemność_od')== 0 &&
request('q_typ_nadwozia')== NULL

)
{
    

    if( 
        ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
        $choose->Rodzaj_paliwa == request('q_paliwo')
        
       
        )
    {
      
         return true;
    
    }

return false;
}

//Jeżeli rok i moc
if( request('q_skrzynia') == NULL &&
request('q_marka')== NULL &&
request('q_model')== NULL &&
request('q_paliwo') == NULL &&
request('q_pojemność_od')== 0 &&
request('q_pojemność_od')== 0 &&
request('q_typ_nadwozia')== NULL

)
{
    

    if( 
        ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
        ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do'))
        
       
        )
    {
      
         return true;
    
    }

return false;
}      

//Jeżeli rok i pojemnosc

if( request('q_skrzynia') == NULL &&
request('q_marka')== NULL &&
request('q_model')== NULL &&
request('q_moc_od')== 0 &&
request('q_moc_do')== 0 &&
request('q_paliwo') == NULL &&
request('q_typ_nadwozia')== NULL

)
{
    

    if( 
        ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
        ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_od'))
        
       
        )
    {
      
         return true;
    
    }

return false;
}  

//Jeżeli rok i skrzynia

if( 
request('q_marka')== NULL &&
request('q_model')== NULL &&
request('q_pojemność_od') == 0 &&
request('q_pojemność_od') == 0 &&
request('q_moc_od')== 0 &&
request('q_moc_do')== 0 &&
request('q_paliwo') == NULL &&
request('q_typ_nadwozia')== NULL

)
{
    

    if( 
        ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
        $choose->Skrzynia_biegów == request('q_skrzynia')
        
       
        )
    {
      
         return true;
    
    }

return false;
}  

//Jeżeli rok i nadwozie

if( 
    request('q_marka')== NULL &&
    request('q_model')== NULL &&
    request('q_pojemność_od') == 0 &&
    request('q_pojemność_od') == 0 &&
    request('q_skrzynia') == NULL &&
    request('q_moc_od')== 0 &&
    request('q_moc_do')== 0 &&
    request('q_paliwo') == NULL

    
    )
    {
        
    
        if( 
            ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
            $choose->Typ_nadwozia == request('q_typ_nadwozia')
            
           
            )
        {
          
             return true;
        
        }
    
    return false;
    }  

   

        //Jeżeli paliwo i moc

        if( 
            request('q_marka')== NULL &&
            request('q_model')== NULL &&
            request('q_rok_produkcji_od')== NULL &&
            request('q_rok_produkcji_do')== NULL &&
            request('q_pojemność_od') == 0 &&
            request('q_pojemność_od') == 0 &&
            request('q_skrzynia') == NULL &&
            request('q_typ_nadwozia') == NULL 
           
        
            
            )
            {
                
            
                if( 
                    
                    $choose->Rodzaj_paliwa == request('q_paliwo') &&
                    ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do'))
                    
                   
                    )
                {
                  
                     return true;
                
                }
            
            return false;
            } 

            //Jeżeli paliwo i pojemnosc

            if( 
                request('q_marka')== NULL &&
                request('q_model')== NULL &&
                request('q_rok_produkcji_od')== NULL &&
                request('q_rok_produkcji_do')== NULL &&
                request('q_skrzynia') == NULL &&
                request('q_moc_od')== 0 &&
                request('q_moc_do')== 0 &&
                request('q_typ_nadwozia') == NULL
               
            
                
                )
                {
                    
                
                    if( 
                        
                        $choose->Rodzaj_paliwa ==   request('q_paliwo') &&
                        ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_do'))
                        
                       
                        )
                    {
                      
                         return true;
                    
                    }
                
                return false;
                } 
            
                //Jeżeli paliwo i skrzynia

                if( 
                    request('q_marka')== NULL &&
                    request('q_model')== NULL &&
                    request('q_rok_produkcji_od')== NULL &&
                    request('q_rok_produkcji_do')== NULL &&
                    request('q_moc_od')== 0 &&
                    request('q_moc_do')== 0 &&
                    request('q_pojemność_od') == 0 &&
                    request('q_pojemność_od') == 0 &&
                    request('q_typ_nadwozia')== NULL
                   
                
                    
                    )
                    {
                        
                    
                        if( 
                            
                            $choose->Rodzaj_paliwa ==   request('q_paliwo') &&
                            $choose->Skrzynia_biegów == request('q_skrzynia')
                            
                           
                            )
                        {
                          
                             return true;
                        
                        }
                    
                    return false;
                    } 

                    //Jeżeli paliwo i nadwozie

                    if( 
                        request('q_marka')== NULL &&
                        request('q_model')== NULL &&
                        request('q_rok_produkcji_od')== NULL &&
                        request('q_rok_produkcji_do')== NULL &&
                        request('q_moc_od')== 0 &&
                        request('q_moc_do')== 0 &&
                        request('q_pojemność_od') == 0 &&
                        request('q_pojemność_od') == 0

                        )
                        {
                            
                        
                            if( 
                                
                                $choose->Rodzaj_paliwa ==   request('q_paliwo') &&
                                $choose->Typ_nadwozia ==    request('q_typ_nadwozia')
                                
                               
                                )
                            {
                              
                                 return true;
                            
                            }
                        
                        return false;
                        }     

                  
                     //Jeżeli moc i pojemność

                        if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_paliwo') == NULL &&
                            request('q_typ_nadwozia') == NULL &&
                            request('q_skrzynia') == NULL 
                        )
                        {
                                if( 
                                    ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do')) &&
                                    ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_do'))
                                  )
                                {
                                  
                                     return true;
                                
                                }
                            
                            return false;

                        }  

                        //Jeżeli moc i skrzynia

                        if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_pojemność_od') == 0 &&
                            request('q_pojemność_do') == 0 &&
                            request('q_paliwo') == NULL &&
                            request('q_typ_nadwozia') == NULL 
                          
                        )
                        {
                                if( 
                                    ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do')) &&
                                    $choose->Skrzynia_biegów == request('q_skrzynia')
                                  )
                                {
                                  
                                     return true;
                                
                                }
                            
                            return false;

                        }  

                      


                    //Jeżeli moc i nadwozie


                        if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_pojemność_od') == 0 &&
                            request('q_pojemność_do') == 0 &&
                            request('q_paliwo') == NULL &&
                            request('q_skrzynia') == NULL
                           
                          
                        )
                            

                        {
                                if( 
                                    ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do')) &&
                                    $choose->Typ_nadwozia == request('q_typ_nadwozia')
                                  )

                                {
                                  
                                     return true;
                                }
                            
                            return false;

                        } 

                      

                        //Jeżeli pojemnosc skrzynia

                        if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_paliwo') == NULL &&
                          
                            request('q_typ_nadwozia') == NULL &&
                            request('q_moc_od') == 0 &&
                            request('q_moc_do') == 0
                           
                          
                        )
                            

                        {
                                if( 
                                    ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_do')) &&
                                    $choose->Skrzynia_biegów == request('q_skrzynia')
                                  )
                                
                                {
                                  
                                     return true;
                                }
                            
                            return false;

                        } 


                         //Jeżeli pojemnosc nadwozie

                         if( 
                            request('q_marka') == NULL &&
                            request('q_model') == NULL &&
                            request('q_rok_produkcji_od') == NULL &&
                            request('q_rok_produkcji_do') == NULL &&
                            request('q_paliwo') == NULL &&
                            request('q_skrzynia') == NULL &&
                            request('q_moc_od') == 0 &&
                            request('q_moc_do') == 0
                           
                          
                        )
                            

                        {
                                if( 
                                    ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_do')) &&
                                    $choose->Typ_nadwozia == request('q_typ_nadwozia')
                                  )
                                
                                {
                                  
                                     return true;
                                }
                            
                            return false;

                        } 




              

                       

                      
                      

                if($choose->Marka_pojazdu == request('q_marka') && 
                    $choose->Model_pojazdu == request('q_model') && 
                    ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
                    $choose->Skrzynia_biegów == request('q_skrzynia') && 
                    $choose->Rodzaj_paliwa == request('q_paliwo') &&
                     $choose->Rodzaj_paliwa ==   request('q_paliwo') &&
                    ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_do'))&&
                    $choose->Typ_nadwozia == request('q_typ_nadwozia'))
           
                    {
                        return true;
                    }

                return false;


                if($choose->Marka_pojazdu == request('q_marka') && 
                    $choose->Model_pojazdu == request('q_model') && 
                    ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
                    $choose->Skrzynia_biegów == request('q_skrzynia') && 
                    $choose->Rodzaj_paliwa == request('q_paliwo') &&
                    ($choose->Moc >= request('q_moc_od') && $choose->Moc <= request('q_moc_do')) &&
                    ($choose->Pojemność_skokowa >= request('q_pojemność_od') && $choose->Pojemność_skokowa <= request('q_pojemność_do'))&&
                    $choose->Typ_nadwozia == request('q_typ_nadwozia'))
                
                    {
                        return true;
                    }

              
                return false;


                }

                
      
        );
    
      
            error_log('FIND');
            //return back()->with(['test' => $call]);
            error_log(count($call));
            //return view("mycar.mycarphp", compact("posts"));
          
           
        
            if($request->has('save')){
    
                error_log(request('id'));
                error_log(Auth::id());
        
                $save=new UserCar();
                $save->id_samochodu=request('id');
                $save->id_uzytkownika=Auth::id();
                $save->save();
        
                error_log('id');
                error_log($request);

                return redirect()->route('savedcars.saved');
        
            } 
            

            return view('mycar.mycarphp' , ['cars' => $call]);
            //return redirect()->route('mycar.mycarphp')->with( ['test' => $call] );
            // error_log($request->cookie('SSS'));
            // return back()->withCookie($request);

            
          
        }

    }


      



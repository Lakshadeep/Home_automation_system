#include<avr/io.h>				
#include<util/delay.h>
#include<compat/deprecated.h>
#include<avr/interrupt.h>
#include"uart.h"

#define F_CPU 12000000  
#define USART_BAUDRATE 9600                               // SERIAL Communication @ 9600 baud
#define BAUD_PRESCALE (((F_CPU / (USART_BAUDRATE * 16UL))) - 1) 
ISR (TIMER2_OVF_vect)				                      // Subroutine of Timer2 overflow interrupt
{

	PORTB=0b00001001; 
	
}
ISR (TIMER2_COMP_vect)				                      // Subroutine of Timer2 compare match interrupt
{
	PORTB=0b00000000;
}

void main()
{
      uart_init();

	  _delay_ms(100);
      TCCR1A =(1<<COM1A1)|(1<<COM1B1)|(1<<WGM10);         // 8-bit Fast PWM  mode 
      TCCR1B =(1<<WGM12)|(1<<CS10) ;
	  TCNT1=0x00; 
	  TIMSK=0xC0;					                      // This is for interrupt enable for timer0.
	  TCCR2=0x4C;						                  // This is for timer2 initialization.,fAST pwM ,prescalar 64
   	  
	  sei();  
	  TCNT2=0x00;                                    // No Prescaling
	  
	     
	 

      DDRB=0b00001111;
	  while(1)
      {
	    
	
       unsigned char data;
	    data=uart_read();			                 //read a charactor from UART
	  switch (data)
	  {
	  case 'a':	
	  	                    //correctn		
	    OCR1A=255;
						
	    break; 
	  case 'e':
	                       //correctn				
	    OCR1A=0;
		
		break;
	  case 'b':
	    
		OCR1B=255;	
		break;
      case 'f':
	     
		OCR1B=0;	
		break;
	 
      
  }
}
}

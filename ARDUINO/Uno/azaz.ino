/*
 Controlling a servo position using a potentiometer (variable resistor)
 by Michal Rinott <http://people.interaction-ivrea.it/m.rinott>

 modified on 8 Nov 2013
 by Scott Fitzgerald
 http://www.arduino.cc/en/Tutorial/Knob
*/

#include <Servo.h>

Servo myservo1;
Servo myservo2;
Servo myservo3;
Servo myservo4;// create servo object to control a servo
int potpin = A0;  // analog pin used to connect the potentiometer
int val;   


void setup() {
  myservo1.attach(9);
  myservo2.attach(8);
  myservo3.attach(10);
  myservo4.attach(11);// attaches the servo on pin 9 to the servo object
  myservo.write(0);
  myservo2.write(0);
  myservo3.write(0);
  myservo4.write(0);
//  pinMode(8, OUTPUT);
  pinMode(5, INPUT);
  pinMode(6, INPUT);
  pinMode(7, INPUT);
  
  
  
}

void loop() {
  val = analogRead(potpin); 

  
  if(val > 60) { 
    delay(200);
    val = analogRead(potpin); 
    if(val > 60) {  
        delay(200);
        val = analogRead(potpin); 
        if(val > 60) {  
          delay(200);
          val = analogRead(potpin); 
          if(val > 60) {  
            myservo4.write(145);                  
            delay(2000);   
            myservo4.write(0); 
          }
          else {
            myservo3.write(145);                  
            delay(2000);   
            myservo3.write(0); 
          } 
    }  
      else {
      myservo2.write(145);                  
      delay(2000);   
      myservo2.write(0);  
      }
    }  
    else {       
    myservo1.write(145);                 
    delay(2000);   
    myservo1.write(0);  
    }
  }         
  
  
}

int Right = P1; // right
int Left = P0; // Left
int Arev = P3;  //               b motor
int Afor = P2;   //               a motor
int Brev = P10;  //               b motor
int Bfor = P4;   //               a motor
const int TrigPin = P13; // Trigger Pin of Ultrasonic Sensor is P12
const int EchoPin = P15; // Echo Pin of Ultrasonic Sensor is P14
long distance, duration ;


// functional connections
#define MOTOR_A_PWM Arev // Motor A PWM Speed
#define MOTOR_A_DIR Afor // Motor A Direction
#define MOTOR_B_PWM Brev // Motor B PWM Speed
#define MOTOR_B_DIR Bfor // Motor B Direction
 
// the actual values for "fast" and "slow" depend on the motor
#define PWM_SLOW 50  // arbitrary slow speed PWM duty cycle
#define PWM_FAST 200 // arbitrary fast speed PWM duty cycle
#define DIR_DELAY 10000 // brief delay for abrupt motor changes
 
void setup()
{
  Serial.begin( 9600 );
  pinMode( MOTOR_A_DIR, OUTPUT );
  pinMode( MOTOR_A_PWM, OUTPUT );
  pinMode( MOTOR_B_DIR, OUTPUT );
  pinMode( MOTOR_B_PWM, OUTPUT );
 
}
 
void loop()
{
    Serial.print ("RIGHT = ") ;
    Serial.println(analogRead(Right));
    Serial.print ("LEFT = ") ;
    Serial.println(analogRead(Left));
    
 digitalWrite(TrigPin, HIGH);                     // ultrasonic measuring 
 delayMicroseconds(2);
 digitalWrite(TrigPin, LOW);
 delayMicroseconds(10);
 digitalWrite(TrigPin, HIGH);
 duration = pulseIn(EchoPin, LOW);
distance = duration / 58.2;  

     Serial.print(distance);
    Serial.println();  

   if ( analogRead(Left)< 2000 &&  analogRead(Right)< 2000 ) {       //Stop
        digitalWrite( MOTOR_B_DIR, HIGH );
        digitalWrite( MOTOR_B_PWM, HIGH );
        digitalWrite( MOTOR_A_DIR, HIGH );
        digitalWrite( MOTOR_A_PWM, HIGH );
       
 }
 if ( analogRead(Left)> 2000 &&  analogRead(Right)> 2000 ) {   // Forward
    
        digitalWrite( MOTOR_B_DIR, LOW );
        digitalWrite( MOTOR_B_PWM, LOW );
        digitalWrite( MOTOR_A_DIR, LOW );
        digitalWrite( MOTOR_A_PWM, LOW );
        delay(5000);
        digitalWrite( MOTOR_A_DIR, HIGH ); // direction = forward
        analogWrite( MOTOR_A_PWM, 255-PWM_FAST ); // PWM speed = slow
        digitalWrite( MOTOR_B_DIR, HIGH ); // direction = forward
        analogWrite( MOTOR_B_PWM, 255-PWM_FAST ); // PWM speed = slow
   }

     
      if ( distance < 20 ) {  
        digitalWrite( MOTOR_B_DIR, HIGH );
        digitalWrite( MOTOR_B_PWM, HIGH );
        digitalWrite( MOTOR_A_DIR, HIGH );
        digitalWrite( MOTOR_A_PWM, HIGH );  
     
     }
  if ( analogRead(Left)< 2000 &&  analogRead(Right)> 2000 ){  // Right
            digitalWrite( MOTOR_B_DIR, LOW );
        digitalWrite( MOTOR_B_PWM, LOW );
        digitalWrite( MOTOR_A_DIR, LOW );
        digitalWrite( MOTOR_A_PWM, LOW );
        delay( 250);
        digitalWrite( MOTOR_A_DIR, LOW ); // direction = forward
        analogWrite( MOTOR_A_PWM, 255-PWM_FAST ); // PWM speed = fast
        digitalWrite( MOTOR_B_DIR, HIGH ); // direction = forward
        analogWrite( MOTOR_B_PWM, 255-PWM_SLOW ); // PWM speed = slow
   }
     if   (analogRead(Right)< 2000 &&  analogRead(Left)> 2000 ){       //  left
        digitalWrite( MOTOR_B_DIR, LOW );
        digitalWrite( MOTOR_B_PWM, LOW );
        digitalWrite( MOTOR_A_DIR, LOW );
        digitalWrite( MOTOR_A_PWM, LOW );
        delay(240 );
        digitalWrite( MOTOR_A_DIR, HIGH ); // direction = forward
        analogWrite( MOTOR_A_PWM, 255-PWM_SLOW ); // PWM speed = fast
        digitalWrite( MOTOR_B_DIR, LOW ); // direction = forward
        analogWrite( MOTOR_B_PWM, 255-PWM_FAST ); // PWM speed = slow
     }
     }

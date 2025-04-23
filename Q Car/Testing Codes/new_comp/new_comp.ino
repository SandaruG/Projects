int Right = P1; // right
int Left = P0; // Left
int Arev = P3;  //               b motor
int Afor = P2;   //               a motor
int Brev = P10;  //               b motor
int Bfor = P4;   //               a motor
const int TrigPin = P13; // Trigger Pin of Ultrasonic Sensor is P13
const int EchoPin = P15; // Echo Pin of Ultrasonic Sensor is P15
long distance, duration ;


void setup()
{
  Serial.begin(9600);
  pinMode(Arev, OUTPUT);
  pinMode(Afor, OUTPUT);
  pinMode(Brev, OUTPUT);
  pinMode(Bfor, OUTPUT);
  pinMode(Right, INPUT);

  pinMode(Left,INPUT);
  
}

void loop() {
    Serial.print("Right = ");
    Serial.println(analogRead(Right));
    Serial.print("Left = ");
    Serial.println(analogRead(Left));
 pinMode(TrigPin, OUTPUT);
 digitalWrite(TrigPin, LOW);
 delayMicroseconds(2);
 digitalWrite(TrigPin, HIGH);
 delayMicroseconds(10);
 digitalWrite(TrigPin, LOW);
 pinMode(EchoPin, INPUT);
 duration = pulseIn(EchoPin, HIGH);
distance = duration / 58.2;  
  Serial.print("Distance = ");
  Serial.print(distance);

 Serial.println();
 delay(100);
 
  if ( analogRead(Left)> 2000 &&  analogRead(Right)> 2000 ) {   // Forward
  digitalWrite(Afor,HIGH);
  digitalWrite(Bfor,HIGH);
  }
  if ( analogRead(Left)< 2000 &&  analogRead(Right)< 2000 ) {    
 digitalWrite(Afor,LOW);
 digitalWrite(Bfor,LOW);
    }
  if ( analogRead(Left)< 2000 &&  analogRead(Right)> 2000 ){  // Right
 digitalWrite(Bfor,HIGH);
 digitalWrite(Bfor,HIGH);
 digitalWrite(Afor,LOW);
 delay(250);
     }
  if   (analogRead(Right)< 2000 &&  analogRead(Left)> 2000 ){       //  left
 digitalWrite(Bfor,LOW);
 digitalWrite(Afor,HIGH);
 delay(250);
    }
    if ( distance < 20 ) {
 digitalWrite(Afor,LOW);
 digitalWrite(Bfor,HIGH);
 delay(10);

}
delay(100);
}

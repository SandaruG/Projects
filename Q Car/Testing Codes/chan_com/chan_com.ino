
int Right = P7; // right
int Left = P6; // left
int Arev = P10;  // Motor b pins Left
int Afor = P3; 
int Brev = P2;  // Motor a pins Right
int Bfor = P4;
const int TrigPin = P12; // Trigger Pin of Ultrasonic Sensor is P12
const int EchoPin = P14; // Echo Pin of Ultrasonic Sensor is P14
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
 
  if ( analogRead(Left)< 2000 &&  analogRead(Right)< 2000 ) {
  digitalWrite(Afor,HIGH);
  digitalWrite(Bfor,HIGH);
  }
  if ( analogRead(Left)< 2000 &&  analogRead(Right)< 2000 ) {
 digitalWrite(Afor,LOW);
 digitalWrite(Bfor,LOW);
    }
 if ( analogRead(Left)< 2000 &&  analogRead(Right)> 2000 ){
 digitalWrite(Bfor,HIGH);
 digitalWrite(Afor,LOW);
 delay(100);
     }
   if ( (analogRead(Right)< 2000 &&  analogRead(Left)> 2000 )){
 digitalWrite(Bfor,LOW);
 digitalWrite(Afor,HIGH);
 delay(250);
    }
    if ( distance < 20 ) {
 digitalWrite(Afor,LOW);
 digitalWrite(Bfor,LOW);
}
delay(100);
}

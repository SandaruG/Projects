int AF = P10;  // Motor b pins 
int AR = P3;
int BF = P2;  // Motor a pins
int Br = P4;
const int TrigPin = P12; // Trigger Pin of Ultrasonic Sensor is P12
const int EchoPin = P14; // Echo Pin of Ultrasonic Sensor is P14
long distance, duration ;

void setup() {
   Serial.begin(9600); // Starting Serial Terminal
  pinMode(AF, OUTPUT);
  pinMode(AR, OUTPUT);
  pinMode(BF, OUTPUT);
  pinMode(Br, OUTPUT);
  

}


void loop() {
   pinMode(TrigPin, OUTPUT);
 digitalWrite(TrigPin, LOW);
 delayMicroseconds(2);
 digitalWrite(TrigPin, HIGH);
 delayMicroseconds(10);
 digitalWrite(TrigPin, LOW);
 pinMode(EchoPin, INPUT);
 duration = pulseIn(EchoPin, HIGH);
distance = duration / 58.2;  
 Serial.print(distance);
 Serial.println();
 delay(100);

if ( distance < 20 ) {
 digitalWrite(AF,LOW);
 digitalWrite(BF,LOW);
 digitalWrite(AR,HIGH);
 digitalWrite(Br,HIGH);
 delay(1000);
 digitalWrite(AR,LOW);
 digitalWrite(Br,LOW);
 delay(500);
 digitalWrite(AF,HIGH);
 delay(800);
 digitalWrite(AF,LOW);
 digitalWrite(AF,HIGH);
 digitalWrite(BF,HIGH);
 delay(1000);

}
}

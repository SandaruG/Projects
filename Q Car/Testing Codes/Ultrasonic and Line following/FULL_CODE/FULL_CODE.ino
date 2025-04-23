int left = P1; // left IR
int middle = P7; // middle IR
int right = P0; // right IR
int AF = P4;  // Motor b pins right
int AR = P10;
int BF = P2;  // Motor a pins left
int Br = P3;
const int TrigPin = P12; // Trigger Pin of Ultrasonic Sensor is P12
const int EchoPin = P14; // Echo Pin of Ultrasonic Sensor is P14
long distance, duration ;

void setup()
{
  Serial.begin(9600);
  pinMode(AF, OUTPUT);
  pinMode(AR, OUTPUT);
  pinMode(BF, OUTPUT);
  pinMode(Br, OUTPUT);
  pinMode(left, INPUT);
  pinMode(middle, INPUT);
  pinMode(right,INPUT);
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
 Serial.println(analogRead(left));
 Serial.println(analogRead(middle));
 Serial.println(analogRead(right));
 delay(100);
    
  if (analogRead(middle)> 2000 ) {         //run when detected black
  digitalWrite(AR,HIGH);
  digitalWrite(Br,HIGH);
  }
  if (analogRead(middle)< 2000 ) {           // stop when not detecting black
 digitalWrite(AR,LOW);
 digitalWrite(Br,LOW);
  }
  if ( (analogRead(middle)< 2000 &&  analogRead(left)> 2000 )){                      //turn left
 digitalWrite(AR,HIGH);
 digitalWrite(Br,LOW);
 delay(300);
 digitalWrite(AR,HIGH);
 digitalWrite(Br,HIGH);
 delay(200);
    }
    if ( analogRead(middle)< 2000 &&  analogRead(right)> 2000 ){                        //turn Right
 digitalWrite(AR,LOW);
 digitalWrite(Br,HIGH);
 delay(300);
 digitalWrite(AR,HIGH);
 digitalWrite(Br,HIGH);
 delay(200);

    }
    if ( distance < 20 ) {           //stop
 digitalWrite(AF,LOW);
 digitalWrite(BF,LOW);
 digitalWrite(AR,LOW);
 digitalWrite(Br,LOW);
}
}
